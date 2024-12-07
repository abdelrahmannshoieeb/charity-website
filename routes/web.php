<?php

use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\USer\InstController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



//make groupe middleware for aut
Route::group(['middleware' => ['auth']], function () {
    Route::get ('/', [IndexController::class, 'index'])->name('home');
    Route::view ('/admin', 'admin.index')->name('admin');
    Route::view ('/cities', 'admin.cities.cities')->name('cities');
    Route::view ('/regions', 'admin.cities.regions')->name('regions');
    Route::view ('/jobs', 'admin.cities.jobs')->name('jobs');
    Route::view ('/createInstu', 'admin.instu.createInstu')->name('createInstu');
    Route::view ('/editpProfile', 'editProfile')->name('editProfile');
    Route::view ('/profile', 'profile')->name('profile');
    Route::get ('/recommended',[App\Http\Controllers\USer\InstController::class, 'instu'])->name('recommended');
});





Route::view ('/login', 'auth.login')->name('login');
Route::view ('/signup', 'auth.signup')->name('signup');