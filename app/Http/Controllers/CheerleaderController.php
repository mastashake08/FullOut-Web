<?php

namespace App\Http\Controllers;

use App\Award;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CheerleaderController extends Controller
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
    public function show(Request $request,$id)
    {
        //
        $cheerleader = \App\User::with(['skillSet','videos','awards'])->findOrFail($id);
        if($request->expectsJson()){
          return $cheerleader;
        }
        if(auth()->user()->type === 'coach'){
          $with = [
            'cheerleader' => $cheerleader,
            'teams' => $request->user()->school->teams
          ];

        }
        else{
        $with = [
          'cheerleader' => $cheerleader
        ];
      }
        return view('student.individual')->with($with);
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

    public function updateProfile(Request $request){
      $user = $request->user();
      $user->email = $request->email;
      $user->address = $request->address;
      $user->city = $request->city;
      $user->state = $request->state;
      $user->zip = $request->zip;
      $user->gpa = $request->gpa;
      $user->act_score = $request->act_score;
      $user->sat_score = $request->sat_score;
      $user->bio = $request->bio;
      $user->weight = $request->weight;
      $user->height = $request->height;
      $user->visibility = $request->visibility;
      $user->type = 'student';
      $user->cheertype = $request->cheertype;
      $user->current_team = $request->current_team;
      $user->looking_for = $request->looking_for;
      if($request->hasFile('profile_pic')){
        $path = $request->file('profile_pic')->store('public');
        $url = Storage::url($path);
        $user->profile_pic = $url;
      }
      $user->save();
      return back();
    }

    public function addVideo(Request $request){

        $str = explode("/", $request->embed);
        $emb = $str[count($str)-2];
        if($str[0] == 'https:'){
            if($emb != 'embed'){
                $youtube_code = str_replace('watch?v=', '', end($str)) ;
                $embed = 'https://www.youtube.com/embed/'.$youtube_code;
            }
            else{
                $embed = $request->embed;
            }
            $request->user()->videos()->create([
                'embed' => $embed
            ]);
        }

        return back();
    }

    public function updateVideo(Request $request){

        $video_id =  $request->video_id;
        $video =  Video::find($video_id);
        if($video && $video->user_id == $request->user()->id){

            $video->update([
                'embed' => $request->new_video
            ]);
        }

        return back();
    }

    public function deleteVideo(Request $request){

        $video_id =  $request->product_id;
        $video =  Video::find($video_id);

        if($video && $video->user_id == $request->user()->id){
            $video->delete();
        }

        return back();
    }

    public function addAward(Request $request){
      $request->user()->awards()->create([
        'award' => $request->award
      ]);
      return back();
    }

    public function updateAward(Request $request){
       $award_id =  $request->award_id;
       $award =  Award::find($award_id);
       if($award && $award->user_id == $request->user()->id){
           $award->update([
               'award' => $request->new_award
           ]);
       }

        return back();
    }

    public function deleteAward(Request $request){

       $award_id =  $request->product_id;
       $award =  Award::find($award_id);
       if($award && $award->user_id == $request->user()->id){
           $award->delete();
       }

        return back();
    }


}
