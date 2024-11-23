<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    function insertData(Request $request)
    {

        $student = new student();

        $student->Name = $request->Name;
        $student->Email = $request->Email;
        $student->Roll = $request->Roll;
        $student->save();

        if ($student) {
            echo "Data Added Successful ";
        } else {
            echo "Somehting went wrong";
        }
    }


    function list()
    {

        $studentData = student::paginate(2);
        return view("studentData", ["student" => $studentData]);
    }


    function delete($id)
    {

        echo $id;
        $isDeleted = student::destroy($id);
        echo $isDeleted;
        if ($isDeleted) {
            return redirect("/list");
        }
    }


    function edit($id)
    {
        $data = student::find($id);
        return view("editStudentData", ["data" => $data]);
    }

    function editStudent(Request $request, $id)
    {
        $student = student::find($id);

        $student->Name = $request->input("Name");
        $student->Email = $request->input("Email");
        $student->Roll = $request->input("Roll");
        if ($student->save()) {
            return redirect("/list");
        } else {
            return "ops";
        }
    }

    function search(Request $request){

         
        $SearchTerm = $request->input("search");

        $student = student::where('Name' , 'like' , "%$SearchTerm%")->get();
        return view("StudentData" , ["student" => $student]);
    }



}
