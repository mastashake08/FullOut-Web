@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Team</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/teams/'.$team->id)}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}
                    <fieldset>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Team Name</span>
                          <input type="text" class="form-control" placeholder="" name="team_name" required value="{{ $team->team_name }}">
                          @if ($errors->has('team_name'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('team_name') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Mascot</span>
                          <input type="text" class="form-control" placeholder="" name="mascot" required value="{{ $team->mascot }}">
                          @if ($errors->has('mascot'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('mascot') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Team Description</span>
                          <input type="text" class="form-control" placeholder="" name="description" required value="{{ $team->description }}">
                          @if ($errors->has('description'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('description') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Team Type</span>
                          <div class="form-control">
                            <div class="row">
                              <div class="form-group col-xs-4">
                                <label for="type-all-girl">All Girl</label>
                                <input id="type-all-girl" type="radio" class="" name="team_type" required value="all_girl" {{ ($team->team_type == "all_girl" ? "checked" : "") }}>
                              </div>
                              <div class="form-group col-xs-4">
                                <label for="type-coed">Co-ed</label>
                                <input id="type-coed" type="radio" class="" name="team_type" required value="co_ed" {{ ($team->team_type == "co_ed" ? "checked" : "") }}>
                              </div>
                              <div class="form-group col-xs-4">
                                <label for="type-both">Both</label>
                                <input id="type-both" type="radio" class="" name="team_type" required value="both" {{ ($team->team_type == "both" ? "checked" : "") }}>
                              </div>
                              @if ($errors->has('team_type'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('team_type') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Team Responsibilities</span>
                          <input type="text" class="form-control" placeholder="Team Responsibilities" name="team_responsibilities" required value="{{ $team->team_responsibilities }}">
                          @if ($errors->has('team_responsibilities'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('team_responsibilities') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon">Number of Team Members</span>
                          <input type="text" class="form-control" placeholder="Number of Team Members" name="number_members" required value="{{ $team->number_members }}">
                          @if ($errors->has('number_members'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('number_members') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon">Average Room and Board</span>
                          <input type="text" class="form-control" placeholder="" name="average_room" required value="{{ $team->average_room }}">
                          @if ($errors->has('average_room'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('average_room') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon">Skills</span>
                          <input type="text" class="form-control" placeholder="" name="skills" required value="{{ $team->skills }}">
                          @if ($errors->has('skills'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('skills') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Edit Team</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
