<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Teams</div>

                <div class="panel-body">
                  @if(auth()->user()->school === null)
                  You must add a <a href="{{url('/coach/teams')}}">school</a> before you can add a team!
                  @elseif(auth()->user()->school->teams()->count() === 0)
                  No Teams Added Yet Do So Below
                  @else
                  @foreach(auth()->user()->school()->teams as $team)
                  {{$team}}
                  @endforeach
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
                  <form class="form" role="form" action="{{url('/coach/teamss')}}" method="post" enctype="multipart/form-data">

                  </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
