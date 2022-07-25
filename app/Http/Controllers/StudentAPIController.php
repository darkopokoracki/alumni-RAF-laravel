<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentAPIController extends Controller
{
    public function list() {
        $students_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/list");
        $students = json_decode($students_json);
    
        return $students;
    }


    public function page($page) {
        $students_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/list");
        $students = json_decode($students_json);
    
        $start = ($page - 1) * 10;
        // 1-> (1 - 1) * 10 = 0
        // 2-> (2 - 1) * 10 = 10
        // 3-> (3 - 1) * 10 = 20
        // 4-> (4 - 1) * 10 = 30
        // 5-> (5 - 1) * 10 = 40
        //                      //array  //start   //length
        $students = array_slice($students, $start, 10);
    
        return $students;
    }


    public function search($search) {
        $students_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/find/$search");
        $result = json_decode($students_json);
    
        return $result;
    }


    public function student($id) {
        $student_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/diplomac/$id");
        $student = json_decode($student_json);
    
        return $student;
    }
}
