@extends('layouts.app')

@section('content')
<div class="container">
    @can('create',\App\Clinic::class)
    @include('coach.tryouts')
    @endcan
    @cannot('create',\App\Clinic::class)
    @include('student.tryouts')
    @endcannot
</div>
@endsection
