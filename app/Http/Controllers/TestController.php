<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestController extends Controller
{
    function fnStudentRegister(Request $request){
        // try{
            $name = $request->stud_name;
            $contact = $request->stud_contact;
            $address = $request->stud_address;
            $students = DB::table('student')->insert([
                'Name'=>$name,
                'Contact'=>$contact,
                'Address'=>$address
        ]);
//         // print_r($students);
        if($students){
            return view('student_registration',['error' => "Student registered"]);
        }
        else{
            return view('student_registration',['error' => "Data not registered"]);
        }
}

function fnGetStudents(){
    $studentList = DB::table('student')->get();
    // print_r($students);
    return view('student_data',['students'=> $studentList]);

}

function fnDelStudent($id){
    echo $id;
    DB::table('student')->where ('id', $id)->delete();
    return redirect('Students');
}

function updateStudentData($id){
    $student = DB::table('student')->where ('id', $id)->first();
    return view('student_update',['student'=> $student]);
}

function fnUpdateStudent(Request $request, $id){
    $name = $request->stud_name;
    $contact = $request->stud_contact;
    $address = $request->stud_address;
    DB::table('student')-> where('id',$id)->update([
        'Name'=> $name,
        'Contact'=>$contact,
        'Address'=>$address
    ]);
    return redirect('Students');
}

}

