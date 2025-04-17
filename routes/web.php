<?php
use App\Http\Controllers\Cars;
use Illuminate\Support\Facades\Route;

Route::get('/carDetailPage/{id}', [Cars::class, 'showCarDetail'])->name('carDetailPage');

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/', function () {
    return view('homePage');
});


Route::get('/viewCarPage',[Cars::class, 'showAllCar'])->name('viewCar');




Route::middleware(['isAdmin'])->group(function () {
    Route::post('/createCar/{id}', [Cars::class, 'createCar'])->name('createCar');
    Route::post('/createBrand',[Cars::class, 'createBrand'])->name('createBrand');
    Route::get('/createCarFormPage/{id}', [Cars::class,'showCreateModelPage'])-> name('createCarForm');
    Route::get('/createBrandFormPage',function(){
        return view('createBrandFormPage');
    })-> name('createBrandForm');
    Route::get('/updateCarPage', [Cars::class,'showUpdatePage'])->name('updateCar');
    Route::get('/updateCarFormPage/{id}', [Cars::class,'showUpdateModelPage'])->name('updateCarForm');
    Route::get('/updateCarPage/{id}', [Cars::class,'showCategoryUpdatePage'])->name('updateCategory');
    
    Route::put('/updateCarModel', [Cars::class, 'updateCar'])->name('updateModel');
    Route::delete('/brands/{id}', [Cars::class, 'deleteBrand'])->name('deleteBrand');
    Route::delete('/cars/{id}', [Cars::class, 'deleteCar'])->name('deleteCar');
    Route::view('/viewAppointmentPage', 'viewAppointmentPage')->name('viewAppointment');
});



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
