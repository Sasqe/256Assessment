<?php
//Chris King
//2/26/2020
//web.php routes 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assessment', 'AssessmentController@index')->name('assessment');
Route::post('/doPost', 'AssessmentController@doPost')->name('doPost');