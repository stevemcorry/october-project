<?php

Route::get('/customtest', 'Stephen\Test\Controllers\CF@getTest');
Route::get('/fakertest', 'Stephen\Test\Controllers\CF@fakerTest');



Route::get('/stephen/test/api/getladies', 'Stephen\Test\Controllers\Person@getLadies');