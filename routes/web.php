<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Auth::routes();
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index']);
 //Member
 Route::get('/team-list', [TeamController::class, 'index']);
 Route::post('/team-store', [TeamController::class, 'store']);
 Route::get('/team-show/{id}', [TeamController::class, 'show']);
 Route::post('/team-update/{id}', [TeamController::class, 'update']);
 Route::delete('/team-delete/{id}', [TeamController::class, 'destroy'])->name('delete.team');
 Route::put('/team-activate/{id}', [TeamController::class, 'activate'])->name('activate.team');

 //Service
 Route::get('/service-list', [ServiceController::class, 'index']);
 Route::post('/service-store', [ServiceController::class, 'store']);
 Route::get('/service-show/{id}', [ServiceController::class, 'show']);
 Route::post('/service-update/{id}', [ServiceController::class, 'update']);
 Route::delete('/service-delete/{id}', [ServiceController::class, 'destroy'])->name('delete.service');
 Route::put('/service-activate/{id}', [ServiceController::class, 'activate'])->name('activate.service');

 //Company
 Route::get('/profile-list', [CompanyController::class, 'index']);
 Route::post('/profile-update/{id}', [CompanyController::class, 'update']);

 //Partner
 Route::get('/partner-list', [PartnerController::class, 'index']);
 Route::post('/partner-store', [PartnerController::class, 'store']);
 Route::get('/partner-show/{id}', [PartnerController::class, 'show']);
 Route::put('/partner-update/{id}', [PartnerController::class, 'update']);
 Route::delete('/partner-delete/{id}', [PartnerController::class, 'destroy'])->name('delete.partner');
 Route::put('/partner-activate/{id}', [PartnerController::class, 'activate'])->name('activate.partner');
}); 


