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
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">Tuition cost</span>
                                    <div class="form-control">
                                        <div class="row">
                                            <div class="form-group col-xs-6 col-md-5">
                                                <label for="tuition-cost-in">In State</label>
                                                <input id="tuition-cost-in" type="radio" class="" name="tuition_cost" required value="tuition-cost-in" @if(auth()->user()->mainInformationCoach && auth()->user()->mainInformationCoach->tuition_cost == 'tuition-cost-in') checked @endif>
                                            </div>
                                            <div class="form-group col-xs-6 col-md-7">
                                                <label for="tuition-cost-out">Out of State</label>
                                                <input id="tuition-cost-out" type="radio" class="" name="tuition_cost" required value="tuition-cost-out" @if(auth()->user()->mainInformationCoach && auth()->user()->mainInformationCoach->tuition_cost == 'tuition-cost-out') checked @endif>
                                            </div>
                                        </div>
                                    </div>
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

<favorites></favorites>
@endsection
