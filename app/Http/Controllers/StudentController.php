<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function home() {
        return view('student.home');
    }


    public function page($page = 1) {
        $students = Student::getAll($page);
        $pages = ceil( count($students) / 10 );
    
        return view('student.students', [
            "students" => $students, "page" => $page, "pages" => $pages
        ]);
    }


    public function search($search) {
        $students = Student::getSearched($search);
    
        return view('student.students', [
            "students" => $students
        ]);
    }


    public function student($id) {
        $student = Student::getSingle($id);

        return view('student.student', [
            "student" => $student
        ]);
    }

    public function otvori_novu_rutu() {
        $ime = 'Darko';

        return $ime;
    }
}
