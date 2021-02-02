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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'panel'], function () {
    Route::get('/','back\DashboardController@dashboard')->name('dashboard');
    Route::resource('university','back\UniversityController');
    Route::resource('faculty','back\FacultyController');
    Route::resource('program','back\ProgramController');
    Route::resource('degree','back\DegreeController');
    Route::resource('course','back\CourseController');
    Route::resource('courseType','back\CourseTypeController');
    Route::resource('courseCategory','back\CourseCategoryController');
    Route::resource('setting','back\settingController');
    Route::get('photoDelete/{id}','back\UniversityController@photoDelete')->name('photoDelete');
    Route::get('adminList','back\settingController@adminlist')->name('adminList');
    Route::get('adminChange','back\settingController@adminchange')->name('adminchange');
    Route::get('userDestroy','back\settingController@userdestroy')->name('userdestroy');

});
