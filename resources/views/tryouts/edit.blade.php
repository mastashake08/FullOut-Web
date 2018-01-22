@include('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tryouts</div>

                <div class="panel-body">
                    <form class="form" role="form" action="{{url('/coach/tryouts/'.$tryouts->id)}}" method="post">
                        {!!csrf_field()!!}
                        {{method_field('PUT')}}
                        <input class="form-control"  name="name" placeholder="Clinic Name" value="{{$tryouts->name}}"/>
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        <input class="form-control"  name="coach_name" placeholder="Coach Name" value="{{$tryouts->coach_name}}"/>
                        @if ($errors->has('coach_name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('coach_name') }}</strong>
                        </span>
                        @endif
                        <input class="form-control date" type="date"  name="start_datetime" placeholder="Start Date" value="{{$tryouts->start_datetime}}"/>
                        @if ($errors->has('start_datetime'))
                            <span class="help-block">
                            <strong>{{ $errors->first('start_datetime') }}</strong>
                        </span>
                        @endif
                        <input class="form-control date" type="date"  name="end_datetime" placeholder="End Date" value="{{$tryouts->end_datetime}}"/>
                        @if ($errors->has('end_datetime'))
                            <span class="help-block">
                            <strong>{{ $errors->first('end_datetime') }}</strong>
                        </span>
                        @endif
                        <input class="form-control"  type="tel" name="phone" placeholder="Phone" value="{{$tryouts->phone}}"/>
                        @if ($errors->has('phone'))
                            <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                        <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Edit Clinic</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
