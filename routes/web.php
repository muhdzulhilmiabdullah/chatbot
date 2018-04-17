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

Route::get('/', function () {
    return view('welcome');
});
//botman page
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/chatbot', 'BotManController@tinker');

//auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//question 
Route::post('/insertquestion', 'QuestionController@addQuestion');
Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'QuestionDatatableController@getData']);

//question create page 
Route::get('/questionhome',function(){
	return view('question_home');
});
Route::get('/questioncreate',function(){
	return view('question_create');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//bioinformatics create page
Route::post('/insert','BiController@addBio');

Route::get('/bicreate', function(){
	return view('bi_create');
});

//who create page



//keyword 
Route::post('/insertkeyword', 'KeywordController@addKeyword');
Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'KeywordDatatableController@getData']);

//keyword create page
Route::get('/keywordhome',function(){
	return view('keyword_home');
});
Route::get('/keywordcreate',function(){
	return view('keyword_create');
});