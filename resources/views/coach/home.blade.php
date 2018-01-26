@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="form" action="{{url('/cheerleader/update-profile-coach')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a data-toggle="collapse" href="#main-info-coach">Main Information</a></div>
                    <div id="main-info-coach" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-md-12 mb-2">
                                <a href="{{url('/cheerleader/'.auth()->user()->id)}}" class="btn btn-primary">View your public profile</a>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input type="text" class="form-control" placeholder="Email Address" name="email" required value="{{auth()->user()->email}}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Program Name</span>
                                    <input type="text" class="form-control" placeholder="Program Name" name="program_name" required value="{{ (auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->program_name : "" )}}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required value="{{auth()->user()->name}}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Coaching Title</span>
                                    <input type="text" class="form-control" placeholder="Coaching Title" name="coaching_title" required value="{{(auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->coaching_title : "" )}}">
                                </div>
                            </div>

                            <div class="col-xs-12"><h2>Team 1</h2></div>

                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Are There Any Financial Requirements? If so, explain</span>
                                    <textarea class="form-control" name="financial_requirements">{{ (auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->financial_requirements : "" ) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">Click if information is the same for all teams</span>
                                    <span class="form-control"> <input type="checkbox" class="" name="same_information" value="yes" @if(auth()->user()->mainInformationCoach && auth()->user()->mainInformationCoach->same_information == 'yes') checked @endif></span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Tuition Cost In State</span>
                                    <input type="text" class="form-control" placeholder="" name="tuition_cost_in" required value="{{(auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->tuition_cost_in : "" )}}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Tuition Cost Out Of State</span>
                                    <input type="text" class="form-control" placeholder="" name="tuition_cost_out" required value="{{(auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->tuition_cost_out : "" )}}">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Brief description of cheer program</span>
                                    <textarea class="form-control" name="description_program">{{ (auth()->user()->mainInformationCoach ? auth()->user()->mainInformationCoach->description_program : "" ) }}</textarea>
                                </div>
                            </div>

                            {{--<div class="form-group col-md-12">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon">Clinic dates</span>--}}
                                    {{--<input type="date" class="form-control" placeholder="" name="clinic_dates " required value="{{auth()->user()->clinic_dates}}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a data-toggle="collapse" href="#manage-school">Manage School</a></div>
                <div id="manage-school" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="form" role="form" action="{{url('/coach/schools')}}" method="post" enctype="multipart/form-data">
                        {!!csrf_field()!!}
                        @if(auth()->user()->school != null)

                            <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Upload school logo</span>
                                        <img id="school_logo_img" src="{{ asset('images/school-logo/'.(auth()->user()->school->logo ? auth()->user()->school->logo : "")) }}" alt=""/>
                                        <input id="school_logo_pic" type="file" class="form-control w-75" name="logo">
                                    </div>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">School / Gym Name</span>
                                    <input type="text" class="form-control" placeholder="School / Gym Name" name="name" required value="{{(auth()->user()->school->name ? auth()->user()->school->name : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Office Phone</span>
                                    <input type="text" class="form-control" placeholder="" name="office_phone" required value="{{(auth()->user()->school->office_phone ? auth()->user()->school->office_phone : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Cell  Phone</span>
                                    <input type="text" class="form-control" placeholder="Cell Number" name="cell_phone" required value="{{(auth()->user()->school->cell_phone ? auth()->user()->school->cell_phone : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Office Address</span>
                                    <input type="text" class="form-control" placeholder="Office Address" name="office_address" required value="{{(auth()->user()->school->office_address ? auth()->user()->school->office_address : "")}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">In State Tuition</span>
                                    <input type="text" class="form-control" placeholder="" name="in_state_tuition" required value="{{(auth()->user()->school->in_state_tuition ? auth()->user()->school->in_state_tuition : "")}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Out Of State Tuition</span>
                                    <input type="text" class="form-control" placeholder="" name="out_state_tuition" required value="{{(auth()->user()->school->out_state_tuition ? auth()->user()->school->out_state_tuition : "")}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">D.O.B.</span>
                                    <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{(auth()->user()->school->dob ? auth()->user()->school->dob : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>

                            <div class="col-xs-12"><h2>Academic Requirement</h2></div>

                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirement to get in the school/gym</span>
                                    <input type="text" class="form-control" placeholder="" name="min_gpa" required value="{{(auth()->user()->school->min_gpa ? auth()->user()->school->min_gpa : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirement to stay on the team</span>
                                    <input type="text" class="form-control" placeholder="" name="gpa_needed_for_team" required value="{{(auth()->user()->school->gpa_needed_for_team ? auth()->user()->school->gpa_needed_for_team : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirements for Transfers</span>
                                    <input type="text" class="form-control" placeholder="GPA Requirements for Transfers" name="min_gpa_transfer" required value="{{(auth()->user()->school->min_gpa_transfer ? auth()->user()->school->min_gpa_transfer : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">ACT Score Requirement</span>
                                    <input type="text" class="form-control" placeholder="" name="act_score" required value="{{(auth()->user()->school->act_score ? auth()->user()->school->act_score : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">SAT Score Requirement</span>
                                    <input type="text" class="form-control" placeholder="" name="sat_score" required value="{{(auth()->user()->school->sat_score ? auth()->user()->school->sat_score : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Do you offer Scholarship?</span>
                                    <label for="scholarship_text" class="form-control overflow-hidden">
                                        <label for="scholarship">If yes, Check here</label>
                                        <input id="scholarship" type="checkbox" class="" name="offer_scholarship" value="yes" @if(auth()->user()->school && auth()->user()->school->offer_scholarship == 'yes') checked @endif>
                                        And explain with detail
                                    </label>
                                    <textarea id="scholarship_text" class="form-control" name="scholarship_text">{{ (auth()->user()->school ? auth()->user()->school->scholarship_text : "" ) }}</textarea>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Number of hours that must be taken every semester to stay on the team</span>
                                    <input type="number" class="form-control" placeholder="Number" name="number_hours" required value="{{(auth()->user()->school->number_hours ? auth()->user()->school->number_hours : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Other Testing</span>
                                    <input type="text" class="form-control" placeholder="Other Testing" name="other_testing" required value="{{(auth()->user()->school->other_testing ? auth()->user()->school->other_testing : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Brief description of School</span>
                                    <textarea class="form-control" name="description">{{(auth()->user()->school->description ? auth()->user()->school->description : "")}}</textarea>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Popular Scholarship of your team or school that is given outside your program</span>
                                    <input type="text" class="form-control" placeholder="" name="popular_scholarship_outside_program" required value="{{(auth()->user()->school->popular_scholarship_outside_program ? auth()->user()->school->popular_scholarship_outside_program : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Link to website</span>
                                    <input type="text" class="form-control" placeholder="" name="website" required value="{{(auth()->user()->school->website ? auth()->user()->school->website : "")}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                        @else
                            <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                <div class="col-md-12 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Upload school logo</span>
                                        <img id="school_logo_img" src="" alt=""/>
                                        <input id="school_logo_pic" type="file" class="form-control w-75" name="logo">
                                    </div>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">School / Gym Name</span>
                                    <input type="text" class="form-control" placeholder="School / Gym Name" name="name" required value="{{old('name')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Office Phone</span>
                                    <input type="text" class="form-control" placeholder="" name="office_phone" required value="{{old('office_phone')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Cell  Phone</span>
                                    <input type="text" class="form-control" placeholder="Cell Number" name="cell_phone" required value="{{old('cell_phone')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Office Address</span>
                                    <input type="text" class="form-control" placeholder="Office Address" name="office_address" required value="{{old('office_address')}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">In State Tuition</span>
                                    <input type="text" class="form-control" placeholder="" name="in_state_tuition" required value="{{old('in_state_tuition')}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Out Of State Tuition</span>
                                    <input type="text" class="form-control" placeholder="" name="out_state_tuition" required value="{{old('out_state_tuition')}}" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">D.O.B.</span>
                                    <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{old('dob')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>

                            <div class="col-xs-12"><h2>Academic Requirement</h2></div>

                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirement to get in the school/gym</span>
                                    <input type="text" class="form-control" placeholder="" name="min_gpa" required value="{{old('min_gpa')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirement to stay on the team</span>
                                    <input type="text" class="form-control" placeholder="" name="gpa_needed_for_team" required value="{{old('gpa_needed_for_team')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">GPA Requirements for Transfers</span>
                                    <input type="text" class="form-control" placeholder="GPA Requirements for Transfers" name="min_gpa_transfer" required value="{{old('min_gpa_transfer')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">ACT Score Requirement</span>
                                    <input type="text" class="form-control" placeholder="" name="act_score" required value="{{old('act_score')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">SAT Score Requirement</span>
                                    <input type="text" class="form-control" placeholder="" name="sat_score" required value="{{old('sat_score')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Do you offer Scholarship?</span>
                                    <label for="scholarship_text" class="form-control overflow-hidden">
                                        <label for="scholarship">If yes, Check here</label>
                                        <input id="scholarship" type="checkbox" class="" name="offer_scholarship" value="yes">
                                        And explain with detail
                                    </label>
                                    <textarea id="scholarship_text" class="form-control" name="scholarship_text">{{old('scholarship_text')}}</textarea>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="team_wins d-block w-100">Team Wins</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="wins_uca">Wins UCA</label>
                                            <input type="number" id="wins_uca" class="w-25" placeholder="" name="wins_uca" required value="{{old('wins_uca')}}">
                                            @if ($errors->has('number_members'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('wins_uca') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="wins_nca">Wins NCA</label>
                                            <input type="number" id="wins_nca" class="w-25" placeholder="" name="wins_nca" required value="{{old('wins_nca')}}">
                                            @if ($errors->has('number_members'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('wins_nca') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="wins_worlds">Wins Worlds</label>
                                            <input type="number" id="wins_worlds" class="w-25" placeholder="" name="wins_worlds" required value="{{old('wins_worlds')}}">
                                            @if ($errors->has('number_members'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('wins_worlds') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="wins_other">Other Wins</label>
                                            <input type="number" id="wins_other" class="w-25" placeholder="" name="wins_other" required value="{{old('wins_other')}}">
                                            @if ($errors->has('number_members'))
                                                <span class="help-block">
                                                 <strong>{{ $errors->first('wins_other') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Number of hours that must be taken every semester to stay on the team</span>
                                    <input type="number" class="form-control" placeholder="Number" name="number_hours" required value="{{old('number_hours')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Other Testing</span>
                                    <input type="text" class="form-control" placeholder="Other Testing" name="other_testing" required value="{{old('other_testing')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Brief description of School</span>
                                    <textarea class="form-control" name="description">{{old('description')}}</textarea>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Popular Scholarship of your team or school that is given outside your program</span>
                                    <input type="text" class="form-control" placeholder="" name="popular_scholarship_outside_program" required value="{{old('popular_scholarship_outside_program')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Link to website</span>
                                    <input type="text" class="form-control" placeholder="" name="website" required value="{{old('website')}}">
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('logo') }}</strong>
                                  </span>
                                @endif
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Update School</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<favorites></favorites>
@endsection
