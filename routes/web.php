<?php

use App\Mail\ContactMail;

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

Route::get('/', 'Frontend\PageController@home')->name('site.home');
Route::get('project-details/{slug}', 'Frontend\PageController@projectDetails')->name('site.projects.details');
Route::get('projects', 'Frontend\PageController@projects')->name('site.projects');
Route::get('services', 'Frontend\PageController@services')->name('site.services');
Route::get('hiring', 'Frontend\PageController@hiring')->name('site.hiring');
Route::post('hiring', 'Frontend\PageController@saveHiring')->name('site.hiring.save');
Route::get('contact', 'Frontend\PageController@contact')->name('site.contact');
Route::post('send-mail', 'Frontend\PageController@sendMail')->name('site.contact.mail.send');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('test', function () {
	echo bcrypt('password');
	// Mail::to(auth()->user())
 //    	->send(new ContactMail());

	// Mail::send(['text'=>'frontend.pages.mail'], [], function($message) {
 //         $message->to('abc@gmail.com', 'Tutorials Point')->subject
 //            ('Laravel Basic Testing Mail');
 //         $message->from('xyz@gmail.com','Virat Gandhi');
 //      });
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
