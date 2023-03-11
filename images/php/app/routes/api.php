<?php

use App\Http\Controllers\UserController;
echo "api.php";
Route::middleware('api')->group(function () {
    Route::get('/getUser/{id}', [UserController::class, 'getUser']);
});