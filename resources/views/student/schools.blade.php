<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search School</div>

                <div class="panel-body">
                  <div class="table-responsive">
                    @include('search.schools')
                    <table class="table mt-25">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Website</th>
                         <th>Min. GPA</th>
                         <th>Min GPA Transfer</th>
                         <th>In State Tuition</th>
                         <th>Out State Tuition</th>
                       </tr>
                     </thead>
                     <tbody>

                       @foreach($schools as $school)
                       <tr>
                         <td><a href="{{url('/cheerleader/schools/'.$school['id'])}}" target="_blank">{{$school['name']}}</a></td>
                         <td><a href="{{$school['website']}}" target="_blank">{{$school['website']}}</a></td>
                         <td>{{$school['min_gpa']}}</td>
                         <td>{{$school['min_gpa_transfer']}}</td>
{{--                         <td>${{money_format('%.2n', $school->in_state_tuition)}}</td>--}}
{{--                         <td>${{money_format('%.2n', $school->out_state_tuition)}}</td>--}}
                           <td>${{number_format($school['in_state_tuition'])}}</td>
                           <td>${{number_format($school['out_state_tuition'])}}</td>
                       </tr>
                       @endforeach

                     </tbody>
                   </table>

                  {!! $schools->links() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>