<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    function insertData(Request $request) {
        $studentData = student::all();

        $student = new student();

        $student->Name=$request->Name;
        $student->Email=$request->Email;
        $student->Roll=$request->Roll;
        $student->save() ;
        
        return $studentData ;
    }
}
