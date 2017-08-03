@extends('layouts.app')

@section('content')
<script>
var skills = {{$school->user->skillSet}}
console.log(skills);
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}</div>

                <div class="panel-body">
                  <div class="text-center">
                  <img src="{{$school->logo}}" class="img-rounded" alt="{{$school->name}}" width="304" height="236">
                </div>
                Name: {{$school->name}}
                <br>
                Address: {{$school->office_address}}
                <br>
                Office Phone: {{$school->office_phone}}
                <br>
                Website: <a href="{{$school->website}}" target="_blank">{{$school->website}}</a>
                <br>
                Minimum GPA: {{$school->min_gpa}}
                <br>
                Minimum Transfer GPA: {{$school->min_gpa_transfer}}
                <br>
                Minimum GPA Needed For Team: {{$school->gpa_needed_for_team}}
                <br>
                ACT Score: {{$school->act_score}}
                <br>
                SAT Score: {{$school->sat_score}}
                <br>
                In State Tuition: ${{money_format('%.2n', $school->in_state_tuition)}}
                <br>
                Out Of State Tuition: ${{money_format('%.2n', $school->out_state_tuition)}}
                
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}'s Upcoming Tryouts</div>

                <div class="panel-body">
                <div class="table-responsive">
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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}'s Upcoming Clinics</div>

                <div class="panel-body">
                <div class="table-responsive">
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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}'s Teams</div>

                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Coach</th>
                         <th>Mascot</th>
                         <th>Description</th>
                         <th>Team Type</th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach($teams as $team)
                       <tr>
                         <td><a href="{{url('/cheerleader/teams/'.$team->id)}}" target="_blank">{{$team->team_name}}</a></td>
                         <td>{{$team->coach_name}}</td>
                         <td>{{$team->mascot}}</td>
                         <td>{{$team->description}}</td>
                         <td>{{$team->team_type}}</td>
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
</div>
@endsection
