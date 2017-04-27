@extends('layouts.app')

@section('content')
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
                <br>
                <div class="text-right">
                  <a href="#" class="btn btn-info">Contact Head Coach</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}'s Upcoming Programs</div>

                <div class="panel-body">
                {{$school->programs}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->name}}'s Upcoming Tryouts</div>

                <div class="panel-body">
                {{$school->tryouts}}
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
                <div class="panel-heading">{{$school->name}}'s Upcoming Teams</div>

                <div class="panel-body">
                {{$school->teams}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
