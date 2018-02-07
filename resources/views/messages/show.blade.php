@extends('layouts.app')

@section('content')

<message :all-messages="{{ $messages }}" :with="{{ $with_user }}"></message>
@endsection