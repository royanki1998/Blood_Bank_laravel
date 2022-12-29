<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dbController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['LoginCheck']],function(){
    Route::get('/login',[AuthController::class,'login']);
    Route::get('/register',[AuthController::class,'register']);
    Route::post('/register',[AuthController::class,'registerUser'])->name('register-user');
    Route::post('/login',[AuthController::class,'loginUser'])->name('login-user');
});


Route::group(['middleware'=>['AuthCheck']],function(){

Route::view('/index','index');
Route::View('/widgets','widgets');
Route::View('/charts','charts');
Route::View('/tables','tables');
Route::View('/grid','grid');
Route::View('/form-basic','form-basic');
Route::View('/form-wizard','form-wizard');
Route::View('/pages-buttons','pages-buttons');
Route::View('/icon-material','icon-material');
Route::View('/icon-fontawesome','icon-fontawesome');
Route::View('/pages-elements','pages-elements');
Route::View('/pages-elements','pages-elements');
Route::View('/index2','index2');
Route::View('/pages-gallery','pages-gallery');
Route::View('/pages-invoice','pages-invoice');
Route::View('/authentication-login','authentication-login');
Route::View('/authentication-register','authentication-register');
Route::View('/donorRegister','donorRegister');
Route::get('/donorTable',[dbController::class,'dbDonor']);
Route::get('/bloodTable',[dbController::class,'dbBlood']);
Route::get('/recipientTable',[dbController::class,'dbRecipient']);
Route::View('/campaigns','campaigns');
Route::View('/userHome','userHome');
Route::View('/donationFormMale','donationFormMale');
Route::View('/donationFormFemale','donationFormFemale');
Route::View('/addDonor','addDonor');
Route::View('/addBlood','addBlood');
Route::View('/addRecipient','addRecipient');
Route::View('/allotedBlood','allotedBlood');
Route::View('/allotBloodForm','allotBloodForm');
Route::View('/userProfile','userProfile');
Route::View('/userDonateM','userDonateM');
Route::View('/userDonateF','userDonateF');


Route::post('/bloodTable',[dbController::class,'showBlood']);

Route::get('/logout',[AuthController::class,'logout']);

});

/*------------------------ Dashboard Routes ------------------------------------*/
