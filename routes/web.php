<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\aboutcompanycontroller;
use App\Http\Controllers\companyvisioncontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\staffcontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\settingcontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\documentcontroller;

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
Route::get('/home/contact/view',[contactcontroller::class,'viewcontact'])->middleware('sessioncheck');
Route::get('/home/contact/view/delete/{id}',[contactcontroller::class,'delete'])->middleware('sessioncheck');

Route::get('/about-company',[aboutcompanycontroller::class,'aboutcompany']);
Route::get('/company-vision',[companyvisioncontroller::class,'companyvision']);
Route::get('/staffs',[staffcontroller::class,'staff']);


Route::get('/login',[logincontroller::class,'login']);
Route::get('/logout',[logincontroller::class,'logout']);
Route::post('/login',[logincontroller::class,'loginauthenticate']);

Route::get('/login/forgot-password',[ResetPasswordController::class,'forgot_password']);
Route::post('/login/forgot-password',[ResetPasswordController::class,'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('/home/dashboard',[dashboardcontroller::class,'dashbaord'])->middleware('sessioncheck');
Route::get('/home/manage-staff',[staffcontroller::class,'staffmanage'])->middleware('sessioncheck');
Route::post('/home/manage-staff/save',[staffcontroller::class,'saverecord'])->middleware('sessioncheck');
Route::get('/home/manage-staff/delete/{id}',[staffcontroller::class,'deletestaff'])->middleware('sessioncheck');

Route::get('/gallery',[gallerycontroller::class,'gallery']);
Route::get('/home/gallery',[gallerycontroller::class,'admingallery'])->middleware('sessioncheck');
Route::post('/home/gallery/insert',[gallerycontroller::class,'insertdata'])->middleware('sessioncheck');
Route::get('/home/gallery/delete/{id}',[gallerycontroller::class,'deletestaff'])->middleware('sessioncheck');

Route::get('/home/settings',[settingcontroller::class,'settings'])->middleware('sessioncheck');


Route::get('/blogs',[blogcontroller::class,'blogs']);
Route::get('/blogs/{slug}',[blogcontroller::class,'blogshow']);
Route::get('/home/blogs',[blogcontroller::class,'adminblog'])->middleware('sessioncheck');
Route::get('/home/blogs/view',[blogcontroller::class,'viewblog'])->middleware('sessioncheck');
Route::get('/home/blogs/view/delete/{id}',[blogcontroller::class,'deleteblog'])->middleware('sessioncheck');
Route::post('/home/blogs/insert',[blogcontroller::class,'storeblog'])->middleware('sessioncheck');


Route::get('/home/documents',[documentcontroller::class,'viewdocuments'])->middleware('sessioncheck');