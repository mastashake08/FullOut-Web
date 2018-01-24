@include('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Clinic</div>

                <div class="panel-body">

                    <fieldset>
                        <div class="row">
                            <span class="col-xs-2">Name: </span>
                            <span class="col-xs-10"> {{ $clinic->name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Team Name: </span>
                            <span class="col-xs-10"> {{ $clinic->team->team_name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Coach Name: </span>
                            <span class="col-xs-10"> {{ $clinic->coach_name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Phone: </span>
                            <span class="col-xs-10"> {{ $clinic->phone }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Address: </span>
                            <span class="col-xs-10"> {{ $clinic->address }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Start DateTime: </span>
                            <span class="col-xs-10"> {{ $clinic->start_datetime }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">End DateTime: </span>
                            <span class="col-xs-10"> {{ $clinic->end_datetime }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Skills Needed: </span>
                            <span class="col-xs-10"> {{ $clinic->skills_needed }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Skills Needed: </span>
                            <span class="col-xs-10"> {{ $clinic->skills_taught }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Fee: </span>
                            <span class="col-xs-10"> {{ $clinic->fee }}</span>
                        </div>
                    </fieldset>
                    <div class="row mt-2">
                        <div class="col-xs-12">
                            <a href="{{ URL::previous() }}" type="button" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
