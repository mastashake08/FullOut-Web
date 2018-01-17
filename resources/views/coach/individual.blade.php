@extends('layouts.app')

@section('content')
    {{--{{ dd($coach->mainInformationCoach) }}--}}
    <coach :user-id="{{$coach}}" :main-information="{{$coach->mainInformationCoach}}"></coach>
@endsection
