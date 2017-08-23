<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Tryouts</div>

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
                        <th>Phone</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach(auth()->user()->school->tryouts as $tryout)
                      <tr>
                        <td>{{$tryout->name}}</td>
                        <td>{{$tryout->coach_name}}</td>
                        <td>{{$tryout->start_datetime}}</td>
                        <td>{{$tryout->end_datetime}}</td>
                        <td>{{$tryout->phone}}</td>
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
    @if(auth()->user()->school !== null)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add tryout</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/tryouts')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                      <div class="form-group">
                        <input name="name" class="form-control" placeholder="Tryout Name"/>
                      </div>
                      <div class="form-group">
                        <input name="coach_name" class="form-control" placeholder="Coach Name"/>
                      </div>
                      <div class="form-group">
                        <input name="phone" type="tel" class="form-control" placeholder="Phone"/>
                      </div>
                      <div class="form-group">
                        <input name="start_datetime" type="datetime-local" class="form-control" placeholder="Start Date"/>
                      </div>
                      <div class="form-group">
                        <input name="end_datetime" type="datetime-local" class="form-control" placeholder="End Date"/>
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
    @endif
</div>
