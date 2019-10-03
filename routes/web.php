<?php



Route::get('/' , 'myController@index')-> name('start');
Route::get('/createPerson' , 'myController@create')->name('createPerson');
Route::post('/store' , 'myController@store')->name('storePerson');
