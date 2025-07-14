<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    //
    public function dashboard()
    {
        return view('tutor.dashboard');
    }

    public function performance() 
    {
        return view('tutor.performance');
    }

    public function prediction() 
    {
        return view('tutor.prediction');
    }

    public function approvedStudents() 
    {
        return view('tutor.approvedStudents');
    }

    public function messages() 
    {
        return view('tutor.messages');
    }

    public function profile() 
    {
        return view('tutor.profile');
    }
}
