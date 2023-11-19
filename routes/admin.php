<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\CollaboratorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/',function(){
    return redirect()->route('admin.dashboard');
});
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('category/{id}/destroy',[CategoryController::class,'destroy'])->name('categories.destroy');
    Route::get('projects/{id}/destroy',[ProjectController::class,'destroy'])->name('projects.destroy');
    Route::get('services/{id}/destroy',[ServiceController::class,'destroy'])->name('services.destroy');
    Route::get('videos/{id}/destroy',[VideoController::class,'destroy'])->name('videos.destroy');
    Route::get('benefits/{id}/destroy',[BenefitController::class,'destroy'])->name('benefits.destroy');
    Route::get('collaborators/{id}/destroy',[CollaboratorController::class,'destroy'])->name('collaborators.destroy');
    Route::resource('videos', VideoController::class);
    Route::get('configs',[AdminController::class,'configs'])->name('configs.index');
    Route::get('configs/{id}/edit',[AdminController::class,'edit_configs'])->name('configs.edit');
    Route::post('configs/{id}',[AdminController::class,'update_configs'])->name('configs.update');
    Route::resource('benefits', BenefitController::class);
    Route::resource('collaborators', CollaboratorController::class);
    Route::get('contact-requests',[AdminController::class,'contactRequests'])->name('contact_requests');
    Route::get('contact-requests/{id}',[AdminController::class,'contactRequest'])->name('contact_request');
});
Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('login',[LoginController::class,'login'])->name('admin.login.post');