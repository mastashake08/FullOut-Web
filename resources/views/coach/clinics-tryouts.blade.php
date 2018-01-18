
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
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clinics as $clinic)
                                <tr>
                                    <td><a href="{{url('/coach/clinics/'.$clinic->id)}}" target="_blank">{{$clinic->name}}</a></td>
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
                                <div class="form-group">
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
                                <div class="form-group">
                                    <input class="form-control"  name="name" placeholder="Clinic Name" value="{{old('name')}}"/>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
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
                                <div class="form-group">
                                    <input class="form-control date" type="date"  name="start_datetime" placeholder="Start Date" value="{{old('start_datetime')}}"/>
                                    @if ($errors->has('start_datetime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_datetime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control date" type="date"  name="end_datetime" placeholder="End Date" value="{{old('end_datetime')}}"/>
                                    @if ($errors->has('end_datetime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('end_datetime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  type="tel" name="phone" placeholder="Phone" value="{{old('phone')}}"/>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  name="skills_needed" placeholder="Skills Needed" value="{{old('skills_needed')}}"/>
                                    @if ($errors->has('skills_needed'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('skills_needed') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  name="skills_taught" placeholder="Skills Taught" value="{{old('skills_taught')}}"/>
                                    @if ($errors->has('skills_taught'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('skills_taught') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" name="fee" placeholder="Fee" value="{{old('fee')}}"/>
                                    @if ($errors->has('fee'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fee') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
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
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    {{--<th>Phone</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(auth()->user()->school->tryouts as $tryout)
                                    <tr>
                                        <td>{{$tryout->name}}</td>
                                        <td>{{$tryout->coach_name}}</td>
                                        <td>{{$tryout->start_datetime}}</td>
                                        <td>{{$tryout->end_datetime}}</td>
                                        {{--<td>{{$tryout->phone}}</td>--}}
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
                                <div class="form-group">
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
                                <div class="form-group">
                                    <input name="name" class="form-control" value="{{old('name')}}" placeholder="Tryout Name"/>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
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
                                <div class="form-group">
                                    <input name="phone" type="tel" class="form-control" value="{{old('phone')}}" placeholder="Phone"/>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input name="start_datetime" type="datetime-local" class="form-control" value="{{old('start_datetime')}}" placeholder="Start Date"/>
                                    @if ($errors->has('start_datetime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('start_datetime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input name="end_datetime" type="datetime-local" class="form-control" value="{{old('end_datetime')}}" placeholder="End Date"/>
                                    @if ($errors->has('end_datetime'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('end_datetime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Add tryout</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>