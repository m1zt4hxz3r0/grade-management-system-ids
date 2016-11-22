<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
    	return view('pages.login');
    }
    public function studentHomepage(){
    	return view('pages.student.slide');
    }
    public function gradeView(){
    	return view('pages.student.grade-view');
    }
    public function gradeViewDetail(){
    	return view('pages.student.grade-view-detail');
    }
    public function coursePrerequisite(){
    	return view('pages.student.course-prerequisite');
    }
    public function changePassword(){
    	return view('pages.student.change-password');
    }
    public function changePin(){
    	return view('pages.student.change-pin');
    }
    public function instructorHomepage(){
        return view('pages.instructor.slide');
    }
    public function instructorClass(){
        return view('pages.instructor.classes');
    }
    public function instructorClassDetails(){
        return view('pages.instructor.class-detail');
    }
    public function instructorClassStanding(){
        return view('pages.instructor.class-standing');
    }
    public function instructorGradePercentage(){
        return view('pages.instructor.grade-percentage');
    }
    public function instructorGrade(){
        return view('pages.instructor.grade');
    }
    public function instructorChangePassword(){
        return view('pages.instructor.change-password');
    }
    public function instructorChangePin(){
        return view('pages.instructor.change-pin');
    }
    public function registrarHomepage(){
        return view('pages.registrar.slide');
    }
    public function registrarAddClass(){
        return view('pages.registrar.add-class');
    }
    public function registrarSearchClass(){
        return view('pages.registrar.search-class');
    }
    public function registrarClassDetail(){
        return view('pages.registrar.class-detail');
    }
    public function registrarSearchStudent(){
        return view('pages.registrar.search-student');
    }
    public function registrarStudentDetail(){
        return view('pages.registrar.student-detail');
    }
     public function registrarAddStudent(){
        return view('pages.registrar.add-student');
    }
    public function registrarAddInstructor(){
        return view('pages.registrar.add-instructor');
    }
    public function registrarSearchInstructor(){
        return view('pages.registrar.search-instructor');
    }
    public function registrarViewGrades(){
        return view('pages.registrar.view-grades');
    }
    public function registrarDeansList(){
        return view('pages.registrar.view-deans-list');
    }
}
