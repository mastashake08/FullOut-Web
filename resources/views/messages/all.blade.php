@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sent Messages</div>

                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sender</th>
                          <th>Receiver</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($messages['sent'] as $message)
                        <tr>
                          <td>{{$message->sender->name}}</td>
                          <td>{{$message->receiver->name}}</td>
                          <td><p>{{$message->message}} <a href="" class="btn btn-info pull-right">Reply</a></p> </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {!! $messages['sent']->links() !!}
          
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Received Messages</div>

                <div class="panel-body">

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sender</th>
                          <th>Receiver</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($messages['received'] as $message)
                        <tr>
                          <td>{{$message->sender->name}}</td>
                          <td>{{$message->receiver->name}}</td>
                          <td><p>{{$message->message}} <a href="" class="btn btn-info pull-right">Reply</a></p> </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {!!$messages['received']->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
