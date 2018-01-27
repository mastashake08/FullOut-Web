<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Search Tryouts</div>

            <div class="panel-body">
              <div class="table-responsive">
                  <legend>Adding Event Section</legend>
                  <form class="mt-2 overflow-hidden" action="/cheerleader/events" method="post">
                      {{ csrf_field() }}
                      <div class="form-group col-md-6">
                          <div class="input-group">
                              <span class="input-group-addon">Event Name</span>
                              <input type="text" class="form-control" placeholder="" name="event_name" required value="{{ old('event_name') }}">
                              @if ($errors->has('event_name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('event_name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                          <div class="input-group">
                              <span class="input-group-addon">Event Date</span>
                              <input type="datetime-local" class="form-control" placeholder="" name="event_date" required value="{{ old('event_date') }}">
                              @if ($errors->has('event_date'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('event_date') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group col-md-9">
                          <div class="input-group">
                              <span class="input-group-addon">Event Address</span>
                              <input type="text" class="form-control" placeholder="" name="event_address" required value="{{ old('event_address') }}">
                              @if ($errors->has('event_address'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('event_address') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <input type="hidden"  name="route" value="tryout">
                      <div class="form-group col-md-4">
                          <button class="btn btn-primary">Add Event</button>
                      </div>

                  </form>
                @include('search.tryouts')
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
                    @foreach($tryouts as $tryout)
                    <tr>
                      <td><a href="{{url('/cheerleader/tryouts/'.$tryout->id)}}">{{$tryout->name}}</a></td>
                        <td>{{$tryout->coach_name}}</td>
                        <td>{{$tryout->team->team_name}}</td>
                        <td>{{$tryout->start_datetime}}</td>
                        <td>{{$tryout->end_datetime}}</td>
                        <td>{{$tryout->phone}}</td>
                        <td>{{$tryout->address}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  <div class="panel-body" >
                      @if(isset($calendar) && !empty($calendar))
                          {!! $calendar->calendar() !!}
                          {{--{!! $calendar->script() !!}--}}
                      @endif
                  </div>
                {!! $tryouts->links() !!}
              </div>
            </div>
        </div>
    </div>
</div>
