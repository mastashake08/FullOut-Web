<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class NotificationController extends Controller
{
    //
    public function webPush(Request $request){
      $user = $request->user;
      $user->updatePushSubscription($request->input('endpoint'), $request->input('keys.p256h'), $request->input('keys.auth'));
      $user->notify('GenericNotification');
      return response()->json([
        'success' => true
      ]);
    }
}
