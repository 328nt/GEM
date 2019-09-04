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

Route::get('export', 'MyController@export')->name('export');
Route::get('exportmember', 'MyController@exportmember')->name('exportmember');
Route::get('importExportView', 'MyController@importExportView');
Route::post('importmember', 'MyController@importmember')->name('importmember');
Route::post('updatemember', 'MyController@updatemember')->name('updatemember');
Route::post('import', 'MyController@import')->name('import');
Route::post('import/scores', 'MyController@importscores')->name('importscores');

//data school
Route::post('import/provinces', 'MyController@importprovinces')->name('importprovinces');
Route::post('import/districts', 'MyController@importdistricts')->name('importdistricts');


Route::get('import/members', 'MyController@ImportMembersJson');

Route::get('index', 'NewsController@home');
Route::get('', 'NewsController@home');

Route::get('account', 'PagesController@getaccount');
Route::post('account', 'PagesController@postaccount');

Route::get('register', 'PagesController@getregister');
Route::post('register', 'PagesController@postregister')->name('register');
Route::get('login', 'PagesController@getlogin');
Route::post('login', 'PagesController@postlogin')->name('login');
Route::get('logout', 'PagesController@getlogout');




Route::get('/sendemail', 'SendMailController@index');
Route::post('/sendemail/send', 'SendMailController@send');



Route::get('account/{id}', 'PagesController@getaccount');
Route::post('account/{id}', 'PagesController@postaccount');

Route::get('search', function () {
    return view('frontend.pages.search');
});
Route::post('search', 'PagesController@postsearch');

Route::get('news/{id}/{titlenone}.html', 'NewsController@news');


// Auth::routes(['verify'=> True]);

Route::get('/addscore', 'PagesController@ImportJsonFile');

Route::get('/admin', 'UserController@getloginadmin');
Route::get('/admin/login', 'UserController@getloginadmin');
Route::post('/admin/login', 'UserController@postloginadmin');
Route::get('admin/logout', 'UserController@logoutadmin');


Route::get('/form', function () {
    return view('frontend/form');
})->middleware('verified');
Route::group(['prefix' => 'admin', 'middleware' =>'is_admin'], function () {

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@getlist');
        Route::get('listad', 'UserController@getlistad');
        Route::get('add', 'UserController@getadd');
        Route::post('add', 'UserController@postadd');
        Route::get('addmembers', 'UserController@getaddmembers');
        Route::post('addmembers', 'UserController@postaddmembers')->name('addmembers');
        Route::get('editmembers/{id}', 'UserController@geteditmembers');
        Route::post('editmembers/{id}', 'UserController@posteditmembers');
        Route::get('edit/{id}', 'UserController@getedit');
        Route::post('edit/{id}', 'UserController@postedit');
        Route::get('delete/{id}', 'UserController@getdelete');
    });
    
    Route::group(['prefix' => 'news'], function () {
        Route::get('list', 'NewsController@getlist');
        Route::get('add', 'NewsController@getadd');
        Route::post('add', 'NewsController@postadd');
        Route::get('edit/{id}', 'Newscontroller@getedit');
        Route::post('edit/{id}', 'Newscontroller@postedit');
        Route::get('delete/{id}', 'Newscontroller@getdelete');
    });
});


