<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'page-'], function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact-us');
    Route::get('/developers', [MainController::class, 'developers'])->name('developers');
    Route::get('/consultancy', [MainController::class, 'consultancy'])->name('consultancy');
    Route::get('/service-provision', [MainController::class, 'serviceProvision'])->name('service-provision');

    Route::group(['prefix'=> 'properties', 'as' => 'properties-'], function () {
        Route::get('/', [PropertiesController::class, 'listing'])->name('listing');
        Route::get('/detail/{id}', [PropertiesController::class, 'detail'])->name('detail');
    });

});
