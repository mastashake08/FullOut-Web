<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Search Clinics</div>

            <div class="panel-body">
              <div class="table-responsive">
                @include('search.clinics')
                <table class="table">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Coach Name</th>
                        <th>Team Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Start date</th>
                        <th>End date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($clinics as $clinic)
                    <tr>
                      <td><a href="{{url('/cheerleader/clinics/'.$clinic->id)}}">{{$clinic->name}}</a></td>
{{--                        <td>{{$clinic->name}}</td>--}}
                        <td>{{$clinic->coach_name}}</td>
                        <td>{{$clinic->team->team_name}}</td>
                        <td>{{$clinic->phone}}</td>
                        <td>{{$clinic->address}}</td>
                        <td>{{$clinic->start_datetime}}</td>
                        <td>{{$clinic->end_datetime}}</td>
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
                {{--{!! $clinics->links() !!}--}}
              </div>
            </div>
        </div>
    </div>
</div>
