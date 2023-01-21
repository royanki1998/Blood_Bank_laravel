<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dbController;
use App\Http\Controllers\docController;
use App\Http\Controllers\dFormController;

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

/*.........................user routes.................................... */
/* if login then dashboard */
Route::group(['middleware'=>['LoginCheck']],function(){
    Route::get('/userLogin',[AuthController::class,'login']);
    Route::get('/register',[AuthController::class,'register']);
    Route::post('/register',[AuthController::class,'registerUser'])->name('register-user');
    Route::post('/userLogin',[AuthController::class,'loginUser'])->name('login-user');
});





/* if not login then loginpage */
Route::group(['middleware'=>['AuthCheck']],function(){

    
    Route::get('/showDonorForm',[dFormController::class,'showForm']);
    Route::post('/donationFormSubmitM',[dFormController::class,'donatStatusM']);
    Route::post('/donationFormSubmitF',[dFormController::class,'donatStatusF']);
    Route::post('/searchBlood',[dbController::class,'bloodStatus']);

    Route::View('/userDonateM','userDonateM');
    Route::View('/userDonateF','userDonateF');

    Route::View('/donationFormMale','donationFormMale');
    Route::View('/donationFormFemale','donationFormFemale');
    
    Route::View('/userProfile','userProfile');
    Route::get('/logout',[AuthController::class,'logout']);
});



/*------------------------ Dashboard Routes ------------------------------------*/

Route::group(['middleware'=>['AdminLoginCheck']],function(){

    

Route::get('/adminLogin',[AuthController::class,'adminLoginPage']);
Route::post('/adminLogin',[AuthController::class,'adminLogin'])->name('login-admin');


});

Route::group(['middleware'=>['AdminAuthCheck']],function(){

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
    Route::View('/campaigns','campaigns');

    Route::View('/addDonor','addDonor');
    Route::View('/addBlood','addBlood');
    Route::View('/addRecipient','addRecipient'); 
    Route::View('/allotBloodForm','allotBloodForm');
    
    Route::post('/addBlood',[dbController::class,'addBlood']);
    Route::get('/donorTable',[dbController::class,'dbDonor']);
    Route::get('/bloodTable',[dbController::class,'dbBlood']);
    Route::get('/recipientTable',[dbController::class,'dbRecipient']);
    Route::post('/bloodTable',[dbController::class,'showBlood']);
    Route::post('/addDonor',[dbController::class,'addDonor']);
    Route::get('/allotedBlood',[dbController::class,'showBloodTable']);
    Route::post('/addRecipient',[dbController::class,'addRecipient']);
    Route::get('/adminLogout',[AuthController::class,'adminLogout']);

    Route::post('/allotBlood',[dbController::class,'allotBlood']);

    Route::post('/showAdhaar',[docController::class,'showAdhaar']);
    Route::post('/showPres',[docController::class,'showPres']);
    Route::post('/delRec',[dbController::class,'delRec']);
    Route::post('/delBlood',[dbController::class,'delBlood']);

    // campaign routes
    Route::get('/campaignTable',[dbController::class,'showCampTable']);
    Route::get('/campaignBloodTable',[dbController::class,'showCampBlood']);
    Route::View('/addCampaign','addCampaign');
    Route::post('/addCampaign',[dbController::class,'addCampaign']);
    Route::view('/userHome','userHome');
});














