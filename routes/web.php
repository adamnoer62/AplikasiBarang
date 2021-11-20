<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('welcome');
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
        Route::get('create', [AdminController::class, 'create'])->name('admin.create');
        Route::get('update', [AdminController::class, 'update'])->name('admin.update');
        Route::get('edit', [AdminController::class, 'edit'])->name('admin.edit');
        Route::post('store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('destroy', [AdminController::class, 'destroy'])->name('admin.destroy');
        Route::resource('admin', AdminController::class);
      

        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
       
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::get('update', [UserController::class, 'update'])->name('user.update');
    Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::resource('user', UserController::class);
    
});
