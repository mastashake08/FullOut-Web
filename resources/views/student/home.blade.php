@extends('layouts.app')

@section('content')
{{--  {{ dd($errors) }}--}}
  <div class="container">
    <div class="row">
      <form class="form" action="{{url('/cheerleader/update-profile-student')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><a data-toggle="collapse" href="#main-info">Main Information</a></div>


            <div id="main-info" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">

                  <a href="{{url('/cheerleader/'.auth()->user()->id)}}" class="btn btn-primary ml-2 mb-2">View Public Profile</a>

                  <div class="col-md-12 mb-2">
                    <div class="input-group">
                      <span class="input-group-addon">Profile Pic</span>
                      <img id="profile_img" src="{{ asset('images/profile-pics/'.auth()->user()->profile_pic) }}" alt=""/>
                      <input id="profile_pic" type="file" class="form-control w-75" name="profile_pic">
                    </div>
                  </div>
                  @if ($errors->has('profile_pic'))
                    <span class="help-block">
                        <strong>{{ $errors->first('profile_pic') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Email</span>
                    <input type="text" class="form-control" placeholder="Email Address" name="email" required value="{{auth()->user()->email}}">
                    @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Full Name</span>
                    <input type="text" class="form-control" placeholder="Full Name" name="name" required value="{{auth()->user()->name}}">
                    @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Gender</span>
                    <div class="form-control">
                      <div class="row">
                        <div class="form-group col-xs-5 col-md-5">
                          <label for="gender-male">Male</label>
                          <input id="gender-male" type="radio" class="" name="gender" required value="male" {{ (isset(auth()->user()->mainInformationStudent->gender) && auth()->user()->mainInformationStudent->gender == 'male' ? 'checked' : '') }}>
                        </div>
                        <div class="form-group col-xs-5 col-md-7">
                          <label for="gender-female">Female</label>
                          <input id="gender-female" type="radio" class="" name="gender" required value="female" {{ (isset(auth()->user()->mainInformationStudent->gender) && auth()->user()->mainInformationStudent->gender == 'female' ? 'checked' : '') }}>
                        </div>
                        @if ($errors->has('gender'))
                          <span class="help-block">
                             <strong>{{ $errors->first('gender') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Phone</span>
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required value="{{ (isset(auth()->user()->mainInformationStudent->phone) ? auth()->user()->mainInformationStudent->phone : '') }}">
                    @if ($errors->has('phone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Address</span>
                    <input type="text" class="form-control" placeholder="Address" name="address" required value="{{ (isset(auth()->user()->mainInformationStudent->address) ? auth()->user()->mainInformationStudent->address : '') }}" aria-describedby="basic-addon1">
                    @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">City</span>
                    <input type="text" class="form-control" placeholder="City" name="city" required value="{{ (isset(auth()->user()->mainInformationStudent->city) ? auth()->user()->mainInformationStudent->city : '') }}">
                    @if ($errors->has('city'))
                       <span class="help-block">
                          <strong>{{ $errors->first('city') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">State</span>
                    <input type="text" class="form-control" placeholder="state" name="state" required value="{{ (isset(auth()->user()->mainInformationStudent->state) ? auth()->user()->mainInformationStudent->state : '') }}">
                    @if ($errors->has('state'))
                      <span class="help-block">
                          <strong>{{ $errors->first('state') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">D.O.B.</span>
                    <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{ (isset(auth()->user()->mainInformationStudent->dob) ? auth()->user()->mainInformationStudent->dob : '') }}">
                    @if ($errors->has('dob'))
                      <span class="help-block">
                          <strong>{{ $errors->first('dob') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">ZIP</span>
                    <input type="text" class="form-control" placeholder="Zip" name="zip" required value="{{ (isset(auth()->user()->mainInformationStudent->zip) ? auth()->user()->mainInformationStudent->zip : '') }}">
                    @if ($errors->has('zip'))
                      <span class="help-block">
                          <strong>{{ $errors->first('zip') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">School Type</span>
                    <input type="text" class="form-control" placeholder="School Type" name="school_type" required value="{{ (isset(auth()->user()->mainInformationStudent->school_type) ? auth()->user()->mainInformationStudent->school_type : '') }}">
                    @if ($errors->has('school_type'))
                      <span class="help-block">
                          <strong>{{ $errors->first('school_type') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current School</span>
                    <input type="text" class="form-control" placeholder="Current School" name="current_school" required value="{{ (isset(auth()->user()->mainInformationStudent->current_school) ? auth()->user()->mainInformationStudent->current_school : '') }}">
                    @if ($errors->has('current_school'))
                      <span class="help-block">
                          <strong>{{ $errors->first('current_school') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current Year</span>
                    <input type="text" class="form-control" placeholder="Current Year" name="current_year" required value="{{ (isset(auth()->user()->mainInformationStudent->current_year) ? auth()->user()->mainInformationStudent->current_year : '') }}">
                    @if ($errors->has('current_year'))
                      <span class="help-block">
                          <strong>{{ $errors->first('current_year') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current GPA</span>
                    <input type="text" class="form-control" placeholder="GPA" name="current_gpa" required value="{{ (isset(auth()->user()->mainInformationStudent->current_gpa) ? auth()->user()->mainInformationStudent->current_gpa : '') }}">
                    @if ($errors->has('current_gpa'))
                      <span class="help-block">
                          <strong>{{ $errors->first('current_gpa') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">ACT Score</span>
                    <input type="text" class="form-control" placeholder="ACT Score" name="act_score" required value="{{ (isset(auth()->user()->mainInformationStudent->act_score) ? auth()->user()->mainInformationStudent->act_score : '') }}">
                    @if ($errors->has('act_score'))
                      <span class="help-block">
                          <strong>{{ $errors->first('act_score') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Highest SAT</span>
                    <input type="text" class="form-control" placeholder="Highest SAT" name="highest_sat" required value="{{ (isset(auth()->user()->mainInformationStudent->highest_sat) ? auth()->user()->mainInformationStudent->highest_sat : '') }}">
                    @if ($errors->has('highest_sat'))
                      <span class="help-block">
                          <strong>{{ $errors->first('highest_sat') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Bio</span>
                    <input class="form-control" type="number" name="bio" value="{{ (isset(auth()->user()->mainInformationStudent->bio) ? auth()->user()->mainInformationStudent->bio : '') }}">
                    @if ($errors->has('bio'))
                      <span class="help-block">
                          <strong>{{ $errors->first('bio') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Weight</span>
                    <input class="form-control" type="number" name="weight" value="{{ (isset(auth()->user()->mainInformationStudent->weight) ? auth()->user()->mainInformationStudent->weight : '') }}">
                    @if ($errors->has('weight'))
                      <span class="help-block">
                          <strong>{{ $errors->first('weight') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Height</span>
                    <input class="form-control" type="number" name="height" value="{{ (isset(auth()->user()->mainInformationStudent->height) ? auth()->user()->mainInformationStudent->height : '') }}">
                    @if ($errors->has('height'))
                      <span class="help-block">
                          <strong>{{ $errors->first('height') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Age</span>
                    <input class="form-control" type="number" name="age" value="{{ (isset(auth()->user()->mainInformationStudent->age) ? auth()->user()->mainInformationStudent->age : '') }}">
                    @if ($errors->has('age'))
                      <span class="help-block">
                          <strong>{{ $errors->first('age') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Current Cheer Program and Timeline</span>
                    <input class="form-control" name="current_program_timeline" value="{{ (isset(auth()->user()->mainInformationStudent->current_program_timeline) ? auth()->user()->mainInformationStudent->current_program_timeline : '') }}">
                    @if ($errors->has('current_program_timeline'))
                      <span class="help-block">
                          <strong>{{ $errors->first('current_program_timeline') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Past Cheer Program and Timeline</span>
                    <input class="form-control" name="past_program_timeline" value="{{ (isset(auth()->user()->mainInformationStudent->past_program_timeline) ? auth()->user()->mainInformationStudent->past_program_timeline : '') }}">
                    @if ($errors->has('past_program_timeline'))
                      <span class="help-block">
                          <strong>{{ $errors->first('past_program_timeline') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Accolades</span>
                    <input class="form-control" name="accolades" value="{{ (isset(auth()->user()->mainInformationStudent->accolades) ? auth()->user()->mainInformationStudent->accolades : '') }}">
                    @if ($errors->has('accolades'))
                      <span class="help-block">
                          <strong>{{ $errors->first('accolades') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Select all that apply <br>Cheer Type</span>
                    <select class="form-control selectpicker " data-allOptionIsSelected="false" multiple="multiple" name="cheertype[]" title="">
                      <option value="girl-flyer" @if (isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('girl-flyer', auth()->user()->mainInformationStudent->cheertype)) selected="selected" @endif>All Girl Flyer</option>
                      <option value="girl-main-base" @if(isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('girl-main-base', auth()->user()->mainInformationStudent->cheertype)) selected @endif>All Girl Main Base</option>
                      <option value="girl-secondary-base" @if(isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('girl-secondary-base', auth()->user()->mainInformationStudent->cheertype)) selected @endif>All Girl SecondaryBase</option>
                      <option value="girl-back-spot" @if(isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('girl-back-spot', auth()->user()->mainInformationStudent->cheertype)) selected @endif>All Girl Back spot</option>
                      <option value="coed-base" @if(isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('coed-base', auth()->user()->mainInformationStudent->cheertype)) selected @endif>CoedBase</option>
                      <option value="coed-flyer" @if(isset(auth()->user()->mainInformationStudent->cheertype) && !empty(auth()->user()->mainInformationStudent->cheertype) && in_array('coed-flyer', auth()->user()->mainInformationStudent->cheertype)) selected @endif>CoedFlyer</option>
                      <option value="All">Mark All</option>
                    </select>
                    @if ($errors->has('cheertype'))
                      <span class="help-block">
                          <strong>{{ $errors->first('cheertype') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Visibility</span>
                    <select class="form-control" name="visibility" title="">
                      <option value="all" {{  (isset(auth()->user()->mainInformationStudent->visibility) && auth()->user()->mainInformationStudent->visibility == 'all' ? 'selected' : '')  }}>All</option>
                      <option value="coach" {{  (isset(auth()->user()->mainInformationStudent->visibility) && auth()->user()->mainInformationStudent->visibility == 'coach' ? 'selected' : '')  }}>Coaches/Gyms</option>
                    </select>
                    @if ($errors->has('visibility'))
                      <span class="help-block">
                          <strong>{{ $errors->first('visibility') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">What Are You Looking For</span>
                    <select class="form-control" name="looking_for" title="">
                      <option value="scholarships" {{ (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'scholarships' ? 'selected' : '') }}>Scholarships</option>
                      <option value="gpa" {{ (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'gpa' ? 'selected' : '') }}>GPA</option>
                      <option value="location" {{ (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'location' ? 'selected' : '') }}>Location</option>
                      <option value="national-championships" {{  (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'national-championships' ? 'selected' : '') }}>National Championships</option>
                      <option value="instate" {{ (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'instate' ? 'selected' : '') }}>Instate</option>
                      <option value="out-of-state" {{ (isset(auth()->user()->mainInformationStudent->looking_for) && auth()->user()->mainInformationStudent->looking_for == 'out-of-state' ? 'selected' : '') }}>Out of State </option>
                    </select>
                    @if ($errors->has('looking_for'))
                      <span class="help-block">
                        <strong>{{ $errors->first('looking_for') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Brief description about you</span>
                    <textarea class="form-control" name="description">{{ (isset(auth()->user()->mainInformationStudent->description) ? auth()->user()->mainInformationStudent->description : '') }}</textarea>
                    @if ($errors->has('description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
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
            <div class="panel-heading"><a data-toggle="collapse" href="#videos">Videos</a></div>
            <div id="videos" class="panel-collapse collapse">
            <div class="panel-body">
              @foreach(auth()->user()->videos as $video)
                <div class="video-content mb-15 d-inline-block">
                  <iframe width="560" height="315" src="{!! $video->embed!!}" frameborder="0" allowfullscreen></iframe>
                  {{--{!! $video->embed!!}--}}
                  {{--<a href="{{ $video->embed }}" onclick="window.open('{{ $video->embed }}','newwindow','width=715,height=500');return false;">https://www.youtube.com/watch?v=3jNlIGDRkvQ</a>--}}
                  <div class="">
                    <button type="button" class="btn btn-primary update">Update</button>
                    <button type="button" class="btn btn-danger delete-btn" data-route="video" data-id="{{ $video->id }}" data-toggle="modal" data-target=".bs-delete-modal-sm">Delete</button>

                    <div class="update-section mt-2 d-none">
                      <form action="{{url('/cheerleader/update-video')}}" method="post">
                        {{csrf_field()}}

                        <textarea name="new_video" class="w-75" placeholder="Youtube Embed Link"></textarea>
                        <input type="hidden" name="video_id" value="{{ $video->id }}">
                        <button type="submit" class="btn btn-success">Save</button>
                      </form>
                    </div>
                  </div>
                </div>

              @endforeach

              <form class="form" action="{{url('/cheerleader/add-video')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon" >Youtube Embed Link</span>
                    <textarea name="embed" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <button class="btn btn-primary" type="submit">Add Video</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a data-toggle="collapse" href="#awards">Awards</a></div>
                <div id="awards" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-style-n font-20">
                  @foreach(auth()->user()->awards as $award)
                      <li class="mtb-5">
                        <span>{{$award->award}}</span>
                        <button type="button" class="btn btn-primary ml-10 update">Update</button>
                        <button type="button" class="btn btn-danger delete-btn" data-route="award" data-id="{{ $award->id }}" data-toggle="modal" data-target=".bs-delete-modal-sm">Delete</button>

                        <div class="update-section mt-2 d-none">
                          <form action="{{url('/cheerleader/update-award')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" placeholder="New award" name="new_award">
                            <input type="hidden" name="award_id" value="{{ $award->id }}">
                            <button type="submit" class="btn btn-success">Save</button>
                          </form>
                        </div>
                      </li>
                  @endforeach
                </ul>
                  <form class="form" action="{{url('/cheerleader/add-award')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group col-md-4">
                      <div class="input-group">
                      <span class="input-group-addon" >Award Name</span>
                      <input name="award" class="form-control">
                    </div>
                  </div>
                    <div class="form-group col-md-4">
                    <button class="btn btn-primary" type="submit">Add Award</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><a data-toggle="collapse" href="#spring">Spring Floor Tumbling  </a><h4 class="d-inline-block ml-2">@if (isset($spring_tumbling_percent)) {{ $spring_tumbling_percent }}@else 0 @endif %</h4></div>
            <div id="spring" class="panel-collapse collapse">
              <div class="panel-body">
                Select the skills your team is looking for, and we will
                curate a list of potential cheerleader candidates for you!
                In addition cheerleaders can not contact you unless they have
                at least 70% of the skills you require.

                <form class="form" method="post" action="{{url('/cheerleader/skills/spring')}}" role="form">
                  {{csrf_field()}}
                    <fieldset class="mb-4">
                      <legend>Basic Running  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['basic_running'])){{ ceil(count($skills['spring_floor_tumbling_skills']['basic_running']) * 100 / 5) }}@else 0 @endif%</span></legend>
                         <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][basic_running][]" id="skills_spring_floor_tumbling_basic_running" title="">
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off" @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Backhand Spring</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="front_walk_over"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Front Walk Over</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off_2_backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 2 Backhand Spring</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off_3_backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 3 Backhand Spring</option>
                           <option value="All">Mark All</option>
                         </select>
                    </fieldset>

                  <fieldset class="mb-4">
                    <legend>Basic Standing  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['basic_standing'])){{ ceil(count($skills['spring_floor_tumbling_skills']['basic_standing']) * 100 / 3) }}@else 0 @endif%</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][basic_standing][]" id="skills_spring_floor_tumbling_basic_standing" title="">
                      <option value="bhs" @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="2_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="3_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Advanced Running  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['advanced_running'])){{ ceil(count($skills['spring_floor_tumbling_skills']['advanced_running']) * 100 / 6) }}@else 0 @endif%</span></legend>

                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][advanced_running][]" id="skills_spring_floor_tumbling_advanced_running" title="">
                      <option value="round_off_tuck" @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck_2_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip_2_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Advanced Standing  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['advanced_standing'])){{ ceil(count($skills['spring_floor_tumbling_skills']['advanced_standing']) * 100 / 8) }}@else 0 @endif%</span></legend>

                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][advanced_standing][]" id="skills_spring_floor_tumbling_advanced_standing" title="">
                      <option value="3_bhs_tuck" @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>3x Backhand Spring, Tuck</option>
                      <option value="2_bhs_tuck"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>2x Backhand Spring, Tuck</option>
                      <option value="bhs_tuck"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Backhand Spring, Tuck</option>
                      <option value="tuck"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('tuck', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Tuck</option>
                      <option value="3_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>3x Backhand Spring, Layout</option>
                      <option value="2_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>2x Backhand Spring, Layout</option>
                      <option value="bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Backhand Spring, Layout</option>
                      <option value="tuck_2_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_standing']) && !empty($skills['spring_floor_tumbling_skills']['advanced_standing']) && in_array('tuck_2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Tuck, 2x Backhand Spring, Layout</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Elite Running  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['elite_running'])){{ ceil(count($skills['spring_floor_tumbling_skills']['elite_running']) * 100 / 10) }}@else 0 @endif%</span></legend>

                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][elite_running][]" id="skills_spring_floor_tumbling_elite_running" title="">
                      <option value="round_off_bhs_half" @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_half', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Half</option>
                      <option value="round_off_bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Double</option>
                      <option value="front_tuck_round_off_bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Front Tuck, Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_full_half"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full_half', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Full and a 1/2</option>
                      <option value="round_off_arabian_round_off_bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_full', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_whip_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_full', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Whip, Full</option>
                      <option value="round_off_bhs_whip_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_double', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Whip, Double</option>
                      <option value="round_off_arabian_round_off_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</option>
                      <option value="front_tuck_round_off_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_running']) && !empty($skills['spring_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_double', $skills['spring_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Front Tuck, Round Off, Backhand Spring, Double</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4" >
                    <legend>Elite Standing  <span class="color-r d-inline-block ml-2">@if (isset($skills['spring_floor_tumbling_skills']['elite_standing'])){{ ceil(count($skills['spring_floor_tumbling_skills']['elite_standing']) * 100 / 11) }}@else 0 @endif%</span></legend>

                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][elite_standing][]" id="skills_spring_floor_tumbling_elite_standing" title="">
                      <option value="3_bhs_full" @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Full</option>
                      <option value="2_bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>2 Backhand Spring, Full</option>
                      <option value="bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Backhand Spring, Full</option>
                      <option value="full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full</option>
                      <option value="3_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Double</option>
                      <option value="2_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>2 Backhand Spring, Double</option>
                      <option value="bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Backhand Spring, Double</option>
                      <option value="full_2_bhs_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full_2_bhs_full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full, 2 Backhand Spring, Full</option>
                      <option value="full_3_bhs_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('full_3_bhs_double', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full, 3 Backhand Spring, Double</option>
                      <option value="3_bhs_whip_full"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_full', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Whip, Full</option>
                      <option value="3_bhs_whip_double"  @if (isset($skills['spring_floor_tumbling_skills']['elite_standing']) && !empty($skills['spring_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_double', $skills['spring_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Whip, Double</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>
                  <button class="btn btn-success mt-2"> Save Spring Floor Skills</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><a data-toggle="collapse" href="#hard">Hard Floor Tumbling  </a><h4 class="d-inline-block ml-2">@if (isset($hard_tumbling_percent)) {{ $hard_tumbling_percent }}@else 0 @endif % </h4></div>
            <div id="hard" class="panel-collapse collapse">
              <div class="panel-body">
                <form class="form" method="post" action="{{url('/cheerleader/skills/hard')}}" role="form">

                  {{csrf_field()}}
                  <fieldset class="mb-4">
                    <legend>Basic Running <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['basic_running'])){{ ceil(count($skills['hard_floor_tumbling_skills']['basic_running']) * 100 / 5) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][basic_running][]" id="skills_hard_floor_tumbling_basic_running" title="">
                      <option value="round_off" @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off</option>
                      <option value="round_off_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Backhand Spring</option>
                      <option value="front_walk_over"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Front Walk Over</option>
                      <option value="round_off_2_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 2 Backhand Spring</option>
                      <option value="round_off_3_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 3 Backhand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4" >
                    <legend>Basic Standing <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['basic_standing'])){{ ceil(count($skills['hard_floor_tumbling_skills']['basic_standing']) * 100 / 3) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][basic_standing][]" id="skills_hard_floor_tumbling_basic_standing" title="">
                      <option value="bhs" @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="2_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="3_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Advanced Running <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['advanced_running'])){{ ceil(count($skills['hard_floor_tumbling_skills']['advanced_running']) * 100 / 6) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][advanced_running][]" id="skills_hard_floor_tumbling_advanced_running" title="">
                      <option value="round_off_tuck" @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck_2_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip_2_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4" >
                    <legend>Advanced Standing <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['advanced_standing'])){{ ceil(count($skills['hard_floor_tumbling_skills']['advanced_standing']) * 100 / 8) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][advanced_standing][]" id="skills_hard_floor_tumbling_advanced_standing" title="">
                      <option value="3_bhs_tuck" @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>3x Backhand Spring, Tuck</option>
                      <option value="2_bhs_tuck"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>2x Backhand Spring, Tuck</option>
                      <option value="bhs_tuck"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Backhand Spring, Tuck</option>
                      <option value="tuck"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('tuck', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Tuck</option>
                      <option value="3_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('3_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>3x Backhand Spring, Layout</option>
                      <option value="2_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>2x Backhand Spring, Layout</option>
                      <option value="bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Backhand Spring, Layout</option>
                      <option value="tuck_2_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_standing']) && !empty($skills['hard_floor_tumbling_skills']['advanced_standing']) && in_array('tuck_2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_standing'])) selected="selected" @endif>Tuck, 2x Backhand Spring, Layout</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4" >
                    <legend>Elite Running <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['elite_running'])){{ ceil(count($skills['hard_floor_tumbling_skills']['elite_running']) * 100 / 10) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][elite_running][]" id="skills_hard_floor_tumbling_elite_running" title="">
                      <option value="round_off_bhs_half" @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_half', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Half</option>
                      <option value="round_off_bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Double</option>
                      <option value="front_tuck_round_off_bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Front Tuck, Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_full_half"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_full_half', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Full and a 1/2</option>
                      <option value="round_off_arabian_round_off_bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_full', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</option>
                      <option value="round_off_bhs_whip_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_full', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Whip, Full</option>
                      <option value="round_off_bhs_whip_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_bhs_whip_double', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Backhand Spring, Whip, Double</option>
                      <option value="round_off_arabian_round_off_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('round_off_arabian_round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</option>
                      <option value="front_tuck_round_off_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_running']) && !empty($skills['hard_floor_tumbling_skills']['elite_running']) && in_array('front_tuck_round_off_bhs_double', $skills['hard_floor_tumbling_skills']['elite_running'])) selected="selected" @endif>Front Tuck, Round Off, Backhand Spring, Double</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset class="mb-4" >
                    <legend>Elite Standing <span class="color-r d-inline-block ml-2">@if (isset($skills['hard_floor_tumbling_skills']['elite_standing'])){{ ceil(count($skills['hard_floor_tumbling_skills']['elite_standing']) * 100 / 11) }}@else 0 @endif %</span></legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][elite_standing][]" id="skills_hard_floor_tumbling_elite_standing" title="">
                      <option value="3_bhs_full" @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Full</option>
                      <option value="2_bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>2 Backhand Spring, Full</option>
                      <option value="bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Backhand Spring, Full</option>
                      <option value="full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full</option>
                      <option value="3_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Double</option>
                      <option value="2_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('2_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>2 Backhand Spring, Double</option>
                      <option value="bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Backhand Spring, Double</option>
                      <option value="full_2_bhs_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full_2_bhs_full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full, 2 Backhand Spring, Full</option>
                      <option value="full_3_bhs_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('full_3_bhs_double', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>Full, 3 Backhand Spring, Double</option>
                      <option value="3_bhs_whip_full"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_full', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Whip, Full</option>
                      <option value="3_bhs_whip_double"  @if (isset($skills['hard_floor_tumbling_skills']['elite_standing']) && !empty($skills['hard_floor_tumbling_skills']['elite_standing']) && in_array('3_bhs_whip_double', $skills['hard_floor_tumbling_skills']['elite_standing'])) selected="selected" @endif>3 Backhand Spring, Whip, Double</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <button class="btn btn-success mt-2"> Save Hard Floor Skills</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><a data-toggle="collapse" href="#group">Group Stunting  </a><h4 class="d-inline-block ml-2"> @if (isset($group_stunting_percent)) {{ $group_stunting_percent }}@else 0 @endif %</h4></div>
            <div id="group" class="panel-collapse collapse">
              <div class="panel-body ">
                <form class="form" method="post" action="{{url('/cheerleader/skills/group')}}" role="form">
                  {{csrf_field()}}

                  <fieldset>
                    <legend>Basic</legend>
{{--                    {{ dd($skills['group_stunting_skills']['basic']['group_stunting']) }}--}}
                    <h2>Group Stunting <span class="color-r d-inline-block ml-2"> @if (isset($skills['group_stunting_skills']['basic']['group_stunting'])){{ ceil(count($skills['group_stunting_skills']['basic']['group_stunting']) * 100 / 5) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][basic][group_stunting][]" id="skills_group_stunting_basic_group_stunting" title="">
                      <option value="show_and_go" @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('show_and_go', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Show and Go</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extension', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Extension</option>
                      <option value="power_press"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('power_press', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Power Press</option>
                      <option value="prep_level_liberty"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('prep_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Prep Level Liberty</option>
                      <option value="extended_level_liberty"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extended_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Extended Level Liberty</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Stationary Group Stunting <span class="color-r d-inline-block ml-2"> @if (isset($skills['group_stunting_skills']['basic']['stationary_group_stunting'])){{ ceil(count($skills['group_stunting_skills']['basic']['stationary_group_stunting']) * 100 / 2) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][basic][stationary_group_stunting][]" id="skills_group_stunting_basic_stationary_group_stuntung" title="">
                      <option value="prep_level_half_twist_up" @if (isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('prep_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting'])) selected="selected" @endif>Prep Level 1/2 Twist Up</option>
                      <option value="extended_level_half_twist_up"  @if (isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('extended_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting'])) selected="selected" @endif>Extended Level 1/2 Twist Up</option>
                      <option value="All">Mark All</option>
                    </select>

                  </fieldset>

                  <fieldset class="mt-5">
                    <legend>Advanced</legend>

                    <h2>Prep Level <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['advance']['prep_level'])){{ ceil(count($skills['group_stunting_skills']['advance']['prep_level']) * 100 / 5) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][prep_level][]" id="skills_group_stunting_advance_prep_level" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Extended Level <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['advance']['extended'])){{ ceil(count($skills['group_stunting_skills']['advance']['extended']) * 100 / 5) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][extended][]" id="skills_group_stunting_advance_extended" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Full Down Dismount <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['advance']['full_down_dismount'])){{ ceil(count($skills['group_stunting_skills']['advance']['full_down_dismount']) * 100 / 6) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][full_down_dismount][]" id="skills_group_stunting_advance_full_down_dismount" title="">
                      <option value="prep" @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Double Down Dismount <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['advance']['double_down_dismount'])){{ ceil(count($skills['group_stunting_skills']['advance']['double_down_dismount']) * 100 / 6) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][double_down_dismount][]" id="skills_group_stunting_advance_double_down_dismount" title="">
                      <option value="prep" @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Other Dismount <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['advance']['other_dismount'])){{ ceil(count($skills['group_stunting_skills']['advance']['other_dismount']) * 100 / 5) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][other_dismount][]" id="skills_group_stunting_advance_other_dismount" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                  </fieldset>
                  <fieldset class="mt-5">
                    <legend>Elite</legend>
                    <h2>2 Based Stunts <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['2_based_stunts'])){{ ceil(count($skills['group_stunting_skills']['elite']['2_based_stunts']) * 100 / 7) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][2_based_stunts][]" id="skills_group_stunting_elite_2_based_stunts" title="">
                      <option value="prep" @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('prep', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('extension', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>Extension</option>
                      <option value="extended_level_liberty"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('extended_level_liberty', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>Extended Level Liberty</option>
                      <option value="one_handed_cupie_or_awesome"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('one_handed_cupie_or_awesome', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>One Handed Cupie or Awesome</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('full_up', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>Full Up</option>
                      <option value="low_to_high_full_around"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('low_to_high_full_around', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>Low to High Full Around (Semi Releasing)</option>
                      <option value="high_to_high_full_around"  @if (isset($skills['group_stunting_skills']['elite']['2_based_stunts']) && !empty($skills['group_stunting_skills']['elite']['2_based_stunts']) && in_array('high_to_high_full_around', $skills['group_stunting_skills']['elite']['2_based_stunts'])) selected="selected" @endif>High to High Full Around (Semi Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Flipping Group Stunting <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting'])){{ ceil(count($skills['group_stunting_skills']['elite']['flipping_group_stunting']) * 100 / 4) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][flipping_group_stunting][]" id="skills_group_stunting_elite_flipping_group_stunting" title="">
                      <option value="rewind" @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('rewind', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Rewind</option>
                      <option value="platform"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('platform', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('liberty', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('stretch', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Front Hand Spring Up <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up'])){{ ceil(count($skills['group_stunting_skills']['elite']['front_hand_spring_up']) * 100 / 4) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][front_hand_spring_up][]" id="skills_group_stunting_elite_front_hand_spring_up" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="1_and_half_twisting_full_up"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('1_and_half_twisting_full_up', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>1 & 1/2 Twisting Full Up</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Back Hand Spring Up <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up'])){{ ceil(count($skills['group_stunting_skills']['elite']['back_hand_spring_up']) * 100 / 4) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][back_hand_spring_up][]" id="skills_group_stunting_elite_back_hand_spring_up" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('full_up', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Hand in Hand <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['hand_in_hand'])){{ ceil(count($skills['group_stunting_skills']['elite']['hand_in_hand']) * 100 / 4) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][hand_in_hand][]" id="skills_group_stunting_elite_hand_in_hand" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Extended Hand in Hand <span class="color-r d-inline-block ml-2">@if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand'])){{ ceil(count($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) * 100 / 4) }}@else 0 @endif %</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][extended_hand_in_hand][]" id="skills_group_stunting_elite_extended_hand_in_hand" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>

                  </fieldset>
                  <button type="submit" class="btn btn-success mt-2">Save Group Stunting Skills</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading"><a data-toggle="collapse" href="#coed">Coed Stunting  </a><h4 class="d-inline-block ml-2">@if (isset($coed_stunting_percent)) {{ $coed_stunting_percent }}@else 0 @endif %</h4></div>
            <div id="coed" class="panel-collapse collapse">
              <div class="panel-body ">
                <form class="form" method="post" action="{{url('/cheerleader/skills/coed')}}"role="form">
                  {{csrf_field()}}

                  <fieldset>
                    <legend>Basic</legend>
                    <h2>Walk-in <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['basic']['walk_in'])){{ ceil(count($skills['coed_stunting_skills']['basic']['walk_in']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][walk_in][]" id="skills_coed_stunting_basic_walk_in" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('hands', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Hands</option>
                      <option value="extension" @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('extension', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Toss <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['basic']['toss'])){{ ceil(count($skills['coed_stunting_skills']['basic']['toss']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][toss][]" id="skills_coed_stunting_basic_toss" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('hands', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('extension', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>From Hands <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['basic']['from_hands'])){{ ceil(count($skills['coed_stunting_skills']['basic']['from_hands']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][from_hands][]" id="skills_coed_stunting_basic_from_hands" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('hands', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('extension', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset>
                    <legend>Advanced</legend>
                    <h2>One Arm <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['advanced']['one_arm'])){{ ceil(count($skills['coed_stunting_skills']['advanced']['one_arm']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][advanced][one_arm][]" id="skills_coed_stunting_advanced_one_arm" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Full Up <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['advanced']['full_up'])){{ ceil(count($skills['coed_stunting_skills']['advanced']['full_up']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][advanced][full_up][]" id="skills_coed_stunting_advanced_full_up" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <fieldset>
                    <legend>Dismounts</legend>
                    <h2>Full Down <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['dismounts']['full_down'])){{ ceil(count($skills['coed_stunting_skills']['dismounts']['full_down']) * 100 / 6) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][full_down][]" id="skills_coed_stunting_dismounts_full_down" title="">
                      <option value="prep" @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Double Down <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['dismounts']['double_down'])){{ ceil(count($skills['coed_stunting_skills']['dismounts']['double_down']) * 100 / 6) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][double_down][]" id="skills_coed_stunting_dismounts_double_down" title="">
                      <option value="prep" @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Other <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['dismounts']['other'])){{ ceil(count($skills['coed_stunting_skills']['dismounts']['other']) * 100 / 5) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][other][]" id="skills_coed_stunting_dismounts_other" title="">
                      <option value="low_to_high_tic_toc" @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Low to High Tic Toc</option>
                      <option value="high_to_high_tic_toc"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>High to High Tic Toc</option>
                      <option value="low_to_high_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Low to High Full Around</option>
                      <option value="high_to_high_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>High to High Full Around</option>
                      <option value="hands_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('hands_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Hands Full Around</option>
                      <option value="All">Mark All</option>
                    </select>

                  </fieldset>
                  <fieldset>
                    <legend>Elite</legend>
                    <h2>Flipping Coed Stunting <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])){{ ceil(count($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) * 100 / 6) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][flipping_coed_stunting][]" id="skills_coed_stunting_elite_flipping_coed_stunting" title="">
                      <option value="rewind" @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('rewind', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Rewind</option>
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('platform', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Cupie</option>
                      <option value="1_and_half_twisting_full_up"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('1_and_half_twisting_full_up', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>1 & 1/2 Twisting Full Up</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Front Hand Spring Up <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up'])){{ ceil(count($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][front_hand_spring_up][]" id="skills_coed_stunting_elite_front_hand_spring_up" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Back Hand Spring Up <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up'])){{ ceil(count($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][back_hand_spring_up][]" id="skills_coed_stunting_elite_back_hand_spring_up" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Hand in Hand <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand'])){{ ceil(count($skills['coed_stunting_skills']['elite']['hand_in_hand']) * 100 / 4) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][hand_in_hand][]" id="skills_coed_stunting_elite_hand_in_hand" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Extended Hand in Hand <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])){{ ceil(count($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) * 100 / 6) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][extended_hand_in_hand][]" id="skills_coed_stunting_elite_extended_hand_in_hand" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Cupie</option>
                      <option value="full_up"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="inverted_cupie"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('inverted_cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Inverted Cupie</option>
                      <option value="All">Mark All</option>
                    </select>

                    <h2>Other <span class="color-r d-inline-block ml-2">@if (isset($skills['coed_stunting_skills']['elite']['other'])){{ ceil(count($skills['coed_stunting_skills']['elite']['other']) * 100 / 6) }}@else 0 @endif%</span></h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][other][]" id="skills_coed_stunting_elite_other" title="">
                      <option value="double_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Double Up</option>
                      <option value="one_arm"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('one_arm', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>One Ar</option>
                      <option value="double_cupie"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_cupie', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Double Cupie</option>
                      <option value="cartwheel_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('cartwheel_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Cartwheel Up</option>
                      <option value="side_sumy_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('side_sumy_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Side Sumy Up</option>
                      <option value="front_ariel_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('front_ariel_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Front Ariel Up</option>
                      <option value="All">Mark All</option>
                    </select>
                  </fieldset>

                  <button class="btn btn-success mt-2" type="submit">Save Coed Stunting</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@include('delete-modal')

@endsection
