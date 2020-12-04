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

/*Route Project*/
Route::get('/pj','ProjectController@home2');
Route::get('/home','ProjectController@home')->name('home');
Route::get('/aboutUs','ProjectController@about');
Route::get('/service','ProjectController@service');
Route::get('/ourDoctor','ProjectController@doctor');
Route::get('/login','ProjectController@login');
Route::get('/registration','ProjectController@registration');
Route::post('/registration','ProjectController@postRegistration');
Route::get('/information','ProjectController@information');
Route::get('/ambulance','ProjectController@ambulance');

/*Route Project 2*/
Route::get('/register','AuthController@register')->name('register');
Route::post('/register','AuthController@postregister')->middleware('guest');
Route::get('/login','AuthController@login')->middleware('guest')->name('login');
Route::post('/login','AuthController@postlogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/doctors', 'DoctorController@index');
Route::post('/doctor/create', 'DoctorController@create');
Route::get('/doctor/{id}/edit', 'DoctorController@edit');
Route::post('/doctor/{id}/update', 'DoctorController@update');
Route::get('/doctor/{id}/delete', 'DoctorController@delete');
Route::get('/patients', 'ProjectController@patient');