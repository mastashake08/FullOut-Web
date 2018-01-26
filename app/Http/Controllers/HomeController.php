<?php

namespace App\Http\Controllers;

use App\School;
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
        if(count(auth()->user()->skillSet) && auth()->user()->type == 'student'){
            $skills = auth()->user()->skillSet;
            $skills = $skills->first()->toArray();

            $spring_tumbling_percent = ceil($skills['spring_tumbling_score'] * 100 / 43);
            $hard_tumbling_percent = ceil($skills['hard_tumbling_score'] * 100 / 43);
            $group_stunting_percent = ceil($skills['group_stunting_score'] * 100 / 61);
            $coed_stunting_percent = ceil($skills['coed_stunting_score'] * 100 / 67);

        }

        if(auth()->user()->type == 'coach'){

            $schools = School::paginate(10);

        }


        switch(auth()->user()->type){
          case 'student':
            return view('student.home',compact('spring_tumbling_percent','hard_tumbling_percent','group_stunting_percent','coed_stunting_percent','skills'));
          break;
          case 'coach':
            return view('coach.home',compact('schools'));
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
