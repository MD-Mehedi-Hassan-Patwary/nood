<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\Hicontroller;

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

Route::get('/hello', [Testcontroller::class,'Hello']);
Route::get('/hi', [Testcontroller::class,'Hi']);
Route::get('/mehedi',[Hicontroller::class,'mehedi']);
Route::get('/user/{userid}/{name}', [Hicontroller::class,'getuser'])
->where(['userid'=>'[0-9]+' , 'name' => '[a-z]+']);

//->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Route::get('/user/{userid}/{name}', [Hicontroller::class, 'getuser']) ->where(['userid' => '(\d+)', 'name' => '([a-zA-Z]+)']);
Route::get('/profile', [Testcontroller::class,'user']);
Route::post('/profile', [Testcontroller::class,'userpost']);