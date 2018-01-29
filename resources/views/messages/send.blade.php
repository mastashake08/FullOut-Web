@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Head Coach For Team {{$team->team_name}}</div>

                <div class="panel-body">
                  <form class="form" role="form" action="{{url('/message')}}" method="post">
                  <fieldset>
                    {{csrf_field()}}
                    <input type="hidden" name="receiver_id" value="{{$team->school->user_id}}"/>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message..." name="message"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Send Message</button>
                  </div>
                </fieldset>
              </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
