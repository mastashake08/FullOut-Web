@extends('layouts.app')

@section('content')
<instructor user="{{auth()->user()}}"></instructor>
@endsection
