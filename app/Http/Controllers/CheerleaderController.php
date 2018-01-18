<?php

namespace App\Http\Controllers;

use App\Award;
use App\MainInformationCoach;
use App\MainInformationStudent;
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

        $skills = '';
        $cheerleader = \App\User::with(['skillSet','videos','awards','mainInformationStudent'])->findOrFail($id);

        if($request->expectsJson()){
          return $cheerleader;
        }

        if($cheerleader->skillSet){
            $skills = $cheerleader->skillSet;
        }

        if(auth()->user()->type === 'coach'){
          $with = [
              'skills' => $skills,
              'coach' => $cheerleader,
              'teams' => auth()->user()->school->teams
          ];

            return view('coach.individual')->with($with);
        }
        else{
        $with = [
            'skills' => $skills,
            'cheerleader' => $cheerleader
        ];
            return view('student.individual')->with($with);
      }
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

    public function updateProfileStudent(Request $request){
        $user = $request->user();
        $cheertype = json_encode($request->cheertype);

        $data = [
            'user_id' => $user->id,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'dob' => $request->dob,
            'zip' => $request->zip,
            'school_type' => $request->school_type,
            'current_school' => $request->current_school,
            'current_year' => $request->current_year,
            'current_gpa' => $request->current_gpa,
            'act_score' => $request->act_score,
            'highest_sat' => $request->highest_sat,
            'bio' => $request->bio,
            'weight' => $request->weight,
            'height' => $request->height,
            'current_program_timeline' => $request->current_program_timeline,
            'past_program_timeline' => $request->past_program_timeline,
            'accolades' => $request->accolades,
            'cheertype' => $cheertype,
            'visibility' => $request->visibility,
            'looking_for' => $request->looking_for,
            'description' => $request->description,
        ];
        if(count(MainInformationStudent::where("user_id", $user->id)->get())){
            $create = $user->mainInformationStudent()->update($data);
        }else{
            $create = MainInformationStudent::create($data);
        }
//        dd($user->mainInformationStudent()->get());
        $user->email = $request->email;
        $user->name = $request->name;

        if($request->hasFile('profile_pic')){

          $old_pic_name = $user->profile_pic;

          $path = public_path('images\profile-pics\\'.$old_pic_name);
          if($old_pic_name){
              unlink($path);
          };

          $picture_name = $request->profile_pic->getClientOriginalName();
          $request->file('profile_pic')->storeAs('images/profile-pics',  $picture_name);
          $user->profile_pic = $picture_name;
        }

        if($create){
            $request->session()->flash('success',"Main information was updated!" );
        }
      $user->save();

//        dd($user->load('mainInformationStudent'));
      return back();
    }

    public function updateProfileCoach(Request $request){
        $user = $request->user();

        $user->update([
           'email' => $request->email,
           'name' => $request->name,
        ]);
        $data = [
            'user_id' => $user->id,
            'program_name' => $request->program_name,
            'coaching_title' => $request->coaching_title,
            'financial_requirements' => $request->financial_requirements,
            'same_information' => $request->same_information,
            'tuition_cost' => $request->tuition_cost,
            'description_program' => $request->description_program,
        ];
        if(count(MainInformationCoach::where("user_id", $user->id)->get())){
            $create = $user->mainInformationCoach()->update($data);
        }else{
            $create = MainInformationCoach::create($data);
        }

        $user->email = $request->email;
        $user->name = $request->name;

        $user->save();
        if($create){
            $request->session()->flash('success',"Main information was updated!" );
        }

        return back();
    }

    public function addVideo(Request $request){
        if($request->embed){
            $new_video = trim($request->embed);
            $str = explode("/", $new_video);
            $emb = $str[count($str)-2];

            if($str[0] == 'https:'){
                if($emb != 'embed'){
                    $youtube_code = str_replace('watch?v=', '', end($str)) ;
                    $embed = 'https://www.youtube.com/embed/'.$youtube_code;
                }
                else{
                    $embed = $new_video;
                }
                $request->user()->videos()->create([
                    'embed' => $embed
                ]);
            }elseif(end($str) == "iframe>"){
                $emb = explode("\"", $new_video);
                $embed = $emb[5];
                $request->user()->videos()->create([
                    'embed' => $embed
                ]);
            }
        }
        return back();
    }

    public function updateVideo(Request $request){
        if($request->new_video){
            $new_video = trim($request->new_video);
            $video_id =  $request->video_id;
            $video =  Video::find($video_id);

            if($video && $video->user_id == auth()->user()->id){
                $str = explode("/", $new_video);
                $emb = $str[count($str)-2];
                if($str[0] == 'https:'){

                    if($emb != 'embed'){
                        $youtube_code = str_replace('watch?v=', '', end($str)) ;
                        $embed = 'https://www.youtube.com/embed/'.$youtube_code;
                    }
                    else{
                        $embed = $new_video;
                    }
                    $video->update([
                        'embed' => $embed
                    ]);
                }elseif(end($str) == "iframe>"){
                    $emb = explode("\"", $new_video);
                    $embed = $emb[5];
                    $video->update([
                        'embed' => $embed
                    ]);
                }
            }
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
        if($request->award){
            $request->user()->awards()->create([
                'award' => $request->award
            ]);
        }

      return back();
    }

    public function updateAward(Request $request){
        if($request->new_award){
            $award_id =  $request->award_id;
            $award =  Award::find($award_id);
            if($award && $award->user_id == $request->user()->id){
                $award->update([
                    'award' => $request->new_award
                ]);
            }
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
