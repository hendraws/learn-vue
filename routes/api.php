<?php

// use Symfony\Component\Routing\Route;

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

use Illuminate\Support\Facades\Route;


Route::namespace('Notes')->group(function(){
    Route::prefix('notes')->group(function(){
        Route::post('create-new-note', 'NoteController@store');
        Route::get('', 'NoteController@index');
        Route::get('{note}', 'NoteController@show')->name('notes.show');
    });

    Route::prefix('subjects')->group(function(){
        Route::get('', 'SubjectController@index');
    });
}); 