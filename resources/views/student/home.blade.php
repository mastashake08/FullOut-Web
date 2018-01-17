@extends('layouts.app')

@section('content')
  {{--{{ dd( auth()->user()->mainInformationStudent) }}--}}
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
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Full Name</span>
                    <input type="text" class="form-control" placeholder="Full Name" name="name" required value="{{auth()->user()->name}}">
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
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Phone</span>
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required value="{{ (isset(auth()->user()->mainInformationStudent->phone) ? auth()->user()->mainInformationStudent->phone : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Address</span>
                    <input type="text" class="form-control" placeholder="Address" name="address" required value="{{ (isset(auth()->user()->mainInformationStudent->address) ? auth()->user()->mainInformationStudent->address : '') }}" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">City</span>
                    <input type="text" class="form-control" placeholder="City" name="city" required value="{{ (isset(auth()->user()->mainInformationStudent->city) ? auth()->user()->mainInformationStudent->city : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">State</span>
                    <input type="text" class="form-control" placeholder="state" name="state" required value="{{ (isset(auth()->user()->mainInformationStudent->state) ? auth()->user()->mainInformationStudent->state : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">D.O.B.</span>
                    <input type="text" class="form-control" placeholder="D.O.B." name="dob" required value="{{ (isset(auth()->user()->mainInformationStudent->dob) ? auth()->user()->mainInformationStudent->dob : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">ZIP</span>
                    <input type="text" class="form-control" placeholder="Zip" name="zip" required value="{{ (isset(auth()->user()->mainInformationStudent->zip) ? auth()->user()->mainInformationStudent->zip : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">School Type</span>
                    <input type="text" class="form-control" placeholder="School Type" name="school_type" required value="{{ (isset(auth()->user()->mainInformationStudent->school_type) ? auth()->user()->mainInformationStudent->school_type : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current School</span>
                    <input type="text" class="form-control" placeholder="Current School" name="current_school" required value="{{ (isset(auth()->user()->mainInformationStudent->current_school) ? auth()->user()->mainInformationStudent->current_school : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current Year</span>
                    <input type="text" class="form-control" placeholder="Current Year" name="current_year" required value="{{ (isset(auth()->user()->mainInformationStudent->current_year) ? auth()->user()->mainInformationStudent->current_year : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Current GPA</span>
                    <input type="text" class="form-control" placeholder="GPA" name="current_gpa" required value="{{ (isset(auth()->user()->mainInformationStudent->current_gpa) ? auth()->user()->mainInformationStudent->current_gpa : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">ACT Score</span>
                    <input type="text" class="form-control" placeholder="ACT Score" name="act_score" required value="{{ (isset(auth()->user()->mainInformationStudent->act_score) ? auth()->user()->mainInformationStudent->act_score : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Highest SAT</span>
                    <input type="text" class="form-control" placeholder="Highest SAT" name="highest_sat" required value="{{ (isset(auth()->user()->mainInformationStudent->highest_sat) ? auth()->user()->mainInformationStudent->highest_sat : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Bio</span>
                    <textarea class="form-control" name="bio">{{ (isset(auth()->user()->mainInformationStudent->bio) ? auth()->user()->mainInformationStudent->bio : '') }}</textarea>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Weight</span>
                    <textarea class="form-control" name="weight">{{ (isset(auth()->user()->mainInformationStudent->weight) ? auth()->user()->mainInformationStudent->weight : '') }}</textarea>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Height</span>
                    <textarea class="form-control" name="height">{{ (isset(auth()->user()->mainInformationStudent->height) ? auth()->user()->mainInformationStudent->height : '') }}</textarea>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Current Cheer Program and Timeline</span>
                    <input class="form-control" name="current_program_timeline" value="{{ (isset(auth()->user()->mainInformationStudent->current_program_timeline) ? auth()->user()->mainInformationStudent->current_program_timeline : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Past Cheer Program and Timeline</span>
                    <input class="form-control" name="past_program_timeline" value="{{ (isset(auth()->user()->mainInformationStudent->past_program_timeline) ? auth()->user()->mainInformationStudent->past_program_timeline : '') }}">
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Accolades</span>
                    <input class="form-control" name="accolades" value="{{ (isset(auth()->user()->mainInformationStudent->accolades) ? auth()->user()->mainInformationStudent->accolades : '') }}">
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
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">Visibility</span>
                    <select class="form-control" name="visibility" title="">
                      <option value="all" {{  (isset(auth()->user()->mainInformationStudent->visibility) && auth()->user()->mainInformationStudent->visibility == 'all' ? 'selected' : '')  }}>All</option>
                      <option value="coach" {{  (isset(auth()->user()->mainInformationStudent->visibility) && auth()->user()->mainInformationStudent->visibility == 'coach' ? 'selected' : '')  }}>Coaches/Gyms</option>
                    </select>
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
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">Brief description about you</span>
                    <textarea class="form-control" name="description">{{ (isset(auth()->user()->mainInformationStudent->description) ? auth()->user()->mainInformationStudent->description : '') }}</textarea>
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
            <div class="panel-heading"><a data-toggle="collapse" href="#spring">Spring Floor Tumbling</a></div>
            <div id="spring" class="panel-collapse collapse">
              <div class="panel-body">
                Select the skills your team is looking for, and we will
                curate a list of potential cheerleader candidates for you!
                In addition cheerleaders can not contact you unless they have
                at least 70% of the skills you require.

                <form class="form" method="post" action="{{url('/cheerleader/skills/spring')}}" role="form">
                  {{csrf_field()}}
                    <fieldset class="mb-4">
                      <legend>Basic Running</legend>
                         <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][basic_running][]" id="skills_spring_floor_tumbling_basic_running" title="">
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off" @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Backhand Spring</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="front_walk_over"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Front Walk Over</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off_2_backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 2 Backhand Spring</option>
                           <option class="skills_spring_floor_tumbling_basic_running" value="round_off_3_backhand_spring"  @if (isset($skills['spring_floor_tumbling_skills']['basic_running']) && !empty($skills['spring_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['spring_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 3 Backhand Spring</option>
                           <option value="All">Mark All</option>
                         </select>



                      {{--<div class="form-group">--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off']))checked @endif>Round Off</label>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][backhand_spring]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['backhand_spring']))checked @endif>Backhand Spring</label>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][front_walk_over]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['front_walk_over']))checked @endif>Front Walk Over</label>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_2_backhand_spring]"@if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off_2_backhand_spring']))checked @endif>Round Off, 2 Backhand Spring</label>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input class="basic-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_running][round_off_3_backhand_spring]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_running']['round_off_3_backhand_spring']))checked @endif>Round Off, 3 Backhand Spring</label>--}}
                        {{--</div>--}}
                        {{--<div class="checkbox">--}}
                          {{--<label><input onclick="checkAll(this,'basic-running-spring')" type="checkbox" id="checkAllRunning">Mark All</label>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    </fieldset>
                  <fieldset class="mb-4">
                    <legend>Basic Standing</legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][basic_standing][]" id="skills_spring_floor_tumbling_basic_standing" title="">
                      <option value="bhs" @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="2_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="3_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['basic_standing']) && !empty($skills['spring_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['spring_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][bhs]"  @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['bhs']))checked @endif>Basic BackHand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][2_bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['2_bhs']))checked @endif>2 Basic BackHand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][basic_standing][3_bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['basic_standing']['3_bhs']))checked @endif>3 or More Basic BackHand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'basic-standing-spring')" type="checkbox" id="checkAllStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4">
                    <legend>Advanced Running</legend>

                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[spring_floor_tumbling_skills][advanced_running][]" id="skills_spring_floor_tumbling_advanced_running" title="">
                      <option value="round_off_tuck" @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck_2_bhs"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip_2_bhs_layout"  @if (isset($skills['spring_floor_tumbling_skills']['advanced_running']) && !empty($skills['spring_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['spring_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_tuck']))checked @endif>Round Off, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_tuck_2_bhs']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_whip']))checked @endif>Round Off, Backhand Spring, Whip</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_layout']))checked @endif>Round Off, Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_running']['round_off_bhs_whip_2_bhs_layout']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'advanced-running-spring')" type="checkbox" id="checkAllStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4">
                    <legend>Advanced Standing</legend>

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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['3_bhs_tuck']))checked @endif>3x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['2_bhs_tuck']))checked @endif>2x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['bhs_tuck']))checked @endif>Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['tuck']))checked @endif>Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][3_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['3_bhs_layout']))checked @endif>3x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['2_bhs_layout']))checked @endif>2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['bhs_layout']))checked @endif>Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][advanced_standing][tuck_2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['advanced_standing']['tuck_2_bhs_layout']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'advanced-standing-spring')" type="checkbox" id="checkAllAdvanceStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4">
                    <legend>Elite Running</legend>

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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_running][round_off_bhs_half]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half']))checked @endif>Round Off, Backhand Spring, Half</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half_full']))checked @endif>Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_half_double']))checked @endif>Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_full']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_full_half]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_full_half']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_full']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_whip_full']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_bhs_whip_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_bhs_whip_double']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_double']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_double']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'elite-running-spring')" type="checkbox" id="checkAllEliteRunning">Mark All</label>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4" >
                    <legend>Elite Standing</legend>

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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_full']))checked @endif>3 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox" name="skills[spring_floor_tumbling][elite_standing][2_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['2_bhs_full']))checked @endif>2 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['bhs_full']))checked @endif>Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full']))checked @endif>Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_double']))checked @endif>3 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][2_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['2_bhs_doable']))checked @endif>2 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['bhs_double']))checked @endif>Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_2_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full_2_bhs_full']))checked @endif>Full, 2 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][full_3_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['full_3_bhs_double']))checked @endif>Full, 3 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_whip_full']))checked @endif>3 Backhand Spring, Whip, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-spring" type="checkbox"  name="skills[spring_floor_tumbling][elite_standing][3_bhs_whip_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['spring_floor_tumbling']['elite_standing']['3_bhs_whip_double']))checked @endif>3 Backhand Spring, Whip, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'elite-standing-spring')" type="checkbox" id="checkAllEliteStanding">Mark All</label>--}}
                      {{--</div>--}}
                    {{--</div>--}}
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
            <div class="panel-heading"><a data-toggle="collapse" href="#hard">Hard Floor Tumbling</a></div>
            <div id="hard" class="panel-collapse collapse">
              <div class="panel-body">
                <form class="form" method="post" action="{{url('/cheerleader/skills/hard')}}" role="form">

                  {{csrf_field()}}
                  <fieldset class="mb-4">
                    <legend>Basic Running</legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][basic_running][]" id="skills_hard_floor_tumbling_basic_running" title="">
                      <option value="round_off" @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off</option>
                      <option value="round_off_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Backhand Spring</option>
                      <option value="front_walk_over"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('front_walk_over', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Front Walk Over</option>
                      <option value="round_off_2_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_2_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 2 Backhand Spring</option>
                      <option value="round_off_3_backhand_spring"  @if (isset($skills['hard_floor_tumbling_skills']['basic_running']) && !empty($skills['hard_floor_tumbling_skills']['basic_running']) && in_array('round_off_3_backhand_spring', $skills['hard_floor_tumbling_skills']['basic_running'])) selected="selected" @endif>Round Off, 3 Backhand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off']))checked @endif>Round Off</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_backhand_spring]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_backhand_spring']))checked @endif>Backhand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][front_walk_over]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['front_walk_over']))checked @endif>Front Walk Over</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_2_backhand_spring]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_2_backhand_spring']))checked @endif>Round Off, 2 Backhand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_running][round_off_3_backhand_spring]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_running']['round_off_3_backhand_springs']))checked @endif>Round Off, 3 Backhand Spring</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'basic-running-hard')" type="checkbox" id="checkAllRunning">Mark All</label>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4" >
                    <legend>Basic Standing</legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][basic_standing][]" id="skills_hard_floor_tumbling_basic_standing" title="">
                      <option value="bhs" @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="2_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('2_bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="3_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['basic_standing']) && !empty($skills['hard_floor_tumbling_skills']['basic_standing']) && in_array('3_bhs', $skills['hard_floor_tumbling_skills']['basic_standing'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['bhs']))checked @endif>Basic Handstand</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][2_bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['2_bhs']))checked @endif>2 Basic Handstand</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="basic-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][basic_standing][3_bhs]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['basic_standing']['3_bhs']))checked @endif>3 or More Basic Handstand</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'basic-standing-hard')" type="checkbox" id="checkAllStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4">
                    <legend>Advanced Running</legend>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[hard_floor_tumbling_skills][advanced_running][]" id="skills_hard_floor_tumbling_advanced_running" title="">
                      <option value="round_off_tuck" @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_tuck', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>2 Basic BackHand Spring</option>
                      <option value="round_off_bhs_tuck_2_bhs"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_tuck_2_bhs', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="round_off_bhs_whip_2_bhs_layout"  @if (isset($skills['hard_floor_tumbling_skills']['advanced_running']) && !empty($skills['hard_floor_tumbling_skills']['advanced_running']) && in_array('round_off_bhs_whip_2_bhs_layout', $skills['hard_floor_tumbling_skills']['advanced_running'])) selected="selected" @endif>3 or More Basic BackHand Spring</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_tuck']))checked @endif>Round Off, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_tuck_2_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_tuck_2_bhs_tuck']))checked @endif>Round Off, Backhand Spring, Tuck, 2x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_whip']))checked @endif>Round Off, Backhand Spring, Whip</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_layout']))checked @endif>Round Off, Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_running][round_off_bhs_whip_2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_running']['round_off_bhs_whip_2_bhs_layout']))checked @endif>Round Off, Backhand Spring, Whip, 2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'advanced-running-spring')" type="checkbox" id="checkAllStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4" >
                    <legend>Advanced Standing</legend>
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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['3_bhs_tuck']))checked @endif>3x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['2_bhs_tuck']))checked @endif>2x Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['bhs_tuck']))checked @endif>Backhand Spring, Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['tuck']))checked @endif>Tuck</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][3_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['3_bhs_layout']))checked @endif>3x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['2_bhs_layout']))checked @endif>2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['bhs_layout']))checked @endif>Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="advanced-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][advanced_standing][tuck_2_bhs_layout]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['advanced_standing']['tuck_2_bhs_layout']))checked @endif>Tuck, 2x Backhand Spring, Layout</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'advanced-standing-hard')" type="checkbox" id="checkAllAdvanceStanding">Mark All</label>--}}
                      {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4" >
                    <legend>Elite Running</legend>
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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox" name="skills[hard_floor_tumbling][elite_running][round_off_bhs_half]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_half']))checked @endif>Round Off, Backhand Spring, Half</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_full']))checked @endif>Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_double']))checked @endif>Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_full']))checked @endif>Front Tuck, Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_full_and_half]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_full_and_half']))checked @endif>Round Off, Backhand Spring, Full and a 1/2</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_full']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_whip_full']))checked @endif>Round Off, Backhand Spring, Whip, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_bhs_whip_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_bhs_whip_double']))checked @endif>Round Off, Backhand Spring, Whip, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][round_off_arabian_round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['round_off_arabian_round_off_bhs_double']))checked @endif>Round Off, Arabian, Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-running-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_running][front_tuck_round_off_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_running']['front_tuck_round_off_bhs_double']))checked @endif>Front Tuck, Round Off, Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input onclick="checkAll(this,'elite-running-hard')" type="checkbox" id="checkAllEliteRunning">Mark All</label>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset class="mb-4" >
                    <legend>Elite Standing</legend>
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
                    {{--<div class="form-group">--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_full]"  @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox" name="skills[hard_floor_tumbling][elite_standing][2_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>2 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][2_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>2 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][bhs_double]"@if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_2_bhs_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full, 2 Backhand Spring, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][full_3_bhs_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>Full, 3 Backhand Spring, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_full]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Whip, Full</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input class="elite-standing-hard" type="checkbox"  name="skills[hard_floor_tumbling][elite_standing][3_bhs_whip_double]" @if(isset(auth()->user()->skillSet->spring_floor_tumbling_skills['hard_floor_tumbling']['elite_standing']['front_tuck_round_off_bhs_double']))checked @endif>3 Backhand Spring, Whip, Double</label>--}}
                      {{--</div>--}}
                      {{--<div class="checkbox">--}}
                        {{--<label><input  type="checkbox" id="checkAllEliteStanding" onclick="checkAll(this,'elite-standing-hard')">Mark All</label>--}}
                      {{--</div>--}}
                    {{--</div>--}}
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
            <div class="panel-heading"><a data-toggle="collapse" href="#group">Group Stunting</a></div>
            <div id="group" class="panel-collapse collapse">
              <div class="panel-body ">
                <form class="form" method="post" action="{{url('/cheerleader/skills/group')}}" role="form">
                  {{csrf_field()}}

                  <fieldset>
                    <legend>Basic</legend>

                    <h2>Group Stunting</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][basic][group_stunting][]" id="skills_group_stunting_basic_group_stunting" title="">
                      <option value="show_and_go" @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('show_and_go', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Show and Go</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extension', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Extension</option>
                      <option value="power_press"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('power_press', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Power Press</option>
                      <option value="prep_level_liberty"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('prep_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Prep Level Liberty</option>
                      <option value="extended_level_liberty"  @if (isset($skills['group_stunting_skills']['basic']['group_stunting']) && !empty($skills['group_stunting_skills']['basic']['group_stunting']) && in_array('extended_level_liberty', $skills['group_stunting_skills']['basic']['group_stunting'])) selected="selected" @endif>Extended Level Liberty</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][show_and_go]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['show_and_go']))checked @endif>Show and Go</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][extension]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['extension']))checked @endif>Extension</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][power_press]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['power_press']))checked @endif>Power Press</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][prep_level_liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['prep_level_liberty']))checked @endif>Prep Level Liberty</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-group-stunting" type="checkbox"  name="skills[group_stunting][basic][group_stunting][extended_level_liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['group_stunting']['extended_level_liberty']))checked @endif>Extended Level Liberty</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                       {{--<label><input  onclick="checkAll(this,'basic-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Stationary Group Stunting</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][basic][stationary_group_stunting][]" id="skills_group_stunting_basic_stationary_group_stuntung" title="">
                      <option value="prep_level_half_twist_up" @if (isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('prep_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting'])) selected="selected" @endif>Prep Level 1/2 Twist Up</option>
                      <option value="extended_level_half_twist_up"  @if (isset($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && !empty($skills['group_stunting_skills']['basic']['stationary_group_stunting']) && in_array('extended_level_half_twist_up', $skills['group_stunting_skills']['basic']['stationary_group_stunting'])) selected="selected" @endif>Extended Level 1/2 Twist Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills[group_stunting][basic][stationary_group_stuntung][prep_level_half_twist_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Prep Level 1/2 Twist Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-stationary-group-stunting" type="checkbox"  name="skills[group_stunting][basic][stationary_group_stuntung][extended_level_half_twist_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['extended_level_half_twist_up']))checked @endif>Extended Level 1/2 Twist Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'basic-stationary-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                  </fieldset>
                  <fieldset class="mt-5">
                    <legend>Advanced</legend>

                    <h2>Prep Level</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][prep_level][]" id="skills_group_stunting_advance_prep_level" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['prep_level']) && !empty($skills['group_stunting_skills']['advance']['prep_level']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['prep_level'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['switch_up']))checked @endif>Switch Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['full_up']))checked @endif>Full Up (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][one_half_full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][double_ups]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['one_half_full_up']))checked @endif>Double Ups</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-prep-group-stunting" type="checkbox"  name="skills[group_stunting][advance][prep_level][full_twisting_switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['prep_level']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'advance-prep-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Extended Level</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][extended][]" id="skills_group_stunting_advance_extended" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['extended']) && !empty($skills['group_stunting_skills']['advance']['extended']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['extended'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-extended-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'basic-stationary-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}


                    <h2>Full Down Dismount</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][full_down_dismount][]" id="skills_group_stunting_advance_full_down_dismount" title="">
                      <option value="prep" @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['group_stunting_skills']['advance']['full_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['full_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['full_down_dismount'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div>--}}
                      {{--<label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['switch_up']" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_up']" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['one_half_full_up']" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['double_ups']" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advance-full-down-dismount-group-stunting" type="checkbox"  name="skills['group_stunting']['advance']['extended']['full_twisting_switch_up']" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'advance-full-down-dismount-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}


                    <h2>Double Down Dismount</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][double_down_dismount][]" id="skills_group_stunting_advance_double_down_dismount" title="">
                      <option value="prep" @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('prep', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('extension', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('liberty', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('stretch', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scorpion', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['group_stunting_skills']['advance']['double_down_dismount']) && !empty($skills['group_stunting_skills']['advance']['double_down_dismount']) && in_array('scale', $skills['group_stunting_skills']['advance']['double_down_dismount'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>

                    {{--<div class="checkbox">--}}
                      {{--<label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="double-down-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'double-down-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}


                    <h2>Other Dismount</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][advance][other_dismount][]" id="skills_group_stunting_advance_other_dismount" title="">
                      <option value="switch_up" @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('switch_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Switch Up</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Full Up (Semi Releasing)</option>
                      <option value="one_half_full_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('one_half_full_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>1 & 1/2 Full Ups (Semi Releasing)</option>
                      <option value="double_ups"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('double_ups', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Double Ups</option>
                      <option value="full_twisting_switch_up"  @if (isset($skills['group_stunting_skills']['advance']['other_dismount']) && !empty($skills['group_stunting_skills']['advance']['other_dismount']) && in_array('full_twisting_switch_up', $skills['group_stunting_skills']['advance']['other_dismount'])) selected="selected" @endif>Full Twisting Switch Up (Releasing)</option>
                      <option value="All">Mark All</option>
                    </select>

                    {{--<div class="checkbox">--}}
                      {{--<label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['switch_up']))checked @endif>Switch Up</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_up']))checked @endif>Full Up (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][one_half_full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['one_half_full_up']))checked @endif>1 & 1/2 Full Ups (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][double_ups]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['double_ups']))checked @endif>Double Ups</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="other-dismount-group-stunting" type="checkbox"  name="skills[group_stunting][advance][extended][full_twisting_switch_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['advance']['extended']['full_twisting_switch_up']))checked @endif>Full Twisting Switch Up (Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'other-dismount-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset class="mt-5">
                    <legend>Elite</legend>
                    <h2>2 Based Stunts</h2>
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

                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][prep]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['prep']))checked @endif>Prep</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][extension]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['extension']))checked @endif>Extension</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][extended_level_liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['extended_level_liberty']))checked @endif>Extended Level Liberty</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][one_handed_cupie_or_awesome]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['one_handed_cupie_or_awesome']))checked @endif>One Handed Cupie or Awesome</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['full_up']))checked @endif>Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][low_to_high_full_around]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['low_to_high_full_around']))checked @endif>Low to High Full Around (Semi Releasing)</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-2-based-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][2_based_stunts][high_to_high_full_around]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['2_based_stunts']['high_to_high_full_around']))checked @endif>High to High Full Around (Semi Releasing)<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-2-based-stunts-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                    <h2>Flipping Group Stunting</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][flipping_group_stunting][]" id="skills_group_stunting_elite_flipping_group_stunting" title="">
                      <option value="rewind" @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('rewind', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Rewind</option>
                      <option value="platform"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('platform', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('liberty', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && !empty($skills['group_stunting_skills']['elite']['flipping_group_stunting']) && in_array('stretch', $skills['group_stunting_skills']['elite']['flipping_group_stunting'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>

                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][rewind]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['rewind']))checked @endif>Rewind<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][platform]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-stunts-group-stunting" type="checkbox"  name="skills[group_stunting][elite][flipping_group_stunting][stretch]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['flipping_group_stunting']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-flipping-stunts-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Front Hand Spring Up</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][front_hand_spring_up][]" id="skills_group_stunting_elite_front_hand_spring_up" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="1_and_half_twisting_full_up"  @if (isset($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['front_hand_spring_up']) && in_array('1_and_half_twisting_full_up', $skills['group_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>1 & 1/2 Twisting Full Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][platform]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][stretch]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][front_hand_spring_up][1_and_half_twisting_full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['front_hand_spring_up']['1_and_half_twisting_full_up']))checked @endif>1 & 1/2 Twisting Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll('elite-front-hand-spring-up-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                    <h2>Back Hand Spring Up</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][back_hand_spring_up][]" id="skills_group_stunting_elite_back_hand_spring_up" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['group_stunting_skills']['elite']['back_hand_spring_up']) && in_array('full_up', $skills['group_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][platform]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][stretch]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-group-stunting" type="checkbox"  name="skills[group_stunting][elite][back_hand_spring_up][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['back_hand_spring_up']['full_up']))checked @endif>Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-back-hand-spring-up-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Hand in Hand</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][hand_in_hand][]" id="skills_group_stunting_elite_hand_in_hand" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][platform]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][stretch]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][hand_in_hand][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['hand_in_hand']['full_up']))checked @endif>Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onClick="checkAll(this,'elite-hand-in-hand-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Extended Hand in Hand</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[group_stunting_skills][elite][extended_hand_in_hand][]" id="skills_group_stunting_elite_extended_hand_in_hand" title="">
                      <option value="platform" @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="full_up"  @if (isset($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['group_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['group_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][platform]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][liberty]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][stretch]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-in-hand-group-stunting" type="checkbox"  name="skills[group_stunting][elite][extended_hand_in_hand][full_up]" @if(isset(auth()->user()->skillSet->group_stunting_skills['group_stunting']['elite']['extended_hand_in_hand']['full_up']))checked @endif>Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onClick="checkAll(this,'elite-extended-hand-in-hand-group-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
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
            <div class="panel-heading"><a data-toggle="collapse" href="#coed">Coed Stunting</a></div>
            <div id="coed" class="panel-collapse collapse">
              <div class="panel-body ">
                <form class="form" method="post" action="{{url('/cheerleader/skills/coed')}}"role="form">
                  {{csrf_field()}}

                  <fieldset>
                    <legend>Basic</legend>
                    <h2>Walk-in</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][walk_in][]" id="skills_coed_stunting_basic_walk_in" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('hands', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Hands</option>
                      <option value="extension" @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('extension', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['walk_in']) && !empty($skills['coed_stunting_skills']['basic']['walk_in']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['walk_in'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][hands]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['hands']))checked @endif>Hands<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-walk-in-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][walk_in][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['walk_in']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="(this,'basic-walk-in-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Toss</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][toss][]" id="skills_coed_stunting_basic_toss" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('hands', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('extension', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['toss']) && !empty($skills['coed_stunting_skills']['basic']['toss']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['toss'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][hands]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['hands']))checked @endif>Hands<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][toss][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['toss']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="(this,'basic-toss-coed-stunting')" type="checkbox">Mark Alldiv></label>--}}
                  {{--</--}}
                    <h2>From Hands</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][basic][from_hands][]" id="skills_coed_stunting_basic_from_hands" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('hands', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('extension', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('liberty', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['basic']['from_hands']) && !empty($skills['coed_stunting_skills']['basic']['from_hands']) && in_array('stretch', $skills['coed_stunting_skills']['basic']['from_hands'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][hands]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['hands']))checked @endif>Hands<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-from-hands-coed-stunting" type="checkbox"  name="skills[coed_stunting][basic][from_hands][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['basic']['from_hands']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="(this,'basic-from-hands-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset>

                    <legend>Advanced</legend>
                    <h2>One Arm</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][advanced][one_arm][]" id="skills_coed_stunting_advanced_one_arm" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['advanced']['one_arm']) && !empty($skills['coed_stunting_skills']['advanced']['one_arm']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['one_arm'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][hands]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['hands']))checked @endif>Hands<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advanced-one-arm-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][one_arm][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['one_arm']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'advanced-one-arm-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Full Up</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][advanced][full_up][]" id="skills_coed_stunting_advanced_full_up" title="">
                      <option value="hands" @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('hands', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Hands</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('extension', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('liberty', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['advanced']['full_up']) && !empty($skills['coed_stunting_skills']['advanced']['full_up']) && in_array('stretch', $skills['coed_stunting_skills']['advanced']['full_up'])) selected="selected" @endif>Stretch</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="advanced-full-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][hands]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['hands']))checked @endif>Hands<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="basic-toss-coed-stunting" type="checkbox"  name="skills[coed_stunting][advanced][full_up][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['advanced']['full_up']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'basic-toss-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset>
                    <legend>Dismounts</legend>

                    <h2>Full Down</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][full_down][]" id="skills_coed_stunting_dismounts_full_down" title="">
                      <option value="prep" @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['coed_stunting_skills']['dismounts']['full_down']) && !empty($skills['coed_stunting_skills']['dismounts']['full_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['full_down'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][prep]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['prep']))checked @endif>Prep<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][scorpion]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['scorpion']))checked @endif>Scorpion<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-full-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][full_down][scale]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['full_down']['scale']))checked @endif>Scale<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'dismounts-full-down-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Double Down</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][double_down][]" id="skills_coed_stunting_dismounts_double_down" title="">
                      <option value="prep" @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('prep', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Prep</option>
                      <option value="extension"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('extension', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Extension</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('liberty', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('stretch', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Stretch</option>
                      <option value="scorpion"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scorpion', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Scorpion</option>
                      <option value="scale"  @if (isset($skills['coed_stunting_skills']['dismounts']['double_down']) && !empty($skills['coed_stunting_skills']['dismounts']['double_down']) && in_array('scale', $skills['coed_stunting_skills']['dismounts']['double_down'])) selected="selected" @endif>Scale</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][prep]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['prep']))checked @endif>Prep<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][extension]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['extension']))checked @endif>Extension<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][scorpion]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['scorpion']))checked @endif>Scorpion<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-double-down-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][double_down][scale]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['double_down']['scale']))checked @endif>Scale<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'dismounts-double-down-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Other</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][dismounts][other][]" id="skills_coed_stunting_dismounts_other" title="">
                      <option value="low_to_high_tic_toc" @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Low to High Tic Toc</option>
                      <option value="high_to_high_tic_toc"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_tic_toc', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>High to High Tic Toc</option>
                      <option value="low_to_high_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('low_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Low to High Full Around</option>
                      <option value="high_to_high_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('high_to_high_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>High to High Full Around</option>
                      <option value="hands_full_around"  @if (isset($skills['coed_stunting_skills']['dismounts']['other']) && !empty($skills['coed_stunting_skills']['dismounts']['other']) && in_array('hands_full_around', $skills['coed_stunting_skills']['dismounts']['other'])) selected="selected" @endif>Hands Full Around</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][low_to_high_tic_toc]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['low_to_high_tic_toc']))checked @endif>Low to High Tic Toc<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other'][high_to_high_tic_toc]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['high_to_high_tic_toc']))checked @endif>High to High Tic Toc<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][low_to_high_full_around]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['low_to_high_full_around']))checked @endif>Low to High Full Around<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][high_to_high_full_around]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['high_to_high_full_around']))checked @endif>High to High Full Around<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="dismounts-other-stunting" type="checkbox"  name="skills[coed_stunting][dismounts][other][hands_full_around]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['dismounts']['other']['hands_full_around']))checked @endif>Hands Full Around<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'dismounts-other-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
                  </fieldset>
                  <fieldset>
                    <legend>Elite</legend>
                    <h2>Flipping Coed Stunting</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][flipping_coed_stunting][]" id="skills_coed_stunting_elite_flipping_coed_stunting" title="">
                      <option value="rewind" @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('rewind', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Rewind</option>
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('platform', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>Cupie</option>
                      <option value="1_and_half_twisting_full_up"  @if (isset($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && !empty($skills['coed_stunting_skills']['elite']['flipping_coed_stunting']) && in_array('1_and_half_twisting_full_up', $skills['coed_stunting_skills']['elite']['flipping_coed_stunting'])) selected="selected" @endif>1 & 1/2 Twisting Full Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][rewind]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['rewind']))checked @endif>Rewind<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting]['platform']" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['cupie']))checked @endif>Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-flipping-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][flipping_coed_stunting][1_and_half_twisting_full_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['flipping_coed_stunting']['1_and_half_twisting_full_up']))checked @endif>1 & 1/2 Twisting Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onClick="checkAll(this,'elite-flipping-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Front Hand Spring Up</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][front_hand_spring_up][]" id="skills_coed_stunting_elite_front_hand_spring_up" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['front_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['front_hand_spring_up'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['platform']" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['liberty']" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['stretch']" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-front-hand-spring-up-coed-stunting" type="checkbox"  name="skills['coed_stunting']['elite']['front_hand_spring_up']['cupie']" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['front_hand_spring_up']['cupie']))checked @endif>Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-front-hand-spring-up-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Back Hand Spring Up</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][back_hand_spring_up][]" id="skills_coed_stunting_elite_back_hand_spring_up" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('platform', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && !empty($skills['coed_stunting_skills']['elite']['back_hand_spring_up']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['back_hand_spring_up'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][platform]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-back-hand-spring-up-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][back_hand_spring_up][cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['back_hand_spring_up']['cupie']))checked @endif>Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-back-hand-spring-up-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Hand in Hand</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][hand_in_hand][]" id="skills_coed_stunting_elite_hand_in_hand" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['hand_in_hand'])) selected="selected" @endif>Cupie</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][platform]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][hand_in_hand][cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['hand_in_hand']['cupie']))checked @endif>Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-hand-hand-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Extended Hand in Hand</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][extended_hand_in_hand][]" id="skills_coed_stunting_elite_extended_hand_in_hand" title="">
                      <option value="platform"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('platform', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Platform</option>
                      <option value="liberty"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('liberty', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Liberty</option>
                      <option value="stretch"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('stretch', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Stretch</option>
                      <option value="cupie"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Cupie</option>
                      <option value="full_up"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('full_up', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Full Up</option>
                      <option value="inverted_cupie"  @if (isset($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && !empty($skills['coed_stunting_skills']['elite']['extended_hand_in_hand']) && in_array('inverted_cupie', $skills['coed_stunting_skills']['elite']['extended_hand_in_hand'])) selected="selected" @endif>Inverted Cupie</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][platform]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['platform']))checked @endif>Platform<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][liberty]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['liberty']))checked @endif>Liberty<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][stretch]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['stretch']))checked @endif>Stretch<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['cupie']))checked @endif>Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][full_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['full_up']))checked @endif>Full Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-extended-hand-hand-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][extended_hand_in_hand][inverted_cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['extended_hand_in_hand']['inverted_cupie']))checked @endif>Inverted Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input  type="checkbox" onclick="checkAll(this,'elite-extended-hand-hand-coed-stunting')">Mark All</label>--}}
                    {{--</div>--}}

                    <h2>Other</h2>
                    <select class="selectpicker" data-allOptionIsSelected="false" multiple="multiple" name="skills[coed_stunting_skills][elite][other][]" id="skills_coed_stunting_elite_other" title="">
                      <option value="double_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Double Up</option>
                      <option value="one_arm"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('one_arm', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>One Ar</option>
                      <option value="double_cupie"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('double_cupie', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Double Cupie</option>
                      <option value="cartwheel_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('cartwheel_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Cartwheel Up</option>
                      <option value="side_sumy_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('side_sumy_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Side Sumy Up</option>
                      <option value="front_ariel_up"  @if (isset($skills['coed_stunting_skills']['elite']['other']) && !empty($skills['coed_stunting_skills']['elite']['other']) && in_array('front_ariel_up', $skills['coed_stunting_skills']['elite']['other'])) selected="selected" @endif>Front Ariel Up</option>
                      <option value="All">Mark All</option>
                    </select>
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][double_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Double Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][one_arm]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>One Arm<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][double_cupie]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Double Cupie<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][cartwheel_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['group_stunting']['basic']['stationary_group_stuntung']['prep_level_half_twist_up']))checked @endif>Cartwheel Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][side_sumy_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['other']['side_sumy_up']))checked @endif>Side Sumy Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input class="elite-other-coed-stunting" type="checkbox"  name="skills[coed_stunting][elite][other][front_ariel_up]" @if(isset(auth()->user()->skillSet->coed_stunting_skills['coed_stunting']['elite']['other']['front_ariel_up']))checked @endif>Front Ariel Up<label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                      {{--<label><input onclick="checkAll(this,'elite-other-coed-stunting')" type="checkbox">Mark All</label>--}}
                    {{--</div>--}}
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
