<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(auth()->user()->cant('create',School::class)){
          $with = [
            'teams' => Team::paginate(10)
          ];
          return view('team.all')->with($with);
        }
        else{
          return view('team.all');
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
        $team = $request->user()->school->teams()->create([
          'team_name' => $request->team_name,
          'coach_name' => $request->coach_name,
          'mascot' => $request->mascot,
          'color_code' => $request->color_code,
          'description' => $request->description,
          'team_type' => $request->team_type
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
        //
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
}
