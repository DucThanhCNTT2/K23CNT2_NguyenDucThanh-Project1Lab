<?php

use App\Http\Controllers\NdtAccountController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/greeting', function () {
    return "<h1>Hello, Nguyen Duc Thanh </h1>";
});

#Redirect
Route::redirect('/here','/there');

Route::get('/there', function () {
    return "<h1>Redirect to there </h1>";
});

#Router return view
Route::get('/duc-thanh', function () {
    return view('ducthanh');
});

#Router parameter
Route::get('/devmaster/{id}', function ($id) {
    return "<h1>Dev Master".$id ."</h1>";
});

#Optional parameter
Route::get('/dev/{name?}', function ($name="Đức Thành") {
    return "<h1>Xin chào".$name ."</h1>";
});

#Regular Expression Constraints
Route::get('/user-contraint/{name?}', function ($name) {
    return "<h1> Router Contraint [A-Za-z]+";
})->where('name', '[A-Za-z]+'); 

Route::get('/user-contraint/{id}', function ($id) {
    return "<h1> Router Contraint [0-9]+";
})->where('name', '[0-9]+'); 

Route::get('/user-contraint/{id}/{name?}', function ($id,$name) {
    return "<h1> Router Contraint ['id' =>'[0-9]+', 'name' => '[a-z]+']";
})->where(['id' => '[0-9]', 'name' => '[a-z ]+']); 

Route::get('/user-check/{id}/{name?}', function ($id,$name) {
    return "<h1> user-check whereNumber('id')->whereAlpha('name') [$id,$name]";
})->whereNumber('id') ->whereAlpha('name?');

Route::get('/ndt-account',[NdtAccountController::class,'index'])->name('ndtAccount.index');

Route::get('/ndt-account-create', [NdtAccountController::class,'create']);
