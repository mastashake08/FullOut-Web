@extends('layouts.app')

@section('content')
<div class="container">
    @can('create',\App\Clinic::class)
    @include('coach.clinics-tryouts')
    @endcan
    @cannot('create',\App\Clinic::class)
    @include('student.clinics')
    @endcannot
</div>
@endsection
