@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Manage School</div>

              <div class="panel-body">
                @if(auth()->user()->stripe_account_id === null)
                Before you can begin adding services you must set up your <a href="https://connect.stripe.com/express/oauth/authorize?redirect_uri={{url('/oauth/redirect')}}&client_id={{env('STRIPE_CLIENT_ID')}}">merchant account</a>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
