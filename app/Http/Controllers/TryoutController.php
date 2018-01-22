<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use App\Tryout;
use Calendar;

class TryoutController extends Controller
{
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

        if ($user->can('create', Tryout::class)) {
            $tryouts = $user->school->tryouts()->paginate(10);
            $with['tryouts'] = $tryouts;

        } else {
            $data = $user->favorites()->pluck('team_id')->toArray();
            $tryouts = Tryout::whereIn('team_id', $data)->with('team')->paginate(10);
            $events = [];
            if ($tryouts->count()) {
                foreach ($tryouts as $key => $value) {
                    $events[] = Calendar::event(
                        $value->team->team_name . ",\n" . $value->name,
                        true,
                        new \DateTime($value->start_datetime),
                        new \DateTime($value->end_datetime . ' +1 day')
                    );
                }
            }
            $calendar = Calendar::addEvents($events);

            $with['tryouts'] = $tryouts;
            $with['calendar'] = $calendar;
        }

        return view('tryouts.all')->with($with);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()->can('create',Tryout::class)){
          return redirect()->action('TryoutController@index');
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
        if(auth()->user()->can('create', Tryout::class)){
          $this->validate($request,[
              'team_id' => 'required',
              'name' => 'required',
              'coach_name' => 'required',
              'start_datetime' => 'required',
              'end_datetime' => 'required',
              'phone' => 'required'
          ]);
          auth()->user()->school->tryouts()->create([
            'school_id' => $request->user()->school->id,
            'team_id' => $request->team_id,
            'name' => $request->name,
            'coach_name' => $request->coach_name,
            'start_datetime' => \Carbon\Carbon::parse($request->start_datetime),
            'end_datetime' => \Carbon\Carbon::parse($request->end_datetime),
            'phone' => $request->phone
          ]);
          return back();
        }
        else{
          abort(403);
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
        $tryout = Tryout::findOrFail($id);
        $with = [
            'clinic' => $tryout
        ];
        return view('tryouts.edit')->with($with);
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
