<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function AddStudent(Request $req)
    {
        if($req->submitBtn){
            $solitsStudent = new students();

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
}
