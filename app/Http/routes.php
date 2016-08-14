<?php

Route::auth();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'CardsController@index');

    Route::get('about', 'PagesController@about');

    Route::get('cards', 'CardsController@index');
    Route::get('cards/{card}', 'CardsController@show');

    Route::post('cards/{card}/notes', 'NotesController@store');

    Route::get('notes/{note}', 'NotesController@show');
    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');
});

Route::get('dashboard', 'HomeController@index');