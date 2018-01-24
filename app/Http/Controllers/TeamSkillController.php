<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('team.skills');
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
        $team = \App\Team::findOrFail($id);
        $skills = $team->skillSet;
        $spring_tumbling_percent = ceil($skills['spring_tumbling_score'] * 100 / 43);
        $hard_tumbling_percent = ceil($skills['hard_tumbling_score'] * 100 / 43);
        $group_stunting_percent = ceil($skills['group_stunting_score'] * 100 / 61);
        $coed_stunting_percent = ceil($skills['coed_stunting_score'] * 100 / 67);
        $with = [
          'team' => $team,
          'skills' => $skills,
          'spring_tumbling_percent' => $spring_tumbling_percent,
          'hard_tumbling_percent' => $hard_tumbling_percent,
          'group_stunting_percent' =>  $group_stunting_percent,
          'coed_stunting_percent' => $coed_stunting_percent

        ];
        return view('team.skills')->with($with);
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

    public function springSkills(Request $request,$team_id){

        $user = auth()->user();
        $skills = $request->skills;
        if($skills){
            foreach($skills['spring_floor_tumbling_skills'] as $k => $array){
                if (($key = array_search("All", $array)) !== false) {
                    unset($array[$key]);
                    $skills['spring_floor_tumbling_skills'][$k] = $array;
                }
            }
            $spring_tumbling_score = array_sum(array_map("count", $skills['spring_floor_tumbling_skills']));

            $skills = json_encode($skills['spring_floor_tumbling_skills']);
            $attr = [
                'spring_floor_tumbling_skills' => $skills,
                'spring_tumbling_score' => $spring_tumbling_score,
                'team_id' => $team_id,
                'user_id' => $user->id
            ];
            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update($attr);
            }
            else{
                $user->skillSet()->create($attr);
            }
            $request->session()->flash('success',"Spring Skills Updated!" );
            //      $user->notify(new \App\Notifications\SkillsUpdated($skills));
        }
        else{
            $attr = [
                'spring_floor_tumbling_skills' => null,
                'spring_tumbling_score' => 0,
                'team_id' => $team_id,
                'user_id' => $user->id
            ];
            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update($attr);
            }
            else{
                $user->skillSet()->create($attr);
            }
        }

        return back();
    }

    public function hardSkills(Request $request,$team_id){
        $user = auth()->user();
        $skills = $request->skills;
        if($skills){
            foreach($skills['hard_floor_tumbling_skills'] as $k => $array){
                if (($key = array_search("All", $array)) !== false) {
                    unset($array[$key]);
                    $skills['hard_floor_tumbling_skills'][$k] = $array;
                }
            }

            $hard_floor_tumbling_count = array_sum(array_map("count", $skills['hard_floor_tumbling_skills']));
            $skills = json_encode($skills['hard_floor_tumbling_skills']);


            $attr = [
                'hard_floor_tumbling_skills' => $skills,
                'hard_tumbling_score' => $hard_floor_tumbling_count,
                'team_id' => $team_id,
                'user_id' => $user->id
            ];

            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }

            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update($attr);
//            dd($user->skillSet()->where('team_id', $team_id)->get());
            }
            else{
                $user->skillSet()->create($attr);
            }
            $request->session()->flash('success',"Hard Skills Updated!" );
            //      $user->notify(new \App\Notifications\SkillsUpdated($skills));
        }else{
            $attr = [
                'hard_floor_tumbling_skills' => null,
                'hard_tumbling_score' => 0,
                'team_id' => $team_id,
                'user_id' => $user->id
            ];

            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }

            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update($attr);
//            dd($user->skillSet()->where('team_id', $team_id)->get());
            }
            else{
                $user->skillSet()->create($attr);
            }
        }

      return back();
    }

    public function groupSkills(Request $request, $team_id){
        $user = auth()->user();
        $skills = $request->skills;
        if($skills){
            foreach($skills['group_stunting_skills'] as $name => $big_array){

                foreach($big_array as $k => $array){
                    if (($key = array_search("All", $array)) !== false) {
                        unset($array[$key]);
                        $skills['group_stunting_skills'][$name][$k] = $array;
                    }
                }
            }

            $group_stunting_score = 0;
            foreach( $skills['group_stunting_skills'] as $key => $array){
                $group_stunting_score += array_sum(array_map("count", $array));
            }

            $skills = json_encode($skills['group_stunting_skills']);


            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update([
                    'group_stunting_skills' => $skills,
                    'group_stunting_score' => $group_stunting_score,
                    'team_id' => $team_id,
                    'user_id' => $user->id,

                ]);
            }
            else{
                $user->skillSet()->create([
                    'group_stunting_skills' => $skills,
                    'group_stunting_score' => $group_stunting_score,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }

            $request->session()->flash('success',"Group Skills Updated!" );
//      $user->notify(new \App\Notifications\SkillsUpdated($skills));
        }else {

            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update([
                    'group_stunting_skills' => null,
                    'group_stunting_score' => 0,
                    'team_id' => $team_id,
                    'user_id' => $user->id,

                ]);
            }
            else{
                $user->skillSet()->create([
                    'group_stunting_skills' => null,
                    'group_stunting_score' => 0,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }
        }

      return back();
    }

    public function coedSkills(Request $request, $team_id){
        $skills = $request->skills;
        $user = auth()->user();
        if($skills){
            foreach($skills['coed_stunting_skills'] as $name => $big_array){

                foreach($big_array as $k => $array){
                    if (($key = array_search("All", $array)) !== false) {
                        unset($array[$key]);
                        $skills['coed_stunting_skills'][$name][$k] = $array;
                    }
                }
            }

            $coed_stunting_score = 0;

            foreach( $skills['coed_stunting_skills'] as $key => $array){
                $coed_stunting_score += array_sum(array_map("count", $array));
            }

            $skills = json_encode($skills['coed_stunting_skills']);


            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update([
                    'coed_stunting_skills' => $skills,
                    'coed_stunting_score' => $coed_stunting_score,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }
            else{
                $user->skillSet()->create([
                    'coed_stunting_skills' => $skills,
                    'coed_stunting_score' => $coed_stunting_score,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }

            $request->session()->flash('success',"Coed Skills Updated!" );
//      $user->notify(new \App\Notifications\SkillsUpdated($skills));
        }else{
            $exist = false;
            foreach($user->skillSet as $skillset){
                if($skillset->team_id == $team_id){
                    $exist = true;
                }
            }
            if($exist){
                $user->skillSet()->where('team_id', $team_id)->update([
                    'coed_stunting_skills' => null,
                    'coed_stunting_score' => 0,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }
            else{
                $user->skillSet()->create([
                    'coed_stunting_skills' => null,
                    'coed_stunting_score' => 0,
                    'team_id' => $team_id,
                    'user_id' => $user->id
                ]);
            }
        }

      return back();
    }
}
