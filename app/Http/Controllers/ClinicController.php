<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Clinic;
use Calendar;
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
        $user = auth()->user();
        $teams = Team::where([['coach_name', $user->name],['school_id', $user->school_id]])->get();
        $coaches = User::where([['type', 'coach'],['school_id', $user->school_id]])->get();


        $with = [
            'teams' => $teams,
            'coaches' => $coaches
        ];

        if ($user->can('create', Clinic::class)) {
            $clinics = $user->school->clinics()->paginate(10);
            $with['clinics'] = $clinics;

        } else {
            $data = auth()->user()->favorites()->pluck('team_id')->toArray();
            $clinics = Clinic::whereIn('team_id', $data)->with('team')->paginate(10);

            $events = [];
            if ($clinics->count()) {
                foreach ($clinics as $key => $value) {
                    $events[] = Calendar::event(
                        $value->team->team_name . ",\n" . $value->name,
                        true,
                        new \DateTime($value->start_datetime),
                        new \DateTime($value->end_datetime . ' +1 day')
                    );
                }
            }
            $calendar = Calendar::addEvents($events);
            $with['clinics'] = $clinics;
            $with['calendar'] = $calendar;
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
            'team_id' => 'required',
            'name' => 'required',
            'coach_name' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'skills_needed' => 'required',
            'skills_taught' => 'required',
            'fee' => 'required'
          ]);
          $clinic = Clinic::create([
            'school_id' => $request->user()->school->id,
            'team_id' => $request->team_id,
            'name' => $request->name,
            'coach_name' => $request->coach_name,
            'start_datetime' => Carbon::parse($request->start_datetime),
            'end_datetime' => Carbon::parse($request->end_datetime),
            'phone' => $request->phone,
            'address' => $request->phone,
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
        return Clinic::findOrFail($id);
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
        $clinic = Clinic::findOrFail($id);
        $user = auth()->user();
        $teams = Team::where([['coach_name', $user->name],['school_id', $user->school_id]])->get();
        $coaches = User::where([['type', 'coach'],['school_id', $user->school_id]])->get();

        $with = [
          'clinic' => $clinic,
          'teams' => $teams,
          'coaches' => $coaches
        ];
        return view('clinic.edit')->with($with);
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
        $clinic = Clinic::findOrFail($id);
        if($clinic){
            $this->validate($request, [
                'team_id' => 'required',
                'name' => 'required',
                'coach_name' => 'required',
                'start_datetime' => 'required',
                'end_datetime' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'skills_needed' => 'required',
                'skills_taught' => 'required',
                'fee' => 'required'
            ]);
            $clinic->fill([
                'school_id' => $request->user()->school->id,
                'team_id' => $request->team_id,
                'name' => $request->name,
                'coach_name' => $request->coach_name,
                'start_datetime' => Carbon::parse($request->start_datetime),
                'end_datetime' => Carbon::parse($request->end_datetime),
                'phone' => $request->phone,
                'address' => $request->phone,
                'skills_needed' => $request->skills_needed,
                'skills_taught' => $request->skills_taught,
                'fee' => $request->fee
            ]);
            $clinic->save();

            return redirect('coach/clinics-tryouts');
        };
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

    public function search(Request $request){
      $clinics = Clinic::where('name','LIKE', '%'.$request->name.'%')
      ->paginate(10);
      $with = [
        'clinics' => $clinics
      ];
      return view('clinic.all')->with($with);
    }

//    public function getEvents()
//    {
//        $events = [];
//        $data = Clinic::all();
//        if($data->count()){
//            foreach ($data as $key => $value) {
//                $events[] = Calendar::event(
//                    $value->title,
//                    true,
//                    new \DateTime($value->start_date),
//                    new \DateTime($value->end_date.' +1 day')
//                );
//            }
//        }
//        $calendar = Calendar::addEvents($events);
//        return view('mycalender', compact('calendar'));
//    }
}
