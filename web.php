<?php

use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return "hello artisan";
});

*/
/// My Auth 1.0
// Route::get('/login','MyAuth@ShowLogin');
// Route::post('/Authlink','MyAuth@SentAuthLink');
// Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
// Route::post('/loginVerify','MyAuth@VerifyLogin');


/// My auth 2.0
Route::get('/login','MyAuth@ShowLogin');
Route::post('/Authlink','MyAuth@SentAuthLink');
Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
Route::post('/loginVerify','MyAuth@VerifyLogin');
Route::get('/logout','MyAuth@Logout_user');
Route::get('/forget_password', 'MyAuth@ShowForgetPasswordPage');
Route::post('/sent_password_reset_link', 'MyAuth@ResetPasswordLink');
Route::get('/reset-password/{email}/{token}', 'MyAuth@VelifyResetPasswordLink');
Route::post('/update-password', 'MyAuth@UpdateForgetPassword');

//user


Route::get('/User-Dashbord', function () {
    return "hello user";
});
//Admin
Route::get('/Admin-Dashbord', function () {
    return "hello Admin";
});




