<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
          'data' => School::all()
        ]);
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
        $school = School::create([
          'name' => $request->name,
          'logo' => $request->logo,
          'description' => $request->description,
          'office_phone' => $request->office_phone,
          'cell_phone' => $request->cell_phone,
          'office_address' => $request->office_address,
          'in_state_tuition' => $request->in_state_tuition,
          'out_state_tuition' => $request->out_state_tuition,
          'website' => $request->website,
          'min_gpa' => $request->min_gpa,
          'min_gpa_transfer' => $request->min_gpa_transfer,
          'gpa_needed_for_team' => $request->gpa_needed_for_team,
          'act_score' => $request->act_score,
          'sat_score' => $request->sat_score
        ]);

        return $school;
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
        $school = School::find($id);
        return response()->json([
          'data' => $school
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
        $school = School::find($id);

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
        $school = School::find($id);
        $school->fill($request->all());
        $school->save();
        return $school;
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
        School::destroy($id);
        return response()->json([
          'success' => true
        ]);
    }

    public function search(Request $request){
      $schools = School::where('name',$request->name)
      ->orWhere('min_gpa', '>=', $request->min_gpa)
      ->orWhere('gpa_needed_for_team', '>=', $request->gpa_needed_for_team)
      ->orWhere('min_gpa_transfer', '>=', $request->min_gpa_transfer)->get();
      return response()->json([
        'data' => $schools
      ]);
    }
}
