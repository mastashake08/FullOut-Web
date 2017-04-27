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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($clinics as $clinic)
                    <tr>
                      <td><a href="{{url('/cheerleader/clinics/'.$clinic->id)}}" target="_blank">{{$clinic->name}}</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $clinics->links() !!}
              </div>
            </div>
        </div>
    </div>
</div>
