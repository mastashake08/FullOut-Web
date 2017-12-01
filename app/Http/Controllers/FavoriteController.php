<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Favorite;
class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->expectsJson()){
          return $request->user()->favorites()->with('cheerleader')->paginate(10);
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
        $data = $request->all();
        $data['school_id'] = $request->user()->school_id;

        if ($request->has('team_id')) {
            $data['cheerleader_id'] = $request->user()->id;
            $request->merge([
                'cheerleader_id' => $data['cheerleader_id'],
                'school_id' => $data['school_id']
                ]);

        } else {
            $team = Team::where('school_id', $data['school_id'])->first();
            $data['team_id'] = $team->id;
            $request->merge([
                'team_id' =>  $data['team_id'],
                'school_id' => $data['school_id']
            ]);
        }

        $this->validate($request,[
            'team_id' => 'unique_with:favorites,cheerleader_id,school_id',
        ]);

        $favorite = $request->user()->favorites()->create($data);
        if ($request->expectsJson()) {
            return $favorite->cheerleader;
        } else {
            return back();
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
        Favorite::destroy($id);
        return response()->json([
          'success' => true
        ]);
    }

    public function getFavoriteTeams(Request $request)
    {
        if($request->expectsJson()){
            return $request->user()->favorites()->with('team')->paginate(10);
        }
    }
}
