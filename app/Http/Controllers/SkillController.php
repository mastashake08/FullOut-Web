<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->expectsJson()){
          return response()->json([
            'skills' => $request->user()->skillSet
          ]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function springSkills(Request $request){
      $user = auth()->user();
      $skills = $request->skills;
      $spring_tumbling_score = array_sum(array_map("count", $skills['spring_floor_tumbling']));

      $basic_standing_spring = isset($skills['spring_floor_tumbling']['basic_standing']) ? count($skills['spring_floor_tumbling']['basic_standing']) : 0;
      $basic_running_spring = isset($skills['spring_floor_tumbling']['basic_running']) ? count($skills['spring_floor_tumbling']['basic_running']) : 0;
      $advanced_standing_spring = isset($skills['spring_floor_tumbling']['advanced_standing']) ? count($skills['spring_floor_tumbling']['advanced_standing']) : 0;
      $advanced_running_spring = isset($skills['spring_floor_tumbling']['advanced_running']) ? count($skills['spring_floor_tumbling']['advanced_running']) : 0;
      $elite_standing_spring = isset($skills['spring_floor_tumbling']['elite_standing']) ? count($skills['spring_floor_tumbling']['elite_standing']) : 0;
      $elite_running_spring = isset($skills['spring_floor_tumbling']['elite_running']) ? count($skills['spring_floor_tumbling']['elite_running']) : 0;
      $skills = json_encode($request->skills);

      $attr = [
        'spring_floor_tumbling_skills' => $skills,
      /*  'basic_standing_spring' => $basic_standing_spring,
        'basic_running_spring' => $basic_running_spring,
        'advanced_standing_spring' => $advanced_standing_spring,
        'advanced_running_spring' => $advanced_running_spring,
        'elite_standing_spring' => $elite_standing_spring,
        'elite_running_spring' => $elite_running_spring,
        */
        'spring_tumbling_score' => $spring_tumbling_score,
        'team_id' => $request->team_id,
        'user_id' => $user->id
      ];
      if($user->skillSet == null){
        $user->skillSet()->create($attr);
      }
      else{
      $user->skillSet()->update($attr);
      $user->skillSet->save();
    }
      $request->session()->flash('success',"Spring Skills Updated!" );
      $user->notify(new \App\Notifications\SkillsUpdated($skills));
      return back();
    }

    public function hardSkills(Request $request){

      $skills = $request->skills;
      /*
      $basic_standing_spring = isset($skills['hard_floor_tumbling']['basic_standing']) ? count($skills['hard_floor_tumbling']['basic_standing']) : 0;
      $basic_running_spring = isset($skills['hard_floor_tumbling']['basic_running']) ? count($skills['hard_floor_tumbling']['basic_running']) : 0;
      $advanced_standing_spring = isset($skills['hard_floor_tumbling']['advanced_standing']) ? count($skills['hard_floor_tumbling']['advanced_standing']) : 0;
      $advanced_running_spring = isset($skills['hard_floor_tumbling']['advanced_running']) ? count($skills['hard_floor_tumbling']['advanced_running']) : 0;
      $elite_standing_spring = isset($skills['hard_floor_tumbling']['elite_standing']) ? count($skills['hard_floor_tumbling']['elite_standing']) : 0;
      $elite_running_spring = isset($skills['hard_floor_tumbling']['elite_running']) ? count($skills['hard_floor_tumbling']['elite_running']) : 0;
      */
      $hard_floor_tumbling_count = array_sum(array_map("count", $skills['hard_floor_tumbling']));
      $skills = json_encode($request->skills);

      $user = $request->user;
      dd($request->user()->with('skillSet','school')->first());
      $user->skillSet()->update([
        'hard_floor_tumbling_skills' => $skills,
        /*'basic_standing_hardwood' => $basic_standing_spring,
        'basic_running_hardwood' => $basic_running_spring,
        'advanced_standing_hardwood' => $advanced_standing_spring,
        'advanced_running_hardwood' => $advanced_running_spring,
        'elite_standing_hardwood' => $elite_standing_spring,
        'elite_running_hardwood' => $elite_running_spring,*/
        'hard_tumbling_score' => $hard_floor_tumbling_count,
        'team_id' => $request->team_id,
        'user_id' => $user->id
      ]);
      $user->skillSet->save();

      $request->session()->flash('success',"Spring Skills Updated!" );
      $user->notify(new \App\Notifications\SkillsUpdated($skills));
      return back();
    }

    public function groupSkills(Request $request){

      $skills = $request->skills;
      $group_stunting_score = array_sum(array_map("count", $skills['group_stunting']));
      $skills = json_encode($request->skills);

      $user = auth()->user();
      $user->skillSet()->update([
        'group_stunting_skills' => $skills,
        'group_stunting_score' => $group_stunting_score,
        'team_id' => $request->team_id,
        'user_id' => $user->id
      ]);
      $user->skillSet->save();

      $request->session()->flash('success',"Spring Skills Updated!" );
      $user->notify(new \App\Notifications\SkillsUpdated($skills));
      return back();
    }

    public function coedSkills(Request $request){
      $skills = $request->skills;
      $coed_stunting_score = array_sum(array_map("count", $skills['coed_stunting']));
      $skills = json_encode($request->skills);

      $user = auth()->user();
      $user->skillSet()->update([
        'coed_stunting_skills' => $skills,
        'coed_stunting_score' => $coed_stunting_score,
        'team_id' => $request->team_id,
        'user_id' => $user->id
      ]);
      $user->skillSet->save();

      $request->session()->flash('success',"Spring Skills Updated!" );
      $user->notify(new \App\Notifications\SkillsUpdated($skills));
      return back();
    }
}
