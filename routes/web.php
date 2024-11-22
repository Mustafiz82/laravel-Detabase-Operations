<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/add","addStudent");
Route::post("/add" , [studentController::class , "insertData"]);
Route::get("/list" , [studentController::class , "list"]);