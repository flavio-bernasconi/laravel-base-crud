<?php

Route::get('/' , 'myController@index')-> name('start');
Route::get('/createPerson' , 'myController@create')->name('createPerson');
Route::post('/store' , 'myController@store')->name('storePerson');

Route::get('/{id}/create' , 'myController@edit')->name('editPerson');
Route::post('/{id}' , 'myController@update')->name('updatePerson');

Route::get('/{id}/delete' , 'myController@destroy')->name('deletePerson');
