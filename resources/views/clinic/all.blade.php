@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage School</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/clinics')}}" method="post">
                    {!!csrf_field()!!}
                    <input class="form-control"  name="name" placeholder="School Name" value="{{old('name')}}"/>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <input class="form-control"  name="coach_name" placeholder="Coach Name" value="{{old('coach_name')}}"/>
                    @if ($errors->has('coach_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('coach_name') }}</strong>
                        </span>
                    @endif
                    <input class="form-control date" type="date"  name="start_datetime" placeholder="Start Date" value="{{old('start_datetime')}}"/>
                    @if ($errors->has('start_datetime'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start_datetime') }}</strong>
                        </span>
                    @endif
                    <input class="form-control date" type="date"  name="end_datetime" placeholder="End Date" value="{{old('end_datetime')}}"/>
                    @if ($errors->has('end_datetime'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end_datetime') }}</strong>
                        </span>
                    @endif
                    <input class="form-control"  type="tel" name="phone" placeholder="Phone" value="{{old('phone')}}"/>
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                    <input class="form-control"  name="skills_needed" placeholder="Skills Needed" value="{{old('skills_needed')}}"/>
                    @if ($errors->has('skills_needed'))
                        <span class="help-block">
                            <strong>{{ $errors->first('skills_needed') }}</strong>
                        </span>
                    @endif
                    <input class="form-control"  name="skills_taught" placeholder="Skills Taught" value="{{old('skills_taught')}}"/>
                    @if ($errors->has('skills_taught'))
                        <span class="help-block">
                            <strong>{{ $errors->first('skills_taught') }}</strong>
                        </span>
                    @endif

                    <input class="form-control" type="number" name="fee" placeholder="Fee" value="{{old('fee')}}"/>
                    @if ($errors->has('fee'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fee') }}</strong>
                        </span>
                    @endif
                  <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Add Clinic</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
