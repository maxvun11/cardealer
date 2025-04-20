<?php
use App\Http\Controllers\Cars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CarViewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

Route::get('/carDetailPage/{id}', [Cars::class, 'showCarDetail'])->name('carDetailPage');

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/', function () {
    return view('homePage');
})->name('home');


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
    Route::get('/viewAppointmentPage', [AppointmentController::class, 'index'])->name('viewAppointmentPage');
    Route::post('/bookCarPage', [CarViewController::class, 'store'])->name('carviews.store');
});



Route::get('/bookCarPage/{id}', [CarViewController::class, 'create'])->name('bookCarPage');

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
Route::post('/afterSalesPage', [AppointmentController::class, 'store'])->name('appointments.store');
Route::post('/bookCarPage', [CarViewController::class, 'store'])->name('carviews.store');
