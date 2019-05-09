<?php

use Illuminate\Http\Request;
// use route

Route::apiResource('/question','QuestionController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
