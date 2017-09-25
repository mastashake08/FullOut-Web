<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
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
          return Video::with('user')->paginate(10);
        }
        return view('videos.all');

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
        $request->validate([
        'embed' => 'required|embed'
        ]);
        $video = $request->user()->videos()->create([
          'embed' => $request->embed
        ]);
        if($request->expectsJson()){
          return response()->json([
            'video' => $video
          ]);
        }
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
        return response()->json([
          'video' => Video::findOrFail($id)
        ]);
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
        $video = Video::findOrFail($id);
        if($request->user()->can('update', $video)){
          $video->embed = $request->embed;
          $video->save();
          return response()->json([
            'video' => $video
          ]);
        }
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
        $video = Video::findOrFail($id);
        if($request->user()->can('delete', $video)){
          $video->embed = $request->embed;
          $video->save();
          return response()->json([
            'success' => true
          ]);
        }

    }
}
