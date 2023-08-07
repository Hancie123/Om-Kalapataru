<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\aboutcompanycontroller;
use App\Http\Controllers\companyvisioncontroller;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/branches',function(){
    return view('branches');
});

Route::get('/services',function(){
    return view('services');
});

Route::get('/contact',[contactcontroller::class,'contact']);
Route::get('/contact/sendemail',[contactcontroller::class,'sendemail']);

Route::get('/about-company',[aboutcompanycontroller::class,'aboutcompany']);
Route::get('/company-vision',[companyvisioncontroller::class,'companyvision']);
