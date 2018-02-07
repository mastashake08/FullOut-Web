<?php

namespace App\Http\Controllers;

use App\User;
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
        $user_id = auth()->user()->id;
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
            $users = User::whereHas('messages',function($query) use ($user_id){

                $query->where('sender_id',$user_id);

            })->whereHas('sentMessages',function($query) use ($user_id){

                $query->where('receiver_id',$user_id);

            })->get();

            if(!$users){
                $users = json_encode([]);
            }
          $with = [
            'users' => $users
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
        $user_id = $user->id;
        $with_id = $request->receiver_id;

        $messages = Message::where(function($query)use($user_id,$with_id){

            $query->where('sender_id',$user_id)->where('receiver_id',$with_id);

        })->orWhere(function($query)use($user_id,$with_id){

            $query->where('sender_id',$with_id)->where('receiver_id',$user_id);

        })->with(['sender','receiver'])->get();


        if($request->expectsJson()){
          return response()->json([
            'success' => true,
            'message' => $messages
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
    public function show($with_id)
    {
        $user_id = auth()->user()->id;

        $messages = Message::where(function($query)use($user_id,$with_id){

            $query->where('sender_id',$user_id)->where('receiver_id',$with_id);

        })->orWhere(function($query)use($user_id,$with_id){

            $query->where('sender_id',$with_id)->where('receiver_id',$user_id);

        })->with(['sender','receiver'])->get();

        $with_user = User::find($with_id);

        if(!$messages){
            $messages = json_encode([]);
        }
        $with = [
            'messages' => $messages,
            'with_user' => $with_user
        ];

        return view('messages.show')->with($with);


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
