<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tryout;
class TryoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(auth()->user()->can('create', Tryout::class)){
          $tryouts = auth()->user()->school->tryouts()->paginate(10);

        }
        else{
          $tryouts = Tryout::paginate(10);

        }
        $with = [
          'tryouts' => $tryouts
        ];
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
            'name' => 'required',

          ]);
          auth()->user()->school->tryouts()->create([
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
