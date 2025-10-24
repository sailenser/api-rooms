<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


Route::get('/', fn() => ['ok' => true]);

Route::get('/room-id', function() {
    return [
        'room_id' => random_int(10000, 99999)
    ];
});
