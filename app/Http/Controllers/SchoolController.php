<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use Illuminate\Support\Facades\Storage;
class SchoolController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->expectsJson()){
          $with = [
            'schools' => School::paginate(10)
          ];
          return response()->json($with);
        }
        if(auth()->user()->cant('create',School::class)){
          $with = [
            'schools' => School::paginate(10)
          ];
          return view('school.all')->with($with);
        }
        else{
          return view('school.all');
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
        //dd($request->all());
        if($request->user()->can('create', \App\School::class)){
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'office_phone' => 'required',
            'cell_phone' => 'required',
            'address' => 'required',
            'in_state_tuition' => 'required',
            'out_state_tuition' => 'required',
            'website' => 'required',
            'min_gpa' => 'required',
            'min_gpa_transfer' => 'required',
            'gpa_needed_for_team' => 'required',
            'act_score' => 'required',
            'sat_score' => 'required',
            'logo' => 'file',
          ]);
          $school = School::firstOrNew(['user_id' => $request->user()->id]);

          if($request->hasFile('logo')){
            $path = $request->file('logo')->store('public/logos');

            $school->fill([
              'name' => $request->name,
              'logo' => Storage::url($path),
              'description' => $request->description,
              'office_phone' => $request->office_phone,
              'cell_phone' => $request->cell_phone,
              'office_address' => $request->address,
              'in_state_tuition' => $request->in_state_tuition,
              'out_state_tuition' => $request->out_state_tuition,
              'website' => $request->website,
              'min_gpa' => $request->min_gpa,
              'min_gpa_transfer' => $request->min_gpa_transfer,
              'gpa_needed_for_team' => $request->gpa_needed_for_team,
              'act_score' => $request->act_score,
              'sat_score' => $request->sat_score
            ]);


          }
          else{
            $school->fill([
              'name' => $request->name,
              'description' => $request->description,
              'office_phone' => $request->office_phone,
              'cell_phone' => $request->cell_phone,
              'office_address' => $request->address,
              'in_state_tuition' => $request->in_state_tuition,
              'out_state_tuition' => $request->out_state_tuition,
              'website' => $request->website,
              'min_gpa' => $request->min_gpa,
              'min_gpa_transfer' => $request->min_gpa_transfer,
              'gpa_needed_for_team' => $request->gpa_needed_for_team,
              'act_score' => $request->act_score,
              'sat_score' => $request->sat_score
            ]);
          }
          $school->save();
          return back();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        //
        $school = School::findOrFail($id);
        $with = [
          'school' => $school,
          'clinics' => $school->clinics()->paginate(10),
          'teams' => $school->teams()->paginate(10),
          'tryouts' => $school->tryouts()->paginate(10)
        ];
        if($request->expectsJson()){
          return response()->json($with);
        }
        return view('school.individual')->with($with);
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
      $schools = School::where('name','%LIKE%',$request->name)
      ->orWhere('min_gpa', '>=', $request->min_gpa)
      ->orWhere('act_score','>=', $request->act)
      ->orWhere('sat_score', '>=', $request->sat)
      //->orWhere('gpa_needed_for_team', '>=', $request->gpa_needed_for_team)
      //->orWhere('min_gpa_transfer', '>=', $request->min_gpa_transfer)
      ->paginate(10);
      $with = [
        'schools' => $schools
      ];
      return view('school.all')->with($with);
    }
}
