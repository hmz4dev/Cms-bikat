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

Route::get('/', function(){
    return view('admin.login.login');
});

Route::get('registration', 'StudentInfoController@registration');
Route::post('/enrollment/studentRegistration/registration', 'StudentInfoController@store');

Route::get('Qualification', 'QualificationinfoController@index');
Route::post('Qualification', 'QualificationinfoController@store');


Route::get('personalinfo', 'PersonalinfoController@index');
Route::post('personalinfo', 'PersonalinfoController@store');


Route::get('siblings', 'SiblingController@index');
Route::post('siblings', 'SiblingController@store');


/**------------------------------------courses routes----------------------------------*/

Route::get('course', 'CourseController@create');
Route::post('/course', 'CourseController@store');
Route::get('/course', 'CourseController@index');
Route::get('course/{id}/edit', 'CourseController@edit');
Route::get('/course/{id}/update', 'CourseController@update');
Route::get('enrollment/{id}/course', 'CourseController@destroy');


/**------------------------------------instructor routes----------------------------------*/





/**------------------------------------instructor routes----------------------------------*/

Route::get('instructor','InstructorController@index');
Route::get('/instructorEdit/{id}','InstructorController@edit');
Route::post('/instructorUpdate','InstructorController@update')->name('instructor.update');

Route::get('/instructor/destroy/{id}', 'InstructorController@destroy');
Route::post('/enrollment/instructor','InstructorController@store');
/**-------------------------------- end instructor routes----------------------------------*/




Route::get('enrollment', 'EnrollmentController@enrollment');
Route::get('studentEnroll','EnrollmentController@index');
Route::post('StudentEnrollment','EnrollmentController@store');
Route::get('offeredCourses','OfferedCourseController@index');
Route::get('attendence','AttendenceController@attendence');
Route::get('/125987dese/{name}','EnrollmentController@spisifierStudent');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/12589kur','EnrollmentController@sessiondegree');