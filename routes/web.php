<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stanze', 'StanzeController@index') -> name('index-stanze');

Route::get('/stanze/{id}', 'StanzeController@show') -> name('show-stanza');

Route::get('/create/stanze', 'StanzeController@create') -> name('create-stanza');

Route::post('/create/stanze', 'StanzeController@store') -> name('store-stanza');
