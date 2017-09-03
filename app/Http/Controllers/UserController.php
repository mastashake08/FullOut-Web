<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
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
          return \App\User::with(['skillSet','favorited'])->paginate(10);
        }
        else{
            return view('student.all');
        }

    }

    /**
     * Search for cheerleaders
     *
     * @return \App\User
     */
     public function search(Request $request)
     {
         //
         if($request->expectsJson()){
           $conditions = [
              ['type','=','student'],
               ['name', '=', $request->has('name') ? $request->name : '*'],
              ['city', '=', $request->has('city') ? $request->city : '*'],
              ['state','=',$request->has('state') ? $request->state : '*'],
               ['gpa','>=',$request->has('highest_gpa')? $request->highest_gpa : 0.00]
          ];
          return \App\User::with(['skillSet','favorited'])->when($request->name != "" && $request->has('name'), function ($query) use ($request) {
                    return $query->where('name',$request->name);
                  })
                  ->when($request->highest_gpa != "" && $request->has('highest_gpa'), function ($query) use ($request) {
                          return $query->where('gpa','>=',$request->highest_gpa);
                      })
                  ->when($request->zip != "" && $request->has('zip'), function ($query) use ($request) {

                              return $query->where('zip','=',$request->zip)
                                           ;
                          })
                          ->when($request->city != "" && $request->has('city'), function ($query) use ($request) {

                                      return $query->where('city','=',$request->city)
                                                   ;
                                  })
                                  ->when($request->state != "" && $request->has('state'), function ($query) use ($request) {

                                              return $query->where('state','=',$request->state);
                                                           ;
                                          })
                                          ->when($request->gender != "" && $request->has('gender'), function ($query) use ($request) {
                                                      if($request->gender === '*'){
                                                        return $query->where('gender','female')->orWhere('gender','male');
                                                      }
                                                      return $query->where('gender','=',$request->gender);
                                                  })
                                                  ->when($request->has('highest_skill_score') && $request->highest_skill_score != "", function($query) use ($request){
                                                    //return $query->where("(skills.spring_stunting_score + skills.spring_tumbling_score + skills.hard_stunting_score + skills.hard_tumbling_score + skills.group_stunting_score + skills.coed_stunting_score) >= {$request->highest_skill_score}");
                                                    return $query->join('skills','users.id','=','skills.id')->raw('SUM(skills.spring_stunting_score) + SUM(skills.spring_tumbling_score) + SUM(skills.hard_stunting_score) + SUM(skills.hard_tumbling_score) + SUM(skills.group_stunting_score) + SUM(skills.coed_stunting_score)','>=',$request->highest_skill_score);
                                                  })
                                                  ->when($request->has('highest_stunting_score') && $request->highest_stunting_score != "", function($query) use ($request){
                                                    //return $query->where("(skills.spring_stunting_score + skills.spring_tumbling_score + skills.hard_stunting_score + skills.hard_tumbling_score + skills.group_stunting_score + skills.coed_stunting_score) >= {$request->highest_skill_score}");
                                                    return $query->join('skills','users.id','=','skills.id')->raw('SUM(skills.spring_stunting_score)  SUM(skills.hard_stunting_score) + SUM(skills.group_stunting_score) + SUM(skills.coed_stunting_score)','>=',$request->highest_stunting_score);
                                                  })
                                                  ->when($request->has('highest_tumbling_score') && $request->highest_tumbling_score != "", function($query) use ($request){

                                                    //return $query->where("(skills.spring_stunting_score + skills.spring_tumbling_score + skills.hard_stunting_score + skills.hard_tumbling_score + skills.group_stunting_score + skills.coed_stunting_score) >= {$request->highest_skill_score}");
                                                    return $query->whereRaw('(skills.spring_tumbling_score + skills.hard_tumbling_score) >= '.$request->highest_tumbling_score);
                                                  })->paginate(10);
         }
         else{
             return view('student.all');
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
        //
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
        $user = User::findOrFail($id)->with('skills');
        $with = [
          'user' => $user
        ];
        return view('user.individual')->with($with);
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

    public function updatePrices(Request $request){
      $user = $request->user();
      $user->tumbling_price = $request->tumbling_price;
      $user->stunting_price = $request->stunting_price;
      $user->city = $request->city;
      $user->state = $request->state;
      $user->zip = $request->zip;
      $user->save();
      return response()->json([
        'success' => true
      ]);
    }
}
