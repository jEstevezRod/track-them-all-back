<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::apiResources([
    'accounts' => AccountController::class,
    'categories' => CategoryController::class
]);
