<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;
class ClinicController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(auth()->user()->can('create',Clinic::class)){
          $clinics = auth()->user()->school->clinics;
          $with = [
            'clinics' => $clinics
          ];

        }
        else{
          $clinics = Clinic::all();
          $with = [
            'clinics' => $clinics
          ];
        }
          return view('clinic.all')->with($with);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()->can('create',Clinic::class)){
          return view('clinic.create');
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
        if($request->user()->can('create',Clinic::class)){
          $this->validate($request, [
            'name' => 'required',
            'coach_name' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
            'phone' => 'required',
            'skills_needed' => 'required',
            'skills_taught' => 'required',
            'fee' => 'required'
          ]);
          $clinic = Clinic::create([
            'school_id' => $request->user()->school->id,
            'name' => $request->name,
            'coach_name' => $request->coach_name,
            'start_datetime' => \Carbon\Carbon::parse($request->start_datetime),
            'end_datetime' => \Carbon\Carbon::parse($request->end_datetime),
            'phone' => $request->phone,
            'skills_needed' => $request->skills_needed,
            'skills_taught' => $request->skills_taught,
            'fee' => $request->fee
          ]);
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
    }
}
