@extends('layouts.app')

@section('content')
@can('create', \App\School::class)
@include('coach.teams')
@endcan
@if(isset($schools))
@cannot('create',\App\School::class)
@include('student.teams')
@endcannot
@endif
@endsection
