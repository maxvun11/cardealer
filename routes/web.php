<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/carDetailPage/{id}', [CarController::class, 'showCarDetail'])->name('carDetailPage');

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/', function () {
    return view('homePage');
})->name('home');


Route::get('/viewCarPage',[CarController::class, 'showAllCar'])->name('viewCar');





//Route::middleware('can:update-car')->group(function () {
    Route::post('/createCar/{id}', [CarController::class, 'createCar'])->name('createCar');
    Route::post('/createBrand',[CarController::class, 'createBrand'])->name('createBrand');
    Route::get('/createCarFormPage/{id}', [CarController::class,'showCreateModelPage'])-> name('createCarForm');
    Route::get('/createBrandFormPage',function(){
        return view('createBrandFormPage');
    })-> name('createBrandForm');
    Route::get('/updateCarPage', [CarController::class,'showUpdatePage'])->name('updateCar');
    Route::get('/updateCarFormPage/{id}', [CarController::class,'showUpdateModelPage'])->name('updateCarForm');
    Route::get('/updateCarPage/{id}', [CarController::class,'showCategoryUpdatePage'])->name('updateCategory');
    
    Route::put('/updateCarModel', [CarController::class, 'updateCar'])->name('updateModel');
    Route::delete('/brands/{id}', [CarController::class, 'deleteBrand'])->name('deleteBrand');
    Route::delete('/CarController/{id}', [CarController::class, 'deleteCar'])->name('deleteCar');
    Route::view('/viewAppointmentPage', 'viewAppointmentPage')->name('viewAppointment');
//});



Route::get('/bookCarPage/{id}', function ($id) {
    return view('bookCarPage', ['id' => $id]); 
});
Route::get('/contactUsPage', function () {
    return view('contactUsPage');
});

Route::get('/afterSalesPage', function () {
    return view('afterSalesPage');
});

Route::get('/loginPage', function () {
    return view('loginPage');
});

Route::get('/loginPage/reg', function () {
    return view('registerPage');
});



Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contacts.submit');

