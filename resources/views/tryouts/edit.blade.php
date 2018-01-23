@include('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tryouts</div>

                <div class="panel-body">
                    <form class="form" role="form" action="{{url('/coach/tryouts/'.$tryouts->id)}}" method="post">
                        {!!csrf_field()!!}
                        {{method_field('PUT')}}
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
                                    <input type="text" class="form-control" placeholder="" name="name" required value="{{ $tryouts->name }}">
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
                                    <input type="datetime-local" class="form-control" placeholder="" name="start_datetime" required value="{{ $tryouts->start_datetime }}">
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
                                    <input type="datetime-local" class="form-control" placeholder="" name="end_datetime" required value="{{ $tryouts->end_datetime }}">
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
                                    <input type="text" class="form-control" placeholder="" name="phone" required value="{{ $tryouts->phone }}">
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
                                    <input type="text" class="form-control" placeholder="" name="address" required value="{{ $tryouts->address }}">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </fieldset>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-university" aria-hidden="true"></i> Update Tryout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
