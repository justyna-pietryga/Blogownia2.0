<?php

Route::get('/', 'HomeController@index');
Route::get('/sign_in', 'Auth\LoginController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/sign_up', 'Auth\RegisterController@index');
Route::post('/edit/{id}', 'EditAccountController@store');
Route::view('/account', 'account_main');

Route::get('/account/{id}', function ($id){
    $posts= App\User::find(1)->blog_posts;
    return view('account_main')->with(['posts' => $posts, 'id'=> $id]);
} );

Auth::routes();

