<?php

use Illuminate\Http\Request;

Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
