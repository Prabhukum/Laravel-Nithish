<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/registeration',[HomeController::class,'view']);

Route::post('/register',[HomeController::class,'register']);

Route::get('/',[HomeController::class,'loginview']);
Route::post('/login',[HomeController::class,'login']);

Route::get('/view',[HomeController::class,'view']);
Route::post('/import',[HomeController::class,'import']);
Route::get('/export', [HomeController::class, 'export']);

Route::get('/detail',[OperationController::class,'viewdetail']);
Route::post('/add-details',[OperationController::class,'adddetail']);

Route::get('edit-details/{id}',[OperationController::class,'editdetail']);
Route::put('update-details',[OperationController::class,'updatedetail']);
Route::get('delete-detail/{id}',[OperationController::class,'deletedetail']);

Route::get('countries',[CountryStateCityController::class,'getCountries'])->name('countries');
Route::get('states',[CountryStateCityController::class,'getStates'])->name('states');
Route::get('cities',[CountryStateCityController::class,'getCities'])->name('cities');

// forgot password

Route::get('forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class,'submitForgotPasswordForm'])->name('forgot.password.post');

Route::get('reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');

//end forgot password
//start pdf Route

Route::get('/export_user_pdf/{id}',[OperationController::class,'export_user_pdf'])->name('export_user_pdf');
Route::get('/view_user_pdf/{id}',[OperationController::class,'view_user_pdf'])->name('view_user_pdf');

//end pdf
