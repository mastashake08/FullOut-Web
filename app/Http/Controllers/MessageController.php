<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //
        if($request->expectsJson()){
          $with = [
            'messages' =>[
              'sent' => $request->user()->sentMessages()->with(['sender','receiver'])->get(),
              'received' => $request->user()->messages()->with(['sender','receiver'])->get()
            ]
          ];
          return response()->json($with);
        }
        else{
          $with = [
            'messages' =>[
              'sent' => $request->user()->sentMessages()->get(),
              'received' => $request->user()->messages()->get()
            ]
          ];
          return view('messages.all')->with($with);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
          'receiver_id' => 'required',
          'message' => 'required'
        ]);

        $user = auth()->user();
        $message = $user->sentMessages()->create([
          'receiver_id' => $request->receiver_id,
          'message' => $request->message
        ]);

//        $message->receiver->notify(new \App\Notifications\MessageReceived($message));
        if($request->expectsJson()){
          return response()->json([
            'success' => true,
            'message' => $message
          ]);
        }
        else{
          return view('messages.success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Message::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        if($message){
          $delete = $message->delete();
          if($delete){
            return $message;
          }
        }
    }

    public function getSendMessageView($id){
      $team = \App\Team::findOrFail($id);
      $with = [
        'team' => $team
      ];
      return view('messages.send')->with($with);
    }
}
