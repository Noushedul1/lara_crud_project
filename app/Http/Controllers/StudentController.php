<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $student;

    // start for home
    function welcome()
    {
        return view('welcome');
    } 
    // end for home 
    // start for students 
    function students()
    {
        return view('students');
    }
    // end for students 
    // start for addstudents 
    function addstudents(Request $request)
    {
        $this->students = new Student();
        $this->students->name = $request->name;
        $this->students->email = $request->email;
        $this->students->country = $request->country;
        $this->students->save();
        return redirect()->back()->with('message', 'Student Successfully Inserted');
    }
    // end for addstudents 
    // start for managestudents
    function managestudents()
    {
        $this->students = Student::orderBy('id', 'desc')->get(); //more than one get()
        // $this->students = Student::orderBy('id', 'desc')->first(); //only one first()
        // $this->students = Student::orderBy('id', 'desc')->skip(1)->first(); //skip one 
        // $this->students = Student::orderBy('id', 'desc')->skip(1)->take(5)->get(); //skip one 
        // $this->students = Student::orderBy('id', 'desc')->take(2)->get(); //take 2 
        return view('managestudents', ['students'=>$this->students]);
    } 
    // end for managestudents 
    // start for edit
    function edit($id)
    {
        $this->student = Student::find($id);
        // return $this->student;
        return view('edit', ['student' => $this->student]);
    }
    // end for edit 
    // start for updatestudent
    function updatestudent(Request $request, $id)
    {
        // return $id;
        // return $request->all();
        $this->student = Student::find($id);
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->country = $request->country;
        $this->student->save();
        return redirect('/managestudents')->with('updatemsg','Student Successfully Updated');
    } 
    // end for updatestudent 
    // start for delete 
    function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/managestudents')->with('deletemsg', 'Student Successfully Deleted');
    }
    // end for delete 
}
