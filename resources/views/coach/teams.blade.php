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
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
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
                          <div class="form-group">
                            <a href="" class="btn btn-default">Edit Skillset</a>
                            <a href="" class="btn btn-warning">Edit Team</a>
                            <a href="" class="btn btn-danger">Delete Skillset</a>
                          </div>
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
                      </div>
                      <div class="form-group">
                        <input name="coach_name" class="form-control" placeholder="Coach Name"/>
                      </div>
                      <div class="form-group">
                        <input name="mascot" class="form-control" placeholder="Mascot"/>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Team Description" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="radio">
                          <label><input type="radio" name="team_type" value="women">Women</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="team_type" value="men">Men</label>
                        </div>
                        <div class="radio disabled">
                          <label><input type="radio" name="team_type" value="coed">Coed</label>
                        </div>
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
