@extends('layouts.app')

@section('content')
@can('create', \App\School::class)
@include('coach.schools')
@endcan
@if(isset($schools))
@cannot('create',\App\School::class)
@include('student.schools')
@endcannot
@endif
@endsection
