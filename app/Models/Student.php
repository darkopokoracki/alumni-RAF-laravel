<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;


class Student extends Model
{
    public static function getAll($page) {
        
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
        
        // $students = DB::select('select * from student');
        // return $students;
    }

    public static function getSearched($search) {
        $data_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/find/$search");
        $search_result = json_decode($data_json);

        return $search_result;
    }

    public static function getSingle($id) {
        
        $students_json = file_get_contents("http://alumni.raf.edu.rs/rs/api/diplomac/$id");
        $student = json_decode($students_json);

        return $student;
        

        // $student = DB::select("select * from student where id = $id");
        // return $student;
    }
}
