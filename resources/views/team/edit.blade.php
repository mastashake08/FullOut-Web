@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Team</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/teams/'.$team->id)}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}
                    <fieldset>
                      <div class="form-group">
                        <input name="team_name" class="form-control" placeholder="Team Name" value="{{$team->team_name}}"/>
                      </div>
                      <div class="form-group">
                        <input name="coach_name" class="form-control" placeholder="Coach Name" value="{{$team->coach_name}}"/>
                      </div>
                      <div class="form-group">
                        <input name="mascot" class="form-control" placeholder="Mascot" value="{{$team->mascot}}"/>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Team Description" name="description">{{$team->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <div class="radio">
                          @if($team->team_type === 'women')
                          <label><input type="radio" name="team_type" value="women" checked>Women</label>
                          @else
                          <label><input type="radio" name="team_type" value="women" >Women</label>
                          @endif
                        </div>
                        <div class="radio">
                          @if($team->team_type === 'men')
                          <label><input type="radio" name="team_type" value="men" checked>Men</label>
                          @else
                          <label><input type="radio" name="team_type" value="men">Men</label>
                          @endif
                        </div>
                        <div class="radio">
                          @if($team->team_type === 'coed')
                          <label><input type="radio" name="team_type" value="coed" checked="">Coed</label>
                          @else
                          <label><input type="radio" name="team_type" value="coed">Coed</label>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Edit Team</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
