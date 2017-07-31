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
    public function index()
    {
        //
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
      $skills = $request->skills;
      $basic_standing_spring = array_key_exists('basic_standing', $skills ) ? count($skills['spring_floor_tumbling']['basic_standing']) : 0;
      $basic_running_spring = array_key_exists('basic_running', $skills  ) ? count($skills['spring_floor_tumbling']['basic_running']) : 0;
      $advanced_standing_spring = array_key_exists('advanced_standing',$skills ) ? count($skills['spring_floor_tumbling']['advanced_standing']) : 0;
      $advanced_running_spring = array_key_exists('advanced_running',$skills ) ? count($skills['spring_floor_tumbling']['advanced_running']) : 0;
      $elite_standing_spring = array_key_exists('elite_standing',$skills) ? count($skills['spring_floor_tumbling']['elite_standing']) : 0;
      $elite_running_spring = array_key_exists('elite_running',$skills) ? count($skills['spring_floor_tumbling']['elite_running']) : 0;
      $skills = json_encode($request->skills);
      $user = auth()->user();
      $skillset = new \App\Skill([
        'spring_floor_tumbling_skills' => $skills,
        'basic_standing_spring' => $basic_standing_spring,
        'basic_running_spring' => $basic_running_spring,
        'advanced_standing_spring' => $advanced_standing_spring,
        'advanced_running_spring' => $advanced_running_spring,
        'elite_standing_spring' => $elite_standing_spring,
        'elite_running_spring' => $elite_running_spring,
        'team_id' => $request->team_id
      ]);
      $user->skillSet()->save($skillset);
      $request->session()->flash('success',"Spring Skills Updated!" );
      $user->notify(new \App\Notifications\SkillsUpdated($skills));
      return back();
    }
}
