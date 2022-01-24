<?php

use Illuminate\Support\Facades\Route;

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
    return 'aaaaa';
});

Route::get('/my_page', 'MyPlaceController@index');

Route::get('/my_city', function(){
   $a='Nurlat';
   return $a;
});

Route::get('/my_girl', function (){
    echo "AZILYA";
});
Route::get('/my_dog', function(){
    return "akbay";
    echo 'pirat';
});

/////////////////////////////////////////////////////////////////////////////////
Route::get('/my_second_controller', 'MySecondController@first_func');
Route::get('/my_second_controller', 'MySecondController@second_func');
Route::get('/my_third_controller', 'MyThirdController@third_func');
////////////////////////////////////////////////////
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/cars', 'MySecondController@second_func');
Route::get('/users', 'MyThirdController@third_func');
Route::get('/comps','MyFoursController@fours_func');

/////////////////////////////////////////////////urok9
Route::get('/posts/create', 'PostController@create')->name('post.create');

Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.delete');


Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');
Route::get('/mice/create', 'MouseController@create');
Route::get('/mice/update', 'MouseController@update');
Route::get('/mice/delete', 'MouseController@delete');
Route::get('/mice/first_or_create', 'MouseController@firstOrCreate');
Route::get('/mice/update_or_create', 'MouseController@updateOrCreate');

Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'aboutController@index')->name('about.index');



///////////////////////////////////////////////////////////////////////////////////////////
 // Роуты для вилладж
Route::get('/villages', 'VillageController@index')->name('village.index');
Route::get('/villages/create', 'VillageController@create')->name('village.create');
Route::post('/villages', 'VillageController@store')->name('village.store');
Route::get('/villages/{village}', 'VillageController@show')->name('village.show');
Route::get('/villages/{village}/edit', 'VillageController@edit')->name('village.edit');
Route::patch('/villages/{village}', 'VillageController@update')->name('village.update');
Route::delete('/villages/{village}', 'VillageController@destroy')->name('village.destroy');
////////////////////////////////////////////////////////////////////////////
// Роуты для монтажников
Route::get('montazhniks','MontazhnikController@index')->name('montazhnik.index');
Route::get('montazhniks/create','MontazhnikController@create')->name('montazhnik.create');
Route::post('montazhniks/create','MontazhnikController@store')->name('montazhnik.store');
Route::get('montazhniks/{id}','MontazhnikController@show')->name('montazhnik.show');
Route::get('montazhniks/{id}/edit','MontazhnikController@edit')->name('montazhnik.edit');
Route::patch('montazhniks/{id}','MontazhnikController@update')->name('montazhnik.update');
Route::delete('montazhniks/{id}','MontazhnikController@destroy')->name('montazhnik.destroy');
//////////////////////////////////////////////////////////////
/// Роуты для буров
Route::get('/burs', 'BurController@index')->name('bur.index');
Route::get('/burs/create', 'BurController@create')->name('bur.create');
Route::post('/burs', 'BurController@store')->name('bur.store');
Route::get('/burs/{bur}', 'BurController@show')->name('bur.show');
Route::get('/burs/{bur}/edit', 'BurController@edit')->name('bur.edit');
Route::patch('/burs/{bur}', 'BurController@update')->name('bur.update');
Route::delete('/burs/{bur}', 'BurController@destroy')->name('bur.destroy');
//////////////////////////////////////////////////////////
/// postes routes
Route::get('/postes', 'PosteController@index');
Route::get('/mashes', 'MashController@index');
Route::get('/teliks', 'TelikController@index');









