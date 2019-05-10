<?php

use Illuminate\Http\Request;

Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');
Route::apiResource('/question/{question}/reply','ReplyController');
Route::post('/like/{reply}','LikeController@liktIt');
Route::delete('/like/{reply}','LikeController@unLikeIt');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
