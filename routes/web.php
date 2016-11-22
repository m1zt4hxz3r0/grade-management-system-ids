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

Route::get('/', 'PagesController@login');


Route::get('student-home', 'PagesController@studentHomepage');
Route::get('/student/grade-view', 'PagesController@gradeView');
Route::get('/student/grade-view/detail', 'PagesController@gradeViewDetail');
Route::get('student-course-prerequisite', 'PagesController@coursePrerequisite');
Route::get('student-change-password', 'PagesController@changePassword');
Route::get('student-change-pin', 'PagesController@changePin');

Route::get('instructor-home', 'PagesController@instructorHomepage');
Route::get('instructor-classes', 'PagesController@instructorClass');
Route::get('instructor-class-detail', 'PagesController@instructorClassDetails');
Route::get('instructor-class-standing', 'PagesController@instructorClassStanding');
Route::get('instructor-grade-percentage', 'PagesController@instructorGradePercentage');
Route::get('instructor-grade', 'PagesController@instructorGrade');
Route::get('instructor-change-password', 'PagesController@instructorChangePassword');
Route::get('instructor-change-pin', 'PagesController@instructorChangePin');

Route::get('registrar-home', 'PagesController@registrarHomepage');
Route::get('registrar-add-class', 'PagesController@registrarAddClass');
Route::get('registrar-search-class', 'PagesController@registrarSearchClass');
Route::get('registrar-class-detail', 'PagesController@registrarClassDetail');
Route::get('registrar-searchh-student', 'PagesController@registrarSearchStudent');
Route::get('registrar-student-detail', 'PagesController@registrarStudentDetail');
Route::get('registrar-add-student', 'PagesController@registrarAddStudent');
Route::get('registrar-add-instructor', 'PagesController@registrarAddInstructor');
Route::get('registrar-search-instructor', 'PagesController@registrarSearchInstructor');
Route::get('registrar-view-grades', 'PagesController@registrarViewGrades');
Route::get('registrar-view-deans-list', 'PagesController@registrarDeansList');