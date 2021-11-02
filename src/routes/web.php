<?php

Route::get('baca', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@readAll");

Route::get('baca/{id}', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@readOne");

Route::get('tambah_data/', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@post_data");
Route::post('tambah_data/', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@post_data_store");

Route::get('update_data/{id}', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@udpate_data");
Route::post('update_data/{id}', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@update_process");

Route::get('delete/{id}', "Bonevian\Consume_Api\Http\Controllers\api_consume_controller@delete");