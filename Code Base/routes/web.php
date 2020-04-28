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

Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@contactUs');

Route::get('/feedback', 'PagesController@feedback');

Route::get('/awards', 'PagesController@awards');

Route::get('/doctors/profile/{name}', 'PagesController@doctorProfile');

Route::get('/departments/{name}', 'PagesController@departmentPage');

Route::get('/blog', 'PagesController@blog');

Route::get('/gallery', 'GalleryController@index');

Route::get('/news', 'NewsMediaController@index');

Route::get('/caseStudy', 'CaseStudiesController@index');

Route::get('/blog/cancerTreatment/followUp', 'PagesController@followUpCareTreatment');

Route::get('/blog/cancerTreatment/types', 'PagesController@cancerTreatmentTypes');

// Forms

Route::post('/contactUs/save', 'ContactUsController@store');

Route::post('/feedback/save', 'FeedbackController@store');
