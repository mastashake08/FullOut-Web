<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;

class ClinicsTryoutsController extends Controller
{
    public function index(){
        $user = auth()->user();
        $teams = Team::where([['coach_name', $user->name],['school_id', $user->school_id]])->get();
        $coaches = User::where([['type', 'coach'],['school_id', $user->school_id]])->get();

        $with = [
            'teams' => $teams,
            'coaches' => $coaches
        ];
//        dd($user->can('create', Tryout::class));


            $tryouts = $user->school->tryouts()->paginate(10);
            $with['tryouts'] = $tryouts;

            $clinics = $user->school->clinics()->paginate(10);
            $with['clinics'] = $clinics;


        return view('coach.clinics-tryouts')->with($with);
    }
}
