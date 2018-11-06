<?php

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
Route::get('/','ApplicationController@index');
Route::get('/Search',['as'=>'search','uses'=>'ApplicationController@search']);
Route::post('/getdata',['as'=>'getdata','uses'=>'ApplicationController@getdata']);
route::post('/ajaxrequest',['as'=>'ajaxrequest','uses'=>'ApplicationController@ajaxRequest']);
route::get('/faculty/{facultyid}',['as'=>'academic_program_list','uses'=>'ApplicationController@academicProgramList']);
route::post('/getcategorybaseddata',['as'=>'categorybaseddata','uses'=>'ApplicationController@getcategorybasedfaculty']);
