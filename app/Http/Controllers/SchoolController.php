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
        $school = auth()->user()->school;
        $with = [
          'school' => $school
        ];
        return view('school.all');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if($request->user()->can('create', \App\School::class)){
          return view('school.create');
        }
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
        if($request->user()->can('create', \App\School::class)){
          $this->validate($request->all(),[
            'name' => 'required|unique:schools,',
            'description' => 'required',
            'office_phone' => 'required',
            'cell_phone' => 'required',
            'office_address' => 'required',
            'in_state_tuition' => 'required',
            'out_state_tuition' => 'required',
            'website' => 'required',
            'min_gpa' => 'required',
            'min_gpa_transfer' => 'required',
            'gpa_needed_for_team' => 'required',
            'act_score' => 'required',
            'sat_score' => 'required'
          ]);
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
        $with = [
          'school' => $school,
        ];
        if(auth()->user()->can('update',$school)){
          return view('school.edit')->with($with);
        }

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
        if(auth()->user()->can('update',$school)){
        $school->fill($request->all());
        $school->save();
        return back();
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
        $school = School::destroy($id);
        if(auth()->user()->can('delete',$school)){

          return response()->json([
            'success' => true
          ]);
        }

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
