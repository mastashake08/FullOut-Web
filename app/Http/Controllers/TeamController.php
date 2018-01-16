<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use App\Team;
use App\User;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = auth()->user();
        $coaches = User::where([['type', 'coach'],['school_id', $user->school_id]])->get();
        $with = [
            'teams' => Team::paginate(10),
            'coaches' => $coaches
        ];

        if(auth()->user()->cant('create', School::class)){

            if($request->expectsJson()){

                return Team::paginate(10);
            }
            else{
                return view('team.favorite');
            }
        }
        else{
          return view('team.all')->with($with);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'team_name' => 'required',
            'mascot' => 'required',
            'description' => 'required',
            'team_type' => 'required',
            'wins_uca' => 'required',
            'wins_nca' => 'required',
            'wins_worlds' => 'required',
            'wins_other' => 'required',
            'team_responsibilities' => 'required',
            'number_members' => 'required',
            'average_room' => 'required',
            'skills' => 'required',
        ]);
        $team = $request->user()->school->teams()->create([
          'team_name' => $request->team_name,
          'coach_name' => $request->user()->name,
          'mascot' => $request->mascot,
//          'color_code' => $request->color_code,
          'description' => $request->description,
          'team_type' => $request->team_type,
          'team_responsibilities' => $request->team_responsibilities,
          'number_members' => $request->number_members,
          'average_room' => $request->average_room,
          'skills' => $request->skills,
            'wins_uca' => $request->wins_uca,
            'wins_nca' => $request->wins_nca,
            'wins_worlds' => $request->wins_worlds,
            'wins_other' => $request->wins_other,
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $canMessage = false;
        $user = auth()->user();
        $team = Team::findOrFail($id);
        $debug = [
          'team' => collect($team->skillSet),
          'cheerleader' =>collect((auth()->user()->skillSet))
        ];
        $teamSpring = collect($team->skillSet->spring_floor_tumbling_skills);
        $userSpring = collect($user->skillSet->spring_floor_tumbling_skills);
        $teamHard = collect($team->skillSet->hard_floor_tumbling_skills);
        $userHard = collect($user->skillSet->hard_floor_tumbling_skills);
        $teamGroup = collect($team->skillSet->group_stunting_skills);
        $userGroup = collect($user->skillSet->group_stunting_skills);
        $teamCoed = collect($team->skillSet->coed_stunting_skills);
        $userCoed = collect($team->skillSet->coed_stunting_skills);
        $teamSpringCount = $teamSpring->count();
        $userSpringCount = $userSpring->count();
        $teamHardCount = $teamHard->count();
        $userHardCount = $userHard->count();
        $teamGroupCount = $teamGroup->count();
        $userGroupCount = $userGroup->count();
        $teamCoedCount = $teamCoed->count();
        $userCoedCount = $userCoed->count();
        $skillPercentage = ($userSpringCount + $userHardCount + $userGroupCount + $userCoedCount)/($teamSpringCount + $teamHardCount + $teamGroupCount + $teamCoedCount);
        if($skillPercentage > 0.7){
          $canMessage = true;
        }

        $with = [
          'team' => $team,
          'teamSpring' => $teamSpring,
          'teamHard' => $teamHard,
          'teamCoed' => $teamCoed,
          'teamGroup' => $teamGroup,
          'userSpring' => $userSpring,
          'userHard' => $userHard,
          'userGroup' => $userGroup,
          'userCoed' => $userCoed,
          'canMessage' => $canMessage,
          'skillPercentage' => $skillPercentage

        ];
        return view('team.individual')->with($with);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = \App\Team::findOrFail($id);
        $with = [
          'team' => $team
        ];
        return view('team.edit')->with($with);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $team = \App\Team::findOrFail($id);
        $team->fill($request->all())->save();

        $request->session()->flash('success',"{$team->team_name} Updated Successfully!" );
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $team = \App\Team::findOrFail($id);
        \App\Team::destroy($id);
        $request->session()->flash('success',"{$team->team_name} Deleted Successfully!" );
        return back();

    }

    public function getTeams(Request $request)
    {
        if($request->expectsJson()){

            return Team::paginate(10);
        }
        else{
            return view('team.all');
        }
    }

    public function searchTeams(Request $request)
    {
        if($request->expectsJson()){
            $conditions = [
                ['team_name', '=', $request->has('name') ? $request->name : '*'],
                ['coach_name', '=', $request->has('city') ? $request->city : '*'],

            ];
            return \App\Team::when($request->team_name != "" && $request->has('team_name'), function ($query) use ($request) {
                return $query->where('team_name', 'LIKE', "(%$request->team_name%)");
            })
            ->when($request->coach_name != "" && $request->has('coach_name'), function ($query) use ($request) {
                return $query->where('coach_name', 'LIKE', '%'.$request->coach_name.'%');
            })
            ->when($request->	team_type != "" && $request->has('team_type'), function ($query) use ($request) {

                return $query->where('team_type','=',$request->	team_type)
                    ;
            })->paginate(10);
        }
        else{
            return view('student.all');
        }

    }
}
