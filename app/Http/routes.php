<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/users', 'HomeController@getUsers');
Route::get('/proofs', 'ProofController@getProofs');
Route::get('/questions', 'QuestionController@getQuestions');
Route::get('/historyofcopy', 'HistoryController@getHistory');
Route::get('/questions/create','QuestionController@createQuestion' );
Route::get('/questions/list','QuestionController@getQuestions' );

