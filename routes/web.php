<?php



Route::get('/todo', 'EventsController@index')->name('todomain');

Route::get('/todo/add', 'EventsController@add');

Route::post('/todo', 'EventsController@store');

Route::post('/todo/del', 'EventsController@delete');

Route::post('/todo/edit', 'EventsController@edit');

Route::post('/todo/update', 'EventsController@update');

// Route::post('/todo/index1', 'EventsController@index1');

Route::get('/todo/completed', 'EventsController@completed');

Route::get('/todo/c_tasks', 'EventsController@c_tasks');

