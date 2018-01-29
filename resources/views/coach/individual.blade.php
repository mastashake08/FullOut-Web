@extends('layouts.app')

@section('content')
{{--    {{ dd($coach->school) }}--}}
    <coach :user-id="{{$coach}}" :user-school="{{ $coach->school }}" :main-information="{{$coach->mainInformationCoach}}"></coach>
@endsection
