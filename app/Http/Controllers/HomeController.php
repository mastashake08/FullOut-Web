<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = '';
        if(auth()->user()->skillSet){
            $skills = auth()->user()->skillSet->toArray();
        }

        switch(auth()->user()->type){
          case 'student':
            return view('student.home', compact('skills'));
          break;
          case 'coach':
            return view('coach.home');
          break;
          case 'instructor':
            return view('instructor.home');
            break;
          default:
          return view('student.home');
          break;

        }

    }
}
