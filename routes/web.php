<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'InventoryController@index');
Route::post('/create', 'InventoryController@create')->name('inventory-create');
Route::post('/output/{id}', 'InventoryController@output')->name('inventory-output');
