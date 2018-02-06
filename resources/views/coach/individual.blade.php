@extends('layouts.app')

@section('content')
    <coach :user-id="{{$coach}}" :user-school="{{ $school }}" :main-information="{{  $information  }}"></coach>
@endsection
