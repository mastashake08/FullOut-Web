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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tryouts as $tryout)
                    <tr>
                      <td><a href="{{url('/cheerleader/tryouts/'.$tryout->id)}}" target="_blank">{{$tryout->name}}</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!! $tryouts->links() !!}
              </div>
            </div>
        </div>
    </div>
</div>
