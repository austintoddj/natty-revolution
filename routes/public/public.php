<?php

Route::view('/', 'public.index');
Route::post('/', 'ContactController@store');
