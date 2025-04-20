<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

Route::get('/carDetailPage/{id}', [CarController::class, 'showCarDetail'])->name('carDetailPage');

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/', function () {
    return view('homePage');
})->name('home');


Route::get('/viewCarPage',[CarController::class, 'showAllCar'])->name('viewCar');





Route::middleware('can:update-car')->group(function () {
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
})->name('loginPage');

Route::post('/loginPage', [LoginController::class, 'login'])
->name('login');

Route::get('/loginPage/reg', function () {
    return view('registerPage');
})->name('registerPage');

Route::post('/registerPage', [RegisterController::class, 'register'])->name('register');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    Cookie::queue(Cookie::forget('user_role'));
    return redirect('/');
})->name('logout');

Route::get('/updateCarPage', function () {
    return view('updateCar');
})->middleware('can:update-car')->name('updateCarPage');


Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contacts.submit');

