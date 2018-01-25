@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}</div>
                <div class="panel-body">
                  <div class="text-center">
                  <img src="{{ asset('images/school-logo/'.$school->logo)}}" class="img-rounded" alt="{{$school->name}}" width="304" height="236">
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
                In State Tuition: ${{$school->in_state_tuition}}
                <br>
                Out Of State Tuition: ${{$school->out_state_tuition}}
                
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
                         <td><a href="{{url('/cheerleader/teams/'.$team->id)}}">{{$team->team_name}}</a></td>
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
