<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarApiController;
use App\Http\Controllers\UserApiController;
use App\Models\Car;
use App\Models\User;



Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::resource('cars', CarController::class);
Route::resource('users', UserController::class);
Route::resource('bookings', BookingController::class);
Route::resource('feedbacks', FeedbackController::class);
Route::resource('payments', PaymentController::class);


Route::get('/api/carss', function () {
    $cars = Car::all(); // Dobivanje svih automobila iz baze

   
    return view('ApiCars.index', ['cars' => $cars]); // Prikazuje view za preglednike
});



Route::get('/api/carss/create', function () {
    return view('ApiCars.create'); // Vraća view za kreiranje novog automobila
})->name('apicars.create');



Route::get('/api/carss/edit/{id}', function ($id) {
    $car = Car::findOrFail($id); // Dobij auto prema ID-u
    return view('ApiCars.edit', ['car' => $car]); // Vraća view za uređivanje automobila
})->name('apicars.edit');

///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/api/userss', function () {
    $users = User::all(); // Dobivanje svih automobila iz baze

   
    return view('ApiUsers.index', ['users' => $users]); // Prikazuje view za preglednike
});


Route::get('/api/userss/create', function () {
    return view('ApiUsers.create'); // Vraća view za kreiranje novog automobila
})->name('apiusers.create');


Route::get('/api/userss/edit/{id}', function ($id) {
    $user = user::findOrFail($id); // Dobij auto prema ID-u
    return view('ApiUsers.edit', ['user' => $user]); // Vraća view za uređivanje automobila
})->name('apiusers.edit');
