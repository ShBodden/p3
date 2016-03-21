<?php



Route::get('/', function () {
return $generated;
    return view('welcome');
});

Route::get('/practice', function () {

  });
Route::get('/paragraph', "ParagraphController@getParagraphs");

Route::post('/paragraph', "ParagraphController@postParagraphs");




Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    //
});
