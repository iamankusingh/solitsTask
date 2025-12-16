<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    // create
    public function AddStudent(Request $req)
    {
        if($req->submitBtn){
            $solitsStudent = new Students();

            $fname = $req->name;
            $dob = $req->dob;
            $gender = $req->gender;
            $phone = $req->phone;
            $city = $req->city;
            $course = $req->course;
            $joinyear = $req->joinyear;
            $rollno = $req->rollno;

            $solitsStudent->full_name = $fname;
            $solitsStudent->dob = $dob;
            $solitsStudent->gender = $gender;
            $solitsStudent->phone = $phone;
            $solitsStudent->city = $city;
            $solitsStudent->course = $course;
            $solitsStudent->joining_year = $joinyear;
            $solitsStudent->roll_no = $rollno;

            $solitsStudent->save();
            return redirect('/');
        }
    }

    // Read
    public function GetStudent(Request $req){
        $students = Students::all();
        return view('home', compact('students'));
    }

    // Update
    public function Edit(Students $student) {
        $students = Students::all();
        return view('home', compact('students', 'student'));
    }
    public function update(Request $req, Students $student) {
        // map request inputs to model attributes
        $student->full_name = $req->name;
        $student->dob = $req->dob;
        $student->gender = $req->gender;
        $student->phone = $req->phone;
        $student->city = $req->city;
        $student->course = $req->course;
        $student->joining_year = $req->joinyear;
        $student->roll_no = $req->rollno;

        $student->save();

        return redirect('/')->with('success', 'Student updated');
    }

    // Delete
    public function delete(Request $req, $id) {
        Students::where("id", $id)->delete();
        return back();
    }
}
