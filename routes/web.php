<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Welcome
Route::get('/', 'WelcomeController@welcome_artikel');
Route::get('/artikel', 'WelcomeController@welcome_artikel_all');
Route::get('/artikel/read/{id}',['as'=>'read_art', 'uses'=>'WelcomeController@read']);
Route::get('/event/{nama_keg}',['as'=>'event', 'uses'=>'WelcomeController@event']);
Route::get('/gallery', 'WelcomeController@welcome_gallery');
Route::get('/kegiatan', 'WelcomeController@welcome_event');
Route::resource('posts', 'PostsController');



Route::get('file/{jenis}/{filename}', function ($jenis,$filename){
  $path = storage_path() . '/'.$jenis.'/' . $filename;
  $file = File::get($path);
  $type = File::mimeType($path);
  $response = Response::make($file);
  $response->header("Content-Type", $type);
  return $response;
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/login', 'LoginController@index');

//Artikel
Route::get('/admin/artikel/data_artikel', 'ArtikelController@data_artikel');
Route::get('/admin/artikel/input_artikel', 'ArtikelController@input_artikel');
Route::get('/admin/artikel/data_artikel/read/{id}',['as'=>'read', 'uses'=>'ArtikelController@read']);
Route::get('/admin/artikel/data_artikel/update/{id}',['as'=>'update', 'uses'=>'ArtikelController@update_artikel']);
Route::get('admin/artikel/{id}/destroy', 'ArtikelController@delete_artikel');

Route::post('/save_art', 'ArtikelController@input');
Route::post('/trylogin', ['as'=>'login','uses'=>'Auth\LoginController@tryLogin']);
Route::post('/save_edited_art', 'ArtikelController@update');

//Event
Route::get('/admin/event/data_event', 'EventController@data_event');
Route::get('/admin/event/input_event', 'EventController@input_event');
Route::get('admin/event/{id}/destroy', 'EventController@delete_event');
Route::get('/admin/event/data_event/update/{id}',['as'=>'update_event', 'uses'=>'EventController@update_event']);

Route::post('/save_event', 'EventController@input');
Route::post('/save_edited_event', 'EventController@update');

//Admin
Route::get('/admin/data_admin',['as'=>'data_admin','uses'=>'AdminController@data_admin']);
Route::get('/admin/input_admin',['as'=>'input_admin','uses'=>'AdminController@input_admin']);
Route::get('/admin/data_admin/update/{id}',['as'=>'update_admin', 'uses'=>'AdminController@update_admin']);
Route::get('admin/{id}/destroy',['as'=>'delete_admin','uses'=>'AdminController@delete_admin']);

Route::post('/save_admin', 'AdminController@input');
Route::post('/save_edited_admin',['as'=>'save_edited_admin','uses'=>'AdminController@update']);

//Gallery
Route::get('/admin/gallery/data_gallery',['as'=>'data_gallery','uses'=>'GalleryController@data_gallery']);
Route::get('/admin/gallery/input_gallery',['as'=>'input_gallery','uses'=>'GalleryController@input_gallery']);
Route::get('admin/gallery/{id}/destroy',['as'=>'delete_gallery','uses'=>'GalleryController@delete_gallery']);

Route::post('/save_gallery', 'GalleryController@input');

Route::get('/logout', 'AdminController@logout');
