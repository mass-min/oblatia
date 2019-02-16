<?php

Route::get('/', 'TranslationController@index')->name('index');
Route::post('/translate', 'TranslationController@translate')->name('translate');
Route::get('/result', 'TranslationController@result')->name('result');