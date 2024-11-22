<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    function insertData(Request $request) {

        $student = new student();

        $student->Name=$request->Name;
        $student->Email=$request->Email;
        $student->Roll=$request->Roll;
        $student->save() ;
        
        if($student){
            echo "Data Added Successful ";
        }
        else{
            echo "Somehting went wrong";
        }
    }

 
    function list(){

        $studentData = student::all();

        return view("studentData" , ["student" => $studentData]);
    }
}
