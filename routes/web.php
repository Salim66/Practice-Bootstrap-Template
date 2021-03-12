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

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend
Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('/about-us', 'App\Http\Controllers\Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('/contact-us', 'App\Http\Controllers\Frontend\FrontendController@contactUs')->name('contact.us');
Route::get('/news-events/details/{id}', 'App\Http\Controllers\Frontend\FrontendController@newsEventsDetails')->name('news_events.details');
Route::get('/our-mission', 'App\Http\Controllers\Frontend\FrontendController@ourMission')->name('our.mission');
Route::get('/our-vission', 'App\Http\Controllers\Frontend\FrontendController@ourVission')->name('our.vission');
Route::get('/news-and-events', 'App\Http\Controllers\Frontend\FrontendController@newsAndEvents')->name('news.events');
Route::post('/communicate/user', 'App\Http\Controllers\Frontend\FrontendController@communicateUser')->name('user.communicate');


Auth::routes();

//Backend
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function(){
    Route::prefix('users')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\UserController@view')->name('users.view');
        Route::get('/add', 'App\Http\Controllers\Backend\UserController@add')->name('users.add');
        Route::post('/store', 'App\Http\Controllers\Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\UserController@edit')->name('users.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\UserController@update')->name('users.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\UserController@delete')->name('users.delete');
    });

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\ProfileController@view')->name('profile.view');
        Route::get('/edit', 'App\Http\Controllers\Backend\ProfileController@edit')->name('profile.edit');
        Route::post('/update', 'App\Http\Controllers\Backend\ProfileController@update')->name('profile.update');
        Route::get('/change/password', 'App\Http\Controllers\Backend\ProfileController@changePassword')->name('profile.password.change');
        Route::post('/password/update', 'App\Http\Controllers\Backend\ProfileController@changePasswordUpdate')->name('profile.password.update');
    });


    Route::prefix('logo')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\LogoController@view')->name('logo.view');
        Route::get('/add', 'App\Http\Controllers\Backend\LogoController@add')->name('logo.add');
        Route::post('/store', 'App\Http\Controllers\Backend\LogoController@store')->name('logo.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\LogoController@edit')->name('logo.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\LogoController@update')->name('logo.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\LogoController@delete')->name('logo.delete');
    });


    Route::prefix('slider')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\SliderController@view')->name('slider.view');
        Route::get('/add', 'App\Http\Controllers\Backend\SliderController@add')->name('slider.add');
        Route::post('/store', 'App\Http\Controllers\Backend\SliderController@store')->name('slider.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\SliderController@edit')->name('slider.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\SliderController@update')->name('slider.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\SliderController@delete')->name('slider.delete');
    });


    Route::prefix('mission')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\MissionController@view')->name('mission.view');
        Route::get('/add', 'App\Http\Controllers\Backend\MissionController@add')->name('mission.add');
        Route::post('/store', 'App\Http\Controllers\Backend\MissionController@store')->name('mission.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\MissionController@edit')->name('mission.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\MissionController@update')->name('mission.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\MissionController@delete')->name('mission.delete');
    });


    Route::prefix('vission')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\VissionController@view')->name('vission.view');
        Route::get('/add', 'App\Http\Controllers\Backend\VissionController@add')->name('vission.add');
        Route::post('/store', 'App\Http\Controllers\Backend\VissionController@store')->name('vission.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\VissionController@edit')->name('vission.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\VissionController@update')->name('vission.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\VissionController@delete')->name('vission.delete');
    });


    Route::prefix('news_event')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\NewsEventController@view')->name('news_event.view');
        Route::get('/add', 'App\Http\Controllers\Backend\NewsEventController@add')->name('news_event.add');
        Route::post('/store', 'App\Http\Controllers\Backend\NewsEventController@store')->name('news_event.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\NewsEventController@edit')->name('news_event.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\NewsEventController@update')->name('news_event.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\NewsEventController@delete')->name('news_event.delete');
    });


    Route::prefix('service')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\ServiceController@view')->name('service.view');
        Route::get('/add', 'App\Http\Controllers\Backend\ServiceController@add')->name('service.add');
        Route::post('/store', 'App\Http\Controllers\Backend\ServiceController@store')->name('service.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ServiceController@edit')->name('service.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\ServiceController@update')->name('service.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\ServiceController@delete')->name('service.delete');
    });


    Route::prefix('contacts')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\ContactsController@view')->name('contacts.view');
        Route::get('/add', 'App\Http\Controllers\Backend\ContactsController@add')->name('contacts.add');
        Route::post('/store', 'App\Http\Controllers\Backend\ContactsController@store')->name('contacts.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ContactsController@edit')->name('contacts.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\ContactsController@update')->name('contacts.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\ContactsController@delete')->name('contacts.delete');
        Route::get('/communicate', 'App\Http\Controllers\Backend\ContactsController@allCommunicateShow')->name('contacts.communicate');
        Route::get('/communicate/{id}', 'App\Http\Controllers\Backend\ContactsController@deleteCommunicate')->name('contacts.communicate.delete');
    });


    Route::prefix('abouts')->group(function(){
        Route::get('/view', 'App\Http\Controllers\Backend\AboutController@view')->name('abouts.view');
        Route::get('/add', 'App\Http\Controllers\Backend\AboutController@add')->name('abouts.add');
        Route::post('/store', 'App\Http\Controllers\Backend\AboutController@store')->name('abouts.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\AboutController@edit')->name('abouts.edit');
        Route::put('/update/{id}', 'App\Http\Controllers\Backend\AboutController@update')->name('abouts.update');
        Route::get('/delete/{id}', 'App\Http\Controllers\Backend\AboutController@delete')->name('abouts.delete');
    });
});
