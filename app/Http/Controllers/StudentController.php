<?php

namespace App\Http\Controllers;


use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    	return view('student/create');
    }

    public function store(Request $request)
    {
    	//return "Submitted";
    	//echo "<pre>";
    	//print_r($request->input());

    	$student = student::create([

    		'student_name' => $request->input('std_name'),
    		'student_roll' => $request->input('std_roll'),
    		'student_email' => $request->input('std_email'),
    		'student_address' => $request->input('std_address'),

    	]);

    	if($student)
    	{
    		return redirect()->route('student.create')->with('success', 'Student record inserted successfully!!');
    	}

    	return back()->withInput();
    }
}
