<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        //
//        if($request->user()->can('create', \App\School::class)){
//          return view('school.create');
//        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();

        if($request->user()->can('create', \App\School::class)){
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'office_phone' => 'required',
            'cell_phone' => 'required',
            'office_address' => 'required',
            'dob' => 'required',
            'in_state_tuition' => 'required',
            'out_state_tuition' => 'required',
            'website' => 'required',
            'min_gpa' => 'required',
            'min_gpa_transfer' => 'required',
            'gpa_needed_for_team' => 'required',
            'act_score' => 'required',
            'sat_score' => 'required',
            'number_hours' => 'required',
            'other_testing' => 'required',
            'popular_scholarship_outside_program' => 'required',
            'logo' => 'image|mimes:jpg,png,jpeg,JPG,JPEG,PNG',
          ]);

          $school = School::firstOrNew(['user_id' => $request->user()->id]);

            if($request->hasFile('logo')) {

                if($user->school){
                    $old_pic_name = $user->school->logo;
                    $path = public_path('images\school-logo\\' . $old_pic_name);
                    if($old_pic_name) {
                        unlink($path);
                    };
                }


                $picture_name = $request->logo->getClientOriginalName();
                $request->file('logo')->storeAs('images/school-logo', $picture_name);

                $school->fill([
                    'logo' => $picture_name,
                ]);

            }
            $school->fill([
                'name' => $request->name,
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
                'sat_score' => $request->sat_score,
                'dob' => $request->dob,
                'number_hours' => $request->number_hours,
                'other_testing' => $request->other_testing,
                'popular_scholarship_outside_program' => $request->popular_scholarship_outside_program,
                'offer_scholarship' => $request->offer_scholarship,
                'scholarship_text' => $request->scholarship_text,
            ]);

          $school->save();
            $user->update([
                'school_id' => $school->id
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
        $school = School::find($id);

        if(auth()->user()->can('update',$school)){
        $school->fill($request->all());
        if($request->hasFile('logo')){
          $path = $request->logo->store('public');
          $school->logo = Storage::url($path);
        }
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

    public function search(Request $request)
    {
        $data = $request->all();
        $schools = School::select();

//      ->orWhere('min_gpa', '>=', $request->min_gpa)
//      ->orWhere('act_score','>=', $request->act)
//      ->orWhere('sat_score', '>=', $request->sat)
      //->orWhere('gpa_needed_for_team', '>=', $request->gpa_needed_for_team)
      //->orWhere('min_gpa_transfer', '>=', $request->min_gpa_transfer)
//      ->paginate(10);


        if($data['name'] != '' ) {
            $schools->where('name', 'LIKE', '%'.$data['name'].'%');
        }
        if($data['min_gpa'] != '') {
            $schools->orWhere('min_gpa','>=', $data['min_gpa']);
        }
        if($data['act'] != '') {
            $schools->orWhere('act_score','>=', $data['act']);
        }
        if($data['sat'] != '') {
            $schools->orWhere('sat_score','>=', $data['sat']);
        }
        if(isset($data['tuition_cost'])  && !empty($data['tuition_cost'])) {
            $schools->orderBy('in_state_tuition','ASC');
        }

        if(isset($data['perfect_fit'])  && !empty($data['perfect_fit'])) {
            if ($data['perfect_fit'] == 'act'){
                $schools->orderBy('act_score','DESC');
            }
            elseif ($data['perfect_fit'] == 'sat') {
                $schools->orderBy('sat_score','DESC');
            }
            else {
                $schools->orderBy('gpa_needed_for_team','DESC');
            }

        }

        if(isset($data['skills']) && !empty($data['skills'])) {
            $schools_collection =  collect([]);
            $schools->with('teams.skillSet');

            foreach ($schools->get() as $school) {
                $teams = $school->teams;
                $team_total_skills = [];
                foreach ($teams as $team) {
                    $skill = $team->skillSet;
                    $team_total_skills[] = $skill['spring_floor_tumbling_skills'] + $skill['hard_floor_tumbling_skills'] + $skill['group_stunting_skills'] + $skill['coed_stunting_skills'];
                }

                $school['total_skills'] = array_sum($team_total_skills);
                $schools_collection[] = $school;
            }

            if ($data['skills'] == 'highest-to-lowest') {
                $schools = $schools_collection->sortByDesc('total_skills');
            }
            else {
                $schools = $schools_collection->sortBy('total_skills');
            }
        }

//        if(isset($data['most_scholarship']) && !empty($data['most_scholarship'])) {
//
//            $schools_collection =  collect([]);
//
//            foreach ($schools->get() as $school) {
//                $school['total_amount'] = $school->scholarships->sum('amount');
//                $schools_collection[] = $school;
//            }
//
//            $schools = $schools_collection->sortByDesc('total_amount');
//        }

        if (isset($data['skills']) && !empty($data['skills'])) {
            $schools = $schools->toArray();
        }
        else {
            $schools = $schools->get()->toArray();
        }

        // Get the ?page=1 from the url
        $page = Input::get('page', 1);
        // Number of items per page
        $perPage = 10;
        $offset = ($page * $perPage) - $perPage;

        $schools = new LengthAwarePaginator(
            array_slice($schools, $offset, $perPage, true), // Only grab the items we need
            count($schools), // Total items
            $perPage, // Items per page
            $page, // Current page
            ['path' => $request->url(), 'query' => $request->query()] // We need this so we can keep all old query parameters from the url
        );

      $with = [
        'schools' => $schools,
          'data'  => $data
      ];
      return view('school.all')->with($with);
    }
}
