<?php

Route::get('election', 'ElectionController@index');

Route::get('election/policies', 'ElectionController@policies');
Route::post('election/policy', 'ElectionController@savePolicy');

Route::get('election/results', 'ElectionController@results');