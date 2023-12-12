<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'index'])->name('homepage');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/projects', [ProjectController::class,'projects'])->name('projects');
Route::get('/services', [ServiceController::class,'services'])->name('services');
Route::get('/secret_page', [PageController::class,'secret'])->name('secret');

Route::get('/project-detail/{uri}', [ProjectController::class,'detail'])->name('project-detail');
Route::get('/service-detail/{uri}', [ServiceController::class,'detail'])->name('service-detail');

Route::get('/contact', [PageController::class,'contact'])->name('contact');
Route::post('/send-mail', [MailController::class,'send'])->name('send');
