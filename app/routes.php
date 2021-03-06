<?php

/*********************************************************************************
**
* @autor John Porras R.
* @Titter @johnporrasr
* @Fanpage https://www.facebook.com/pages/John-Porras-R/343999052298640?ref=hl
* @Githut https://github.com/JohnPorrasR
* @Linkedin http://www.linkedin.com/in/johnporrasr
* @Google+ https://plus.google.com/u/0/+JohnPorrasR
**
* *******************************************************************************/


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('candidates/{slug}/{id}', ['as' => 'category', 'uses' => 'CandidatesController@category']);

Route::get('{slug}/{id}', ['as' => 'candidate', 'uses' => 'CandidatesController@show']);

Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UserController@signUp']);
Route::post('sign-up', ['as' => 'register', 'uses' => 'UserController@register']);

// usuarios login
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);















