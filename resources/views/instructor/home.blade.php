@extends('layouts.app')

@section('content')
<div class="container">
  @if(auth()->user()->stripe_account_id === null)
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Complete Payment Info</div>

              <div class="panel-body">
                Before you can begin adding services you must set up your <a href="https://connect.stripe.com/express/oauth/authorize?redirect_uri={{url('/oauth/redirect')}}&client_id={{env('STRIPE_CLIENT_ID')}}">merchant account</a>
              </div>
          </div>
      </div>
  </div>
  @else
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Dashboard</div>

              <div class="panel-body">
                <form class="form">
                  <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tumbling Rate" name="tumbling_price">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Stunting Rate" name="stunting_price">
                </div>
                <div class="form-group">
                  <button class="btn btn-success">Update Rates</button>
                </div>
                </form>
              </div>
          </div>
      </div>
  </div>
  @endif
</div>
@endsection
