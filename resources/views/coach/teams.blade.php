<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Teams</div>

                <div class="panel-body">
                  @if(auth()->user()->school === null)
                  You must add a <a href="{{url('/coach/schools')}}">school</a> before you can add a team!
                  @elseif(auth()->user()->school->teams()->count() === 0)
                  No Teams Added Yet Do So Below
                  @else
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Team Name</th>
                        <th>Coach Name</th>
                        <th>Mascot</th>
                        <th>Team Type</th>
                        <th>Team Responsibilities</th>
                        <th>Number Members</th>
                        <th>Average Room</th>
                        <th>Skills</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach(auth()->user()->school->teams as $team)
                      <tr>
                        <td>{{$team->team_name}}</td>
                        <td>{{$team->coach_name}}</td>
                        <td>{{$team->mascot}}</td>
                        <td>{{$team->team_type}}</td>
                        <td>{{$team->team_responsibilities}}</td>
                        <td>{{$team->number_members}}</td>
                        <td>{{$team->average_room}}</td>
                        <td>{{$team->skills}}</td>
                        <td><p>{{$team->description}}</p></td>

                      </tr>
                      <tr>
                          <td colspan="9">
                              <form method="post" action="{{url('/coach/teams/'.$team->id)}}">
                                  <div class="form-group">
                                      <a href="{{url('/coach/team/skillset/'.$team->id)}}" class="btn btn-default">Edit Skillset</a>
                                      <a href="{{url('/coach/teams/'.$team->id.'/edit')}}" class="btn btn-warning">Edit Team</a>
                                      {{method_field('DELETE')}}
                                      {{csrf_field()}}
                                      <button type="submit" class="btn btn-danger">Delete Team</button>
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
    @if(auth()->user()->school !== null)

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Team</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/teams')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">Team Name</span>
                                <input type="text" class="form-control" placeholder="" name="team_name" required value="">
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
                                <input type="text" class="form-control" placeholder="" name="mascot" required value="">
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
                                <input type="text" class="form-control" placeholder="" name="description" required value="">
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
                                            <input id="type-all-girl" type="radio" class="" name="team_type" required value="all_girl">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="type-coed">Co-ed</label>
                                            <input id="type-coed" type="radio" class="" name="team_type" required value="co_ed">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="type-both">Both</label>
                                            <input id="type-both" type="radio" class="" name="team_type" required value="both">
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
                                        <input type="number" id="wins_uca" class="w-25" placeholder="" name="wins_uca" required value="{{(auth()->user()->school->wins_uca ? auth()->user()->school->wins_uca : "")}}">
                                        @if ($errors->has('number_members'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('wins_uca') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="wins_nca">Wins NCA</label>
                                        <input type="number" id="wins_nca" class="w-25" placeholder="" name="wins_nca" required value="{{(auth()->user()->school->wins_nca ? auth()->user()->school->wins_nca : "")}}">
                                        @if ($errors->has('number_members'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('wins_nca') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="wins_worlds">Wins Worlds</label>
                                        <input type="number" id="wins_worlds" class="w-25" placeholder="" name="wins_worlds" required value="{{(auth()->user()->school->wins_worlds ? auth()->user()->school->wins_worlds : "")}}">
                                        @if ($errors->has('number_members'))
                                            <span class="help-block">
                                                 <strong>{{ $errors->first('wins_worlds') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="wins_other">Other Wins</label>
                                        <input type="number" id="wins_other" class="w-25" placeholder="" name="wins_other" required value="{{(auth()->user()->school->wins_other ? auth()->user()->school->wins_other : "")}}">
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
                                <input type="text" class="form-control" placeholder="Team Responsibilities" name="team_responsibilities" required value="">
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
                                <input type="text" class="form-control" placeholder="Number of Team Members" name="number_members" required value="">
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
                                <input type="text" class="form-control" placeholder="" name="average_room" required value="">
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
                                <input type="text" class="form-control" placeholder="" name="skills" required value="">
                                @if ($errors->has('skills'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('skills') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      {{--<div class="form-group">--}}
                          {{--<select class="form-control" id="coach_name" name="coach_name">--}}
                              {{--<option value="">Coach Name</option>--}}
                              {{--@foreach($coaches as $coach)--}}
                                  {{--<option @if(old('coach_name', null) == $coach['name']) value="{{ old('coach_name') }}" selected @else value="{{ $coach['name'] }}" @endif >{{ $coach->name }}</option>--}}
                              {{--@endforeach--}}
                          {{--</select>--}}
                          {{--@if ($errors->has('coach_name'))--}}
                              {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('coach_name') }}</strong>--}}
                                {{--</span>--}}
                          {{--@endif--}}
                      {{--</div>--}}
                      <div class="form-group col-xs-12">
                        <button class="btn btn-primary" type="submit">Add Team</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
