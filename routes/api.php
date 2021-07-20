<?php

Route::post('/auth/token', 'Api\AuthController@getAccessToken');


Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
   
    Route::resource('/posts', 'PostController', ['only' => ['index', 'show']]);
    Route::post('/editposts/{id}', 'PostController@update');

});
