<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/property',[PropertyController::class,'index']);

Route::get('/agents',[AgentController::class,'index']);


Route::get('/company',[CompanyController::class,'index']);




Route::get('/contact', function () {
    return view('contact');
});
Route::get('/propertydetails', function () {
    return view('propertydetails');
});