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
      $user = Auth::user();
      $user->updatePushSubscription($request->input('endpoint'), $request->input('keys.p256dh'), $request->input('keys.auth'));
      $user->notify('GenericNotification');
      return response()->json([
        'success' => true
      ]);
    }
}
