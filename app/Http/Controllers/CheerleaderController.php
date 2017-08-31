<?php

namespace App\Http\Controllers;

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
        $cheerleader = \App\User::with(['skillSet'])->findOrFail($id);
        if($request->expectsJson()){
          return $cheerleader;
        }
        $with = [
          'cheerleader' => $cheerleader
        ];
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
      if($request->hasFile('profile_pic')){
        $path = $request->file('profile_pic')->store('public');
        $url = Storage::url($path);
        $user->profile_pic = $url;
      }
      $user->save();
      return back();
    }
}
