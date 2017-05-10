<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class NotificationController extends Controller
{
    //
    public function webPush(Request $request){
      //var_dump($request->all());
      //exit();
      $user = User::find($request->id);
      //var_dump($user);
      //exit();
      $user->updatePushSubscription($request->input('subscription.endpoint'), $request->input('subscription.keys.p256dh'), $request->input('subscription.keys.auth'));
      $user->notify(new \App\Notifications\GenericNotification());
      return response()->json([
        'success' => true
      ]);
    }
}
