@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$team->team_name}}</div>

                <div class="panel-body">

                Name: {{$team->team_name}}
                <br>
                Coach: {{$team->coach_name}}
                <br>
                Mascot: {{$team->mascot}}
                <br>
                Description: {{$team->description}}
                <br>
                Team Type: {{$team->team_type}}
                @if($canMessage)
                <div class="text-right">
                  <a href="#" class="btn btn-info">Contact Head Coach</a>
                </div>
                @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$team->team_name}}'s Needed Skillset</div>

                <div class="panel-body">
                {{$team->skillset}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
