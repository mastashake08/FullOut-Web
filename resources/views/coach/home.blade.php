@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <form class="form" action="{{url('/cheerleader/update-profile')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a data-toggle="collapse" href="#main-info-coach">Main Information</a></div>
                        <div id="main-info-coach" class="panel-collapse collapse">
                            <div class="panel-body">

                                {{--<div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">--}}
                                    {{--<a href="{{url('/cheerleader/'.auth()->user()->id)}}">View Public Profile</a>--}}

                                    {{--<div class="col-md-12 mb-2">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon">Profile Pic</span>--}}
                                            {{--<img id="profile_img" src="{{ asset('images/profile-pics/'.auth()->user()->profile_pic) }}" alt=""/>--}}
                                            {{--<input id="profile_pic" type="file" class="form-control w-75" name="profile_pic">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--@if ($errors->has('profile_pic'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('profile_pic') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Email</span>
                                        <input type="text" class="form-control" placeholder="Email Address" name="email" required value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Program Name</span>
                                        <input type="text" class="form-control" placeholder="Program Name" name="program_name" required value="{{auth()->user()->program_name}}">
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
                                        <input type="text" class="form-control" placeholder="Coaching Title" name="coaching_title" required value="{{auth()->user()->coaching_title}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Office Number</span>
                                        <input type="text" class="form-control" placeholder="Office Number" name="office_number" required value="{{auth()->user()->office_number}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Cell  Number</span>
                                        <input type="text" class="form-control" placeholder="Cell  Number" name="cell_number" required value="{{auth()->user()->cell_number}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Office Address</span>
                                        <input type="text" class="form-control" placeholder="Office Address" name="office_address" required value="{{auth()->user()->office_address}}" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">D.O.B.</span>
                                        <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{auth()->user()->dob}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">School / Gym Name</span>
                                        <input type="text" class="form-control" placeholder="School / Gym Name" name="school_gym_name" required value="{{auth()->user()->school_gym_name}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">GPA Requirement to stay on the team</span>
                                        <input type="text" class="form-control" placeholder="GPA Requirement to stay on the team" name="gpa_requirement_team" required value="{{auth()->user()->gpa_requirement_team}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">GPA Requirements for Transfers</span>
                                        <input type="text" class="form-control" placeholder="GPA Requirements for Transfers" name="gpa_requirement_transfer" required value="{{auth()->user()->gpa_requirement_transfer}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">ACT Score Requirement</span>
                                        <input type="text" class="form-control" placeholder="ACT Score Requirement" name="act_score_requirement" required value="{{auth()->user()->act_score_requirement}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">SAT Score Requirement</span>
                                        <input type="text" class="form-control" placeholder="SAT Score Requirement" name="sat_score_requirement" required value="{{auth()->user()->sat_score_requirement}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Number of hours that must be taken every semester to stay on the team</span>
                                        <input type="number" class="form-control" placeholder="Number" name="number_hours" required value="{{auth()->user()->number_hours}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Other Testing</span>
                                        <input type="text" class="form-control" placeholder="Other Testing" name="other_testing" required value="{{auth()->user()->other_testing}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Team Name</span>
                                        <div class="form-control">
                                            <div class="row">
                                                <div class="form-group col-xs-4">
                                                    <label for="gender-male">All Girl</label>
                                                    <input id="gender-male" type="radio" class="" name="team_name" required value="all_girl " @if(auth()->user()->team_name == 'all_girl') checked @endif>
                                                </div>
                                                <div class="form-group col-xs-4">
                                                    <label for="gender-female">Co-ed</label>
                                                    <input id="gender-female" type="radio" class="" name="team_name" required value="Co_ed" @if(auth()->user()->team_name == 'Co_ed') checked @endif>
                                                </div>
                                                <div class="form-group col-xs-4">
                                                    <label for="gender-both">Both</label>
                                                    <input id="gender-both" type="radio" class="" name="team_name" required value="both" @if(auth()->user()->team_name == 'both') checked @endif>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">Click if information is the same for all teams</span>
                                        <input type="checkbox" class="form-control" name="same_information" required value="yes">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Team Responsibilities</span>
                                        <input type="text" class="form-control" placeholder="Team Responsibilities" name="team_responsibilities" required value="{{auth()->user()->team_responsibilities}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Number of Team Members</span>
                                        <input type="text" class="form-control" placeholder="Number of Team Members" name="number_members" required value="{{auth()->user()->number_members}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Average Room and Board</span>
                                        <input type="text" class="form-control" placeholder="" name="average_room" required value="{{auth()->user()->average_room}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Do you offer Scholarship?</span>
                                        <label for="scholarship_text" class="form-control overflow-hidden">
                                            <label for="scholarship">If yes, Check here</label>
                                            <input id="scholarship" type="checkbox" class="" name="team_name" required value="all_girl " @if(auth()->user()->team_name == 'all_girl') checked @endif>
                                            And explain with detail
                                        </label>
                                        <textarea id="scholarship_text" class="form-control" name="scholarship_text">{{auth()->user()->scholarship_text}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tuition cost</span>
                                        <div class="form-control">
                                            <div class="row">
                                                <div class="form-group col-xs-6 col-md-5">
                                                    <label for="tuition-cost-in">In State</label>
                                                    <input id="tuition-cost-in" type="radio" class="" name="tuition_cost" required value="tuition-cost-in" @if(auth()->user()->tuition_cost == 'tuition-cost-in') checked @endif>
                                                </div>
                                                <div class="form-group col-xs-6 col-md-7">
                                                    <label for="tuition-cost-out">Out of State, </label>
                                                    <input id="tuition-cost-out" type="radio" class="" name="tuition_cost" required value="tuition-cost-out" @if(auth()->user()->tuition_cost == 'tuition-cost-out') checked @endif>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Brief description of cheer program</span>
                                        <textarea class="form-control" name="description_program">{{auth()->user()->description_program}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Are There Any Financial Requirements? If so, explain</span>
                                        <textarea class="form-control" name="financial_requirements">{{auth()->user()->financial_requirements}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Brief description of School</span>
                                        <textarea class="form-control" name="description_school">{{auth()->user()->description_school}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Popular Scholarship of your team or school that is given outside your program</span>
                                        <input type="text" class="form-control" placeholder="" name="popular_scholarship_outside_program" required value="{{auth()->user()->popular_scholarship_outside_program}}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('school_logo') ? ' has-error' : '' }}">
                                    <div class="col-md-12 mb-2">
                                        <div class="input-group">
                                            <span class="input-group-addon">Upload school logo</span>
                                            <img id="school_logo_img" src="{{ asset('images/school_logo/'.auth()->user()->school_logo) }}" alt=""/>
                                            <input id="school_logo_pic" type="file" class="form-control w-75" name="school_logo">
                                        </div>
                                    </div>
                                    @if ($errors->has('school_logo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school_logo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Link to website</span>
                                        <input type="text" class="form-control" placeholder="" name="website_link" required value="{{auth()->user()->website_link}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Clinic dates</span>
                                        <input type="date" class="form-control" placeholder="" name="clinic_dates " required value="{{auth()->user()->clinic_dates}}">
                                    </div>
                                </div>
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
              <div class="panel-heading">Manage School</div>

              <div class="panel-body">
                @if(auth()->user()->school != null)
                View your public profile <a href="{{url('/cheerleader/schools/'.auth()->user()->school->id)}}">here</a>
                @else
                Add a <a href="{{url('/coach/schools')}}">school</a>.
                @endif
              </div>
          </div>
      </div>
  </div>
</div>
<favorites></favorites>
@endsection
