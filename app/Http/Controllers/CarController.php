<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\CarCategory;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{


    public function showAllCar()
    {
        $brand = Brand::all();
        $car_categories = CarCategory::all();
        return view('viewCarPage',['brands'=>$brand, 'car_categories'=> $car_categories]);
    }
    
  
    public function showCarDetail($id)
    {
        $categories = CarCategory::with('carModels')->find($id);
        
        if (!$categories) {
            return redirect()->back()->with('error', 'Category not found!');
        }
    
        return view('carDetailPage', ['categories' => $categories]);
    }

    public function showCategoryUpdatePage($id) {
        $brand_id = $id;
    
        $brand = Brand::findOrFail($id);
    
        $categories = CarCategory::with('carModels')
                        ->where('brand_id', $brand_id)
                        ->paginate(4);
    
        return view('updateModelPage', compact('brand_id', 'brand', 'categories'));
    }
    
    
    

    public function showUpdatePage() {
        $brands = Brand::paginate(4);
        return view('updateCarPage', ['brands' => $brands]);
    }
    
    public function updateCar(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'category'=> 'required_if:category_id,new|string|max:255',
            'model' => 'required|string',
            'brochureLink' => 'required|url',
            'imageURL' => 'required|url',
            'modelDesc' => 'required|string',
            'modelDesc2' => 'nullable|string',
            'modelDesc3' => 'nullable|string',
        ]);
    
        $category = CarCategory::findOrFail($request->category_id);
        $model = CarModel::findOrFail($request->model_id);
    
        $category->update([
            'brochureLink' => $validated['brochureLink'],
            'imageURL' => $validated['imageURL'],
        ]);
    
        $model->update([
            'modelName' => $validated['model'],
            'description' => $validated['modelDesc'],
            'description2' => $validated['modelDesc2'],
            'description3' => $validated['modelDesc3'],
            'car_categories_id' => $validated['category_id'],
        ]);
        
        $modelCount = CarModel::where('modelName', $request->model)
        ->where('car_categories_id', $category->id)
        ->count();

        if ($modelCount > 1) {
        return redirect()->back()
        ->withErrors(['model' => 'This car model already exists in the selected category.'])
        ->withInput();
        }
        return redirect()->route('updateCategory', ['id' => $request->brand_id])
                 ->with('success', 'Car inventory updated successfully.');

    }

    public function createBrand(Request $request)
    {
        $request->merge([
            'brand' => strtoupper($request->input('brand')),
        ]);
        
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'brand_desc' => 'required|string|max:255',
            'brandImageURL' => 'required|url',
        ]);
    
        if (Brand::where('brandName', $request->input('brand'))->exists()) {
            return redirect()->back()
                ->withErrors(['brand' => 'This brand has already existed.'])
                ->withInput();
        }
        
        else
        {
            $brand = Brand::create([
                'brandName' => $validated['brand'],
                'description' => $validated['brand_desc'],
                'brandImageURL' => $validated['brandImageURL'],
            ]);
        }
        return redirect()->route('updateCar')->with('success', 'Car Inventory Created Successfully.');
    }
    
    public function createCar(Request $request, $id)
    {
        $validated = $request->validate([
          
            'category_id' => 'required',
            'category' => 'required_if:category_id,new|nullable|string|max:255',
            'model' => 'required|string|max:255',
            'brochureLink' => 'required|url',
            'imageURL' => 'required|url',
            'modelDesc' => 'required|string',
            'modelDesc2' => 'nullable|string',
            'modelDesc3' => 'nullable|string',

        ]);
    
        if ($request->category_id === 'new') {
            
            if (CarCategory::where('categoryName', $request->input('category'))->exists()) {
                return redirect()->back()
                    ->withErrors(['category' => 'This category has already existed.'])
                    ->withInput();
            }
            else
            {
            $category = CarCategory::create([
                'categoryName' => $validated['category'],
                'brand_id' => $id,
                'brochureLink' => $validated['brochureLink'],
                'imageURL' => $validated['imageURL'],
            ]);
            }
        } 

        else {
            $category = CarCategory::find( $validated['category_id']);
        }

        if (CarModel::where('modelName', $validated['model'])
        ->where('car_categories_id', $category->id)
        ->exists()) {
            return redirect()->back()
                ->withErrors(['model' => 'This car model already exists in the selected category.'])
                ->withInput();
            }
        
        CarModel::create([
            'modelName' => $validated['model'],
            'description' => $validated['modelDesc'],
            'description2' => $validated['modelDesc2'],
            'description3' => $validated['modelDesc3'],
            'car_categories_id' => $category->id,
        ]);
    
        return redirect()->route('updateCategory', $id)->with('success', 'Car Inventory Created Successfully.');
    }
    
    
    public function showUpdateModelPage(Request $request)
    {
        $id = $request->id;
        $model = CarModel::findOrFail($id);
        $category_id = CarModel::findOrFail($id)->car_categories_id;
        $category = CarCategory::findOrFail($category_id);
        $categories = CarCategory::all();
    
        return view('updateCarFormPage', compact('model','category', 'categories'));
    }

    public function showCreateModelPage(Request $request, $id)
    {
        $brand_id = $id;
        $categories = CarCategory::all();
    
        return view('createCarFormPage', compact('brand_id', 'categories'));
    }

    public function deleteBrand($id)
    {
        $brand = Brand::findOrFail($id); 
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }
    public function deleteCar($id)
    {
        $car = CarModel::findOrFail($id); 
        $car->delete();
    
        return redirect()->back()->with('success', 'Car deleted successfully.');
    }
    
    






}
