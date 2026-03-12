<?php

use App\Http\Controllers\Api\AuthController;

Route::get('/token-test', function(){
    $user = \App\Models\User::first();
    $return = $user->createToken('test')->plainTextToken;
    return $return;
});

Route::post('/login', [AuthController::class, 'login']);    