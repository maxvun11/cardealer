<?php
use App\Http\Controllers\Cars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

Route::get('/carDetailPage/{id}', [Cars::class, 'showCarDetail'])->name('carDetailPage');

Route::get('/aboutUsPage', function () {
    return view('aboutUsPage');
});

Route::get('/', function () {
    return view('homePage');
});


Route::get('/viewCarPage',[Cars::class, 'showAllCar']);





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

Route::put('/updateCar/{car}', [CarController::class, 'updateCar'])->name('updateCar');
