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
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('registration', 'StudentInfoController@registration');
    Route::post('/enrollment/studentRegistration/registration', 'StudentInfoController@store')->middleware('can:Admin');
    
    Route::get('Qualification', 'QualificationinfoController@index');
    Route::post('Qualification', 'QualificationinfoController@store');
    
    
    Route::get('personalinfo', 'PersonalinfoController@index');
    Route::post('personalinfo', 'PersonalinfoController@store');
    
    
    Route::get('siblings', 'SiblingController@index');
    Route::post('siblings', 'SiblingController@store');
    
    
    /**------------------------------------courses routes----------------------------------*/
    
    
    Route::post('/enrollment/course', 'CourseController@store')->middleware('can:Admin');
    Route::get('/course', 'CourseController@index')->middleware('can:Admin');
    Route::get('courseEdit/{id}', 'CourseController@edit')->middleware('can:Admin');
    Route::post('/courseUupdate', 'CourseController@update')->name('course.update')->middleware('can:Admin');
    Route::get('/course/destroy/{id}', 'CourseController@destroy')->middleware('can:Admin');
    
    
    /**------------------------------------courses routes----------------------------------*/
    

    
    /**------------------------------------instructor routes----------------------------------*/
    
    Route::get('instructor','InstructorController@index');
    Route::get('/instructorEdit/{id}','InstructorController@edit');
    Route::post('/instructorUpdate','InstructorController@update')->name('instructor.update');
    
    Route::get('/instructor/destroy/{id}', 'InstructorController@destroy');
    Route::post('/enrollment/instructor','InstructorController@store');
    /**-------------------------------- end instructor routes----------------------------------*/
    
    
    
    
    Route::get('enrollment', 'EnrollmentController@enrollment')->middleware('can:Admin');
    Route::get('studentEnroll','EnrollmentController@index')->middleware('can:Admin');
    Route::post('StudentEnrollment','EnrollmentController@store')->middleware('can:Admin');
    Route::get('offeredCourses','OfferedCourseController@index')->middleware('can:Admin');
    Route::post('offeredCourses','OfferedCourseController@store')->middleware('can:Admin');
    Route::get('attendence','AttendanceController@index')->middleware('can:Teacher');
    Route::get('attendence/report','AttendanceController@report')->middleware('can:Teacher')->name('report');
    Route::get('attendence/export/{id}','AttendanceController@export')->middleware('can:Teacher');
    Route::post('attendence/report/post','AttendanceController@reportselect')->middleware('can:Teacher')->name('report.select');
    Route::post('attendencstudents','AttendanceController@studentsrelated')->name('attence.getstudents')->middleware('can:Teacher');
    Route::post('/attendence/storage','AttendanceController@store')->name('attendence.store')->middleware('can:Teacher');
    Route::get('/125987dese/{name}','EnrollmentController@spisifierStudent')->middleware('can:Admin');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::post('/12589kur','EnrollmentController@sessiondegree')->middleware('can:Admin');
    Route::post('/getcources','EnrollmentController@relatedCourses')->middleware('can:Admin');
    Route::get('/123courses/{name}','OfferedCourseController@getcourses')->middleware('can:Admin');
    
    Route::get('StudentReport','ReportStudentController@index')->middleware('can:Admin');
    Route::get('registeruser','HomeController@register');
});    


Auth::routes();

