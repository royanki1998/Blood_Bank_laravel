<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view("login",'/login');
Route::view("register",'/register');

/*------------------------ Dashboard Routes ------------------------------------*/
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
Route::View('/donorTable','donorTable');
Route::View('/bloodTable','bloodTable');
Route::View('/recipientTable','recipientTable');
Route::View('/campaigns','campaigns');
Route::View('/userHome','userHome');
Route::View('/donationForm','donationForm');
