<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::get('/residentes', 'App\Http\Controllers\residentesController@index');//get all residentes
route::get('/residentes', 'App\Http\Controllers\residentesController@search');//search all residentes
route::post('/residentes', 'App\Http\Controllers\residentesController@store');//create a new residente
route::put('/residentes/{id}', 'App\Http\Controllers\residentesController@update');//update a residente
route::delete('/residentes/{id}', 'App\Http\Controllers\residentesController@destroy');//delete a residente
