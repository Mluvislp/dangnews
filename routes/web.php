<?php

use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\accout;
use App\Http\Controllers\account as accounts;
use GuzzleHttp\Middleware;

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
    Route::post('/handlesearch',[NewsController::class , 'handlesearch'])->name('handlesearch');  
});

Route::prefix('admin')->middleware(['auth','role:Admin|Writer'])->group( function(){
    Route::get('/' , [admin::class,'dashboard'])->name('admin_dashboard');
    
    Route::get('/loai' , [admin::class,'getType'])->name('admin_getType');
    Route::get('/them-loai' , [admin::class,'addType'])->name('admin_addType');
    Route::post('/xu-ly-them-loai' , [admin::class,'handleAddType']);
    Route::get('/xoa-loai/{id}' , [admin::class,'deleteType']);
    Route::get('/cap-nhat-loai/{id}' , [admin::class,'updateType']);
    Route::post('/xu-ly-cap-nhat-loai' , [admin::class,'handleUpdateType']);

    Route::get('/tin' , [admin::class,'getPost'])->name('admin_getPost');
    Route::get('/them-tin' , [admin::class,'addPost'])->name('admin_addPost');
    Route::post('/xu-ly-them-tin' , [admin::class,'handleAddPost']);
    Route::get('/xoa-tin/{id}' , [admin::class,'deletePost']);
    Route::get('/cap-nhat-tin/{id}' , [admin::class,'updatePost']);
    Route::post('/xu-ly-cap-nhat-tin' , [admin::class,'handleUpdatePost']);
 
    Route::get('/tai-khoan' , [accounts::class,'listAccount'])->middleware(['role:Admin','permission:give-permission'])->name('admin_listAccount');
    Route::get('/tai-khoan-chi-tiet' , [admin::class,'accountDetail'])->name('admin_accountDetail');
    Route::get('/cap-nhat-tai-khoan/{id}' , [accounts::class,'updateAccount'])->name('admin_updateAccount');
    Route::post('/xu-ly-cap-nhat-role' , [accounts::class,'updateRole']);
});


require __DIR__.'/auth.php';
