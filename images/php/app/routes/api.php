<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/getUser/{id}', [UserController::class, 'getUser']);
