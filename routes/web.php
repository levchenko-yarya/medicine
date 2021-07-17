<?php

use Illuminate\Support\Facades\Route;

/* главная страница */
Route::get('/', function () {
    return view('welcome');
});

/* обработчик active-substance */
Route::get('/active-substances', [
    'as' => 'index-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@index'
]);
Route::get('/active-substance/{active_substance}', [
    'as' => 'show-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@show'
]);
Route::get('/add-active-substance', [
    'as' => 'create-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@create'
]);
Route::post('/active-substance/post', [
    'as' => 'post-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@store'
]);
Route::get('/active-substance/edit/{active_substance}', [
    'as' => 'edit-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@edit'
]);
Route::put('/active-substance/edit/{active_substance}', [
    'as' => 'update-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@update'
]);
Route::delete('/active-substance/delete/{active_substance}', [
    'as' => 'delete-substance',
    'uses' => 'App\Http\Controllers\ActiveSubstanceController@destroy'
]);

/* обработчик manufacturer */
Route::get('/manufacturers', [
    'as' => 'index-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@index'
]);
Route::get('manufacturer/{manufacturer}', [
    'as' => 'show-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@show'
]);
Route::get('/add-manufacturer', [
    'as' => 'create-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@create'
]);
Route::post('/manufacturer/post', [
    'as' => 'post-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@store'
]);
Route::get('/manufacturer/edit/{manufacturer}', [
    'as' => 'edit-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@edit'
]);
Route::put('/manufacturer/edit/{manufacturer}', [
    'as' => 'update-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@update'
]);
Route::delete('/manufacturer/delete/{manufacturer}', [
    'as' => 'delete-manufacturer',
    'uses' => 'App\Http\Controllers\ManufacturerController@destroy'
]);

/* обработчик pharmacological-agent */
Route::get('/pharmacological-agents', [
    'as' => 'index-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@index'
]);
Route::get('/pharmacological-agent/{agent}', [
    'as' => 'show-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@show'
]);
Route::get('/add-pharmacological-agent', [
    'as' => 'create-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@create'
]);
Route::post('/pharmacological-agent/post', [
    'as' => 'post-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@store'
]);
Route::get('/pharmacological-agent/edit/{agent}', [
    'as' => 'edit-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@edit'
]);
Route::put('/pharmacological-agent/edit/{agent}', [
    'as' => 'update-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@update'
]);
Route::delete('/pharmacological-agent/delete/{agent}', [
    'as' => 'delete-agent',
    'uses' => 'App\Http\Controllers\PharmacologicalAgentController@destroy'
]);
