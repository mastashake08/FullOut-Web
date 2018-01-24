<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Search Tryouts</div>

            <div class="panel-body">
              <div class="table-responsive">
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
{{--                      <td><a href="{{url('/cheerleader/tryouts/'.$tryout->id)}}" target="_blank">{{$tryout->name}}</a></td>--}}
                        <td>{{$tryout->name}}</td>
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
