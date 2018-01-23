@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a data-toggle="collapse" href="#clinics">Clinics</a></div>
                <div id="clinics" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Coach Name</th>
                                <th>Team Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Start date</th>
                                <th>End date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clinics as $clinic)
                                <tr>
                                    <td>{{$clinic->name}}</td>
                                    <td>{{$clinic->coach_name}}</td>
                                    <td>{{$clinic->team->team_name}}</td>
                                    <td>{{$clinic->phone}}</td>
                                    <td>{{$clinic->address}}</td>
                                    <td>{{$clinic->start_datetime}}</td>
                                    <td>{{$clinic->end_datetime}}</td>

                                </tr>
                                <tr>
                                    <td>
                                        <form method="post" action="{{url('/coach/clinics/'.$clinic->id)}}">
                                            <div class="form-group">
                                                <a href="{{url('/coach/clinics/'.$clinic->id.'/edit')}}" class="btn btn-warning">Edit Clinic</a>
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger">Delete Clinic</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $clinics->links() !!}
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
                <div class="panel-heading"><a data-toggle="collapse" href="#add-clinics">Add Clinic</a></div>
                <div id="add-clinics" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form" role="form" action="{{url('/coach/clinics')}}" method="post">
                            {!!csrf_field()!!}
                            <fieldset>

                                <div class="form-group col-md-12">
                                    <span class="team_wins d-block w-100">Team Name</span>
                                    <select class="form-control" id="team_id" name="team_id">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                            <option @if(old('team_id', null) == $team['id']) value="{{ old('team_id') }}" selected @else value="{{ $team['id'] }}" @endif >{{ $team->team_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('team_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name</span>
                                        <input type="text" class="form-control" placeholder="" name="name" required value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <span class="team_wins d-block w-100">Coach Name</span>
                                    <select class="form-control" id="coach_name" name="coach_name">
                                        <option value="">Coach Name</option>
                                        @foreach($coaches as $coach)
                                            <option @if(old('coach_name', null) == $coach['name']) value="{{ old('coach_name') }}" selected @else value="{{ $coach['name'] }}" @endif >{{ $coach->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('coach_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('coach_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Start Datetime</span>
                                        <input type="datetime-local" class="form-control" placeholder="" name="start_datetime" required value="{{old('start_datetime')}}">
                                        @if ($errors->has('start_datetime'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('start_datetime') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">End Datetime</span>
                                        <input type="datetime-local" class="form-control" placeholder="" name="end_datetime" required value="{{old('end_datetime')}}">
                                        @if ($errors->has('end_datetime'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('end_datetime') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Phone</span>
                                        <input type="text" class="form-control" placeholder="" name="phone" required value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Address</span>
                                        <input type="text" class="form-control" placeholder="" name="address" required value="{{old('address')}}">
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Skills Needed</span>
                                        <input type="text" class="form-control" placeholder="" name="skills_needed" required value="{{old('skills_needed')}}">
                                        @if ($errors->has('skills_needed'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('skills_needed') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Skills Taught</span>
                                        <input type="text" class="form-control" placeholder="" name="skills_taught" required value="{{old('skills_taught')}}">
                                        @if ($errors->has('skills_taught'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('skills_taught') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                  <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Fee</span>
                                        <input type="text" class="form-control" placeholder="" name="fee" required value="{{old('fee')}}">
                                        @if ($errors->has('fee'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('fee') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Add Clinic</button>
                                </div>
                            </fieldset>
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
                <div class="panel-heading"><a data-toggle="collapse" href="#tryouts">Tryouts</a></div>
                <div id="tryouts" class="panel-collapse collapse">
                    <div class="panel-body">
                        @if(auth()->user()->school === null)
                            You must add a <a href="{{url('/coach/schools')}}">school</a> before you can add a tryout!
                        @elseif(auth()->user()->school->tryouts()->count() === 0)
                            No Tryouts Added Yet Do So Below
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Coach Name</th>
                                    <th>Team Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(auth()->user()->school->tryouts as $tryout)
                                    <tr>
                                        <td>{{$tryout->name}}</td>
                                        <td>{{$tryout->coach_name}}</td>
                                        <td>{{$tryout->team->team_name}}</td>
                                        <td>{{$tryout->start_datetime}}</td>
                                        <td>{{$tryout->end_datetime}}</td>
                                        <td>{{$tryout->phone}}</td>
                                        <td>{{$tryout->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form method="post" action="{{url('/coach/tryouts/'.$tryout->id)}}">
                                                <div class="form-group">
                                                    <a href="{{url('/coach/tryouts/'.$tryout->id.'/edit')}}" class="btn btn-warning">Edit tryout</a>
                                                    {{method_field('DELETE')}}
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-danger">Delete tryout</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
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
                <div class="panel-heading"><a data-toggle="collapse" href="#add-tryouts">Add Tryout</a></div>
                <div id="add-tryouts" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form class="form" role="form" action="{{url('/coach/tryouts')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <fieldset>

                                <div class="form-group col-md-12">
                                    <span class="team_wins d-block w-100">Team Name</span>
                                    <select class="form-control" id="team_id" name="team_id">
                                        <option value="">Select Team</option>
                                        @foreach($teams as $team)
                                            <option @if(old('team_id', null) == $team['id']) value="{{ old('team_id') }}" selected @else value="{{ $team['id'] }}" @endif >{{ $team->team_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('team_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('team_id') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name</span>
                                        <input type="text" class="form-control" placeholder="" name="name" required value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <span class="team_wins d-block w-100">Coach Name</span>
                                    <select class="form-control" id="coach_name" name="coach_name">
                                        <option value="">Coach Name</option>
                                        @foreach($coaches as $coach)
                                            <option @if(old('coach_name', null) == $coach['name']) value="{{ old('coach_name') }}" selected @else value="{{ $coach['name'] }}" @endif >{{ $coach->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('coach_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('coach_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Start Datetime</span>
                                        <input type="datetime-local" class="form-control" placeholder="" name="start_datetime" required value="{{old('start_datetime')}}">
                                        @if ($errors->has('start_datetime'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('start_datetime') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">End Datetime</span>
                                        <input type="datetime-local" class="form-control" placeholder="" name="end_datetime" required value="{{old('end_datetime')}}">
                                        @if ($errors->has('end_datetime'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('end_datetime') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Phone</span>
                                        <input type="text" class="form-control" placeholder="" name="phone" required value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Address</span>
                                        <input type="text" class="form-control" placeholder="" name="address" required value="{{old('address')}}">
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Add Clinic</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection