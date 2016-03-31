<?php




Route::group(['middleware' => ['web']], function () {
  Route::get('/', "WelcomeController@getwelcome");
  Route::get('/paragraph', "ParagraphController@getParagraphs");
  Route::post('/paragraph', "ParagraphController@postParagraphs");
  Route::get('/users', "UsersController@getUsers");
  Route::post('/users', "UsersController@postUsers");
});
