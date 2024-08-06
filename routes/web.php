<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class , 'index'])->name("home"); //named route
Route::get('/about', [AboutController::class , 'index'])->name("about");
Route::get('/contact', [ContactController::class , 'index'])->name("contact");
Route::post('/contact/{id}', [ContactController::class , 'store']);  //route with id parameter