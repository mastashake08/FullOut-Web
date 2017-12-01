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
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach(auth()->user()->school->teams as $team)
                      <tr>
                        <td>{{$team->team_name}}</td>
                        <td>{{$team->coach_name}}</td>
                        <td>{{$team->mascot}}</td>
                        <td><p>{{$team->description}}</p></td>
                        <td>
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
                      <div class="form-group">
                        <input name="team_name" class="form-control" placeholder="Team Name"/>
                          @if ($errors->has('team_name'))
                              <span class="help-block">
                                    <strong>{{ $errors->first('coach_name') }}</strong>
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
                        <input name="mascot" class="form-control" placeholder="Mascot"/>
                          @if ($errors->has('team_name'))
                              <span class="help-block">
                                    <strong>{{ $errors->first('coach_name') }}</strong>
                                </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Team Description" name="description"></textarea>
                          @if ($errors->has('team_name'))
                              <span class="help-block">
                                    <strong>{{ $errors->first('coach_name') }}</strong>
                                </span>
                          @endif
                      </div>
                      <div class="form-group">
                        <div class="radio">
                          <label><input type="radio" name="team_type" value="women">Women</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="team_type" value="men">Men</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="team_type" value="coed">Coed</label>
                        </div>
                          @if ($errors->has('team_name'))
                              <span class="help-block">
                                    <strong>{{ $errors->first('coach_name') }}</strong>
                                </span>
                          @endif
                      </div>
                      <div class="form-group">
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
