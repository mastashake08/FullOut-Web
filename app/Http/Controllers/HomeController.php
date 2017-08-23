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
        switch(auth()->user()->type){
          case 'student':
            return view('student.home');
          break;
          case 'coach':
            return view('coach.home');
          break;
          case 'instructor':
            return view('instructor.home');
            break;

        }

    }
}
