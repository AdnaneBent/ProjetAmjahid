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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;
Route::resource('/admin/biographies', 'BiographieController')->middleware('auth');;
Route::resource('/admin/partenaires', 'PartenaireController')->middleware('auth');;
Route::resource('/admin/articles', 'ArticleController')->middleware('auth');;
Route::resource('/admin/athlete', 'AthleteController')->middleware('auth');;
Route::resource('/admin/carousels', 'CarouselController')->middleware('auth');;
Route::resource('/admin/palmares', 'PalmaresController')->middleware('auth');;
Route::resource('/admin/networks', 'SocialNetworkController')->middleware('auth');;
Route::resource('/admin/newsletters', 'NewsletterController')->middleware('auth');;
Route::resource('/admin/engagements', 'EngagementController')->middleware('auth');;
Route::resource('/admin/galeries', 'GalerieController')->middleware('auth');;
Route::resource('/admin/academies', 'AcademieController')->middleware('auth');;
Route::resource('/admin/headers', 'HeaderController')->middleware('auth');;
Route::resource('/admin/evenements', 'EvenementController')->middleware('auth');;

Route::get('/', 'FrontController@welcome')->name('welcome');
Route::get('/athlete', 'FrontController@athlete')->name('athlete');
Route::get('/partenaire', 'FrontController@partenaire')->name('partenaire');
Route::get('/academie', 'FrontController@academie')->name('academie');
Route::get('/engagement', 'FrontController@engagement')->name('engagement');
Route::get('/article', 'FrontController@article')->name('presse');
Route::get('/articleshow/{article}', 'FrontController@articleShow')->name('presseshow');

