<?php
use App\Http\Controllers\Home\UserController as HomeController;
use App\Http\Controllers\Home\ProductController as MarketController;
use App\Http\Controllers\Auth\AuthenticatedUserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserController as AdminController;
use App\Http\Controllers\Admin\SupportAgentController as AdminAgentController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;
use App\Http\Controllers\SupportAgent\SupportAgentController as SupportAgentController;
use App\Http\Controllers\SupportAgent\PetController as SupportAgentPetController;
use App\Http\Controllers\SupportAgent\ProductController as SupportAgentProductController;

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

Route::get('/',[HomeController::class,'index'] )->name('home');
Route::get('marketPlace',[MarketController::class,'index'] )->name('marketPlace');
Route::get('/marketplace/{id}', 'ProductController@show')->name('marketPlace.show');
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register');
    Route::get('login', [AuthenticatedUserController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedUserController::class, 'store']);

});
Route::middleware('auth')->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('adminSupport', AdminAgentController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('supportAgent', SupportAgentController::class);
    Route::resource('supportAgentPet', SupportAgentPetController::class);
    Route::resource('supportAgentProduct', SupportAgentProductController::class);
    Route::post('logout', [AuthenticatedUserController::class, 'destroy'])
                ->name('logout');
});

