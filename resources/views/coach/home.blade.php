@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Manage School</div>

              <div class="panel-body">
                @if(auth()->user()->school != null)
                View your public profile <a href="{{url('/cheerleader/schools/'.auth()->user()->school->id)}}">here</a>
                @else
                Add a <a href="{{url('/coach/schools')}}">school</a>.
                @endif
              </div>
          </div>
      </div>
  </div>
</div>
<favorites></favorites>
@endsection
