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


Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route::get('train', 'TrainController@querybuilder');
Route::get('orm', 'TrainController@orm');
Route::get('relationships', 'TrainController@relationships');
Route::get('poly_relationships', 'TrainController@poly_relationships');
Route::get('encrypt', 'TrainController@encrypt');

Route::prefix('dashbord')->group(function (){
    Route::get('/','App\Http\Controllers\Dashbord\DashbordController@index');
    Route::resource('posts','App\Http\Controllers\Dashbord\PostController');

});



Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
});
Route::get('/', 'App\Http\Controllers\FrontSiteController@showHome')->name('frontsite.home');
Route::get('/aboutus', 'App\Http\Controllers\FrontSiteController@showAboutus')->name('frontsite.aboutus');
Route::get('/contact', 'App\Http\Controllers\FrontSiteController@showContact')->name('frontsite.contact');
Route::get('/meet', 'App\Http\Controllers\FrontSiteController@showMeet')->name('frontsite.meet');
Route::get('/whatwedo', 'App\Http\Controllers\FrontSiteController@showWhatwedo')->name('frontsite.whatwedo');


Route::get('listPosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('showPosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('addPosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('deletePosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('editPosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('savePosts','App\Http\Controllers\Dashbord\postController@listPosts');
Route::get('saveEditPosts','App\Http\Controllers\Dashbord\postController@listPosts');

//Route::resource('User','App\Http\Controllers\Dashbord\UserController');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontsite.home');
})->name('frontsite.home');
Route::get('aboutus', function () {
    return view('frontsite.aboutus');
})->name('frontsite.aboutus');
Route::get('contact', function () {
    return view('frontsite.contact');
})->name('frontsite.contact');
Route::get('meet', function () {
    return view('frontsite.meet');
})->name('frontsite.meet');
Route::get('whatwedo', function () {
    return view('frontsite.whatwedo');
})->name('frontsite.whatwedo');
*/
