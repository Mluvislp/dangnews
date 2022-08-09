<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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

Route::get('/', [NewsController::class , 'getNewsHomePage'])->name('home');
Route::prefix('news')->group(function(){
    Route::get('/details/{id}',[NewsController::class , 'getDetails']);
    Route::get('/flcategory/{id}',[NewsController::class , 'getFlcategory']);    
    Route::post('/handlesearch',[NewsController::class , 'handlesearch']);  
});
Route::prefix('account')->group(function(){
    Route::get('/signin', function (){
        return view('account/signin');
    })->name('signin');
    Route::get('/login', function (){
            return view('account/login');
        })->name('login');    
});
