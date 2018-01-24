@include('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tryout</div>

                <div class="panel-body">

                    <fieldset>
                        <div class="row">
                            <span class="col-xs-2">Name: </span>
                            <span class="col-xs-10"> {{ $tryout->name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Team Name: </span>
                            <span class="col-xs-10"> {{ $tryout->team->team_name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Coach Name: </span>
                            <span class="col-xs-10"> {{ $tryout->coach_name }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Phone: </span>
                            <span class="col-xs-10"> {{ $tryout->phone }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Address: </span>
                            <span class="col-xs-10"> {{ $tryout->address }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">Start DateTime: </span>
                            <span class="col-xs-10"> {{ $tryout->start_datetime }}</span>
                        </div>
                        <div class="row">
                            <span class="col-xs-2">End DateTime: </span>
                            <span class="col-xs-10"> {{ $tryout->end_datetime }}</span>
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
