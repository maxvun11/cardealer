<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\CarCategory;
use App\Models\CarModel;
use Illuminate\Http\Request;

class Cars extends Controller
{


    public function showAllCar()
    {
        $brand = Brand::all();
        $categories = CarCategory::all();
        return view('viewCarPage',['brands'=>$brand, 'car_categories' => $categories]);
    }
    
  
    public function showCarDetail($id)
    {
        // Fetch the category along with related models
        $categories = CarCategory::with('carModels')->find($id);
        
        // Check if the category exists
        if (!$categories) {
            return redirect()->back()->with('error', 'Category not found!');
        }
    
        return view('carDetailPage', ['categories' => $categories]);
    }
    
    






}
