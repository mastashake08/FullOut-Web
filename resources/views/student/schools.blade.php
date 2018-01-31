<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search School</div>

                <div class="panel-body">
                    {{--<school-table></school-table>--}}
                  <div class="table-responsive">
                    @include('search.schools')
                    <table class="table mt-25" id="search-school">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Website</th>
                         <th>Min. GPA</th>
                         <th>ACT Score</th>
                         <th>SAT Score</th>
                         <th>Scholarship</th>
                         <th>In State Tuition</th>
                         <th>Out State Tuition</th>
                       </tr>
                     </thead>
                     <tbody>

                       @foreach($schools as $school)
                       <tr>
                         <td><a href="{{url('/cheerleader/schools/'.$school['id'])}}">{{$school['name']}}</a></td>
                         <td><a href="{{$school['website']}}" target="_blank">{{$school['website']}}</a></td>
                         <td>{{$school['min_gpa']}}</td>
                         <td>{{$school['act_score']}}</td>
                         <td>{{$school['sat_score']}}</td>
                         <td>{{$school['scholarship_text']}}</td>

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
