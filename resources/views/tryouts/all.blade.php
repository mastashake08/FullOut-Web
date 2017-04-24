@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage School</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/coach/schools')}}" method="post" enctype="multipart/form-data">
                  @if(auth()->user()->school != null)

                    {!!csrf_field()!!}
                    <input class="form-control"  name="name" placeholder="School Name" value="{{auth()->user()->school->name}}" readonly="true"/>
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo">

                    <img src="{{(auth()->user()->school->logo)}}"/>
                    <textarea class="form-control" name="description" placeholder="School Description">{{auth()->user()->school->name}}</textarea>
                    <input class="form-control" name="office_phone" type="tel" placeholder="Office Phone" value="{{auth()->user()->school->office_phone}}"></input>
                    <input class="form-control" name="cell_phone" type="tel" placeholder="Cell Phone" value="{{auth()->user()->school->cell_phone}}"></input>
                    <textarea class="form-control" name="address"  placeholder="School Address">{{auth()->user()->school->office_address}}</textarea>
                    <input class="form-control" name="in_state_tuition" placeholder="In State Tuition" value="{{auth()->user()->school->in_state_tuition}}"></input>
                    <input class="form-control" name="out_state_tuition" placeholder="Out Of State Tuition" value="{{auth()->user()->school->out_state_tuition}}"></input>
                    <input class="form-control" name="website" placeholder="Website" value="{{auth()->user()->school->website}}"></input>
                    <input class="form-control" name="min_gpa" placeholder="Min GPA" value="{{auth()->user()->school->min_gpa}}"></input>
                    <input class="form-control" name="min_gpa_transfer" placeholder="Min GPA Transfer" value="{{auth()->user()->school->min_gpa_transfer}}"></input>
                    <input class="form-control" name="gpa_needed_for_team" placeholder="GPA Needed For Team" value="{{auth()->user()->school->gpa_needed_for_team}}"></input>
                    <input class="form-control" name="act_score" placeholder="ACT Needed" value="{{auth()->user()->school->act_score}}"></input>
                    <input class="form-control" name="sat_score" placeholder="SAT Needed" value="{{auth()->user()->school->sat_score}}"></input>
                  @else
                    {!!csrf_field()!!}
                    <input class="form-control" name="name" placeholder="School Name" value="{{old('name')}}"/>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" id="logo">
                    @if ($errors->has('logo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                    @endif
                    <textarea class="form-control" name="description" placeholder="School Description" value="{{old('description')}}"></textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="office_phone" type="tel" placeholder="Office Phone" value="{{old('office_phone')}}"></input>
                    @if ($errors->has('office_phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('office_phone') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="cell_phone" type="tel" placeholder="Cell Phone" value="{{old('cell_phone')}}"></input>
                    @if ($errors->has('cell_phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cell_phone') }}</strong>
                        </span>
                    @endif
                    <textarea class="form-control" name="address"  placeholder="School Address" value="{{old('address')}}"></textarea>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="in_state_tuition" placeholder="In State Tuition" value="{{old('in_state_tuition')}}"></input>
                    @if ($errors->has('in_state_tuition'))
                        <span class="help-block">
                            <strong>{{ $errors->first('in_state_tuition') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="out_state_tuition" placeholder="Out Of State Tuition" value="{{old('out_state_tuition')}}"></input>
                    @if ($errors->has('out_state_tuition'))
                        <span class="help-block">
                            <strong>{{ $errors->first('out_state_tuition') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="website" placeholder="Website" value="{{old('website')}}"></input>
                    @if ($errors->has('website'))
                        <span class="help-block">
                            <strong>{{ $errors->first('website') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="min_gpa" placeholder="Min GPA" value="{{old('min_gpa')}}"></input>
                    @if ($errors->has('min_gpa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('min_gpa') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="min_gpa_transfer" placeholder="Min GPA Transfer" value="{{old('min_gpa_transfer')}}"></input>
                    @if ($errors->has('min_gpa_transfer'))
                        <span class="help-block">
                            <strong>{{ $errors->first('min_gpa_transfer') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="gpa_needed_for_team" placeholder="GPA Needed For Team" value="{{old('gpa_needed_for_team')}}"></input>
                    @if ($errors->has('gpa_needed_for_team'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gpa_needed_for_team') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="act_score" placeholder="ACT Needed" value="{{old('act_score')}}"></input>
                    @if ($errors->has('act_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('act_score') }}</strong>
                        </span>
                    @endif
                    <input class="form-control" name="sat_score" placeholder="SAT Needed" value="{{old('sat_score')}}"></input>
                    @if ($errors->has('sat_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sat_score') }}</strong>
                        </span>
                    @endif
                  @endif
                  <button type="submit" class="btn btn-primary"><i class="fa fa-university" aria-hidden="true"></i> Update School</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
