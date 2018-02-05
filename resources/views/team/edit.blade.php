@extends('layouts.app')

@section('content')
  {{--{{ dd( $errors) }}--}}
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Team</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/teams/'.$team->id)}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}
                    <fieldset>
                      <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                        <div class="col-md-12 mb-2">
                          <div class="input-group">
                            <span class="input-group-addon">Upload Team logo</span>
                            <img id="school_logo_img" src="{{ asset('images/team-logo/'.($team->logo ? $team->logo : "")) }}" alt=""/>
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
                          <span class="team_wins d-block w-100">Team Wins</span>
                          <div class="row">
                            <div class="col-md-3">
                              <label for="wins_uca">Wins UCA</label>
                              <input type="number" id="wins_uca" class="w-25" placeholder="" name="wins_uca" required value="{{($team->wins_uca ? $team->wins_uca : "")}}">
                              @if ($errors->has('number_members'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('wins_uca') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="col-md-3">
                              <label for="wins_nca">Wins NCA</label>
                              <input type="number" id="wins_nca" class="w-25" placeholder="" name="wins_nca" required value="{{($team->wins_nca ? $team->wins_nca : "")}}">
                              @if ($errors->has('number_members'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('wins_nca') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="col-md-3">
                              <label for="wins_worlds">Wins Worlds</label>
                              <input type="number" id="wins_worlds" class="w-25" placeholder="" name="wins_worlds" required value="{{($team->wins_worlds ? $team->wins_worlds : "")}}">
                              @if ($errors->has('number_members'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('wins_worlds') }}</strong>
                                </span>
                              @endif
                            </div>
                            <div class="col-md-3">
                              <label for="wins_other">Other Wins</label>
                              <input type="number" id="wins_other" class="w-25" placeholder="" name="wins_other" required value="{{($team->wins_other ? $team->wins_other : "")}}">
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
                      <div class="col-xs-12"><h2>Team 1</h2></div>

                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Are There Any Financial Requirements? If so, explain</span>
                          <textarea class="form-control" name="financial_requirements">{{ $team->financial_requirements }}</textarea>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group">
                          <span class="input-group-addon">Click if information is the same for all teams</span>
                          <span class="form-control"> <input type="checkbox" class="" name="same_information" value="yes" {{ ($team->same_information == 'yes' ? 'checked' : '') }}></span>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon">Tuition Cost In State</span>
                          <input type="text" class="form-control" placeholder="" name="tuition_cost_in" required value="{{ $team->tuition_cost_in }}">
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="input-group">
                          <span class="input-group-addon">Tuition Cost Out Of State</span>
                          <input type="text" class="form-control" placeholder="" name="tuition_cost_out" required value="{{ $team->tuition_cost_out }}">
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <div class="input-group">
                          <span class="input-group-addon">Brief description of cheer program</span>
                          <textarea class="form-control" name="description_program">{{ $team->description_program }}</textarea>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
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
