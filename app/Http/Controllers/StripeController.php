<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    //
    public function handleRedirect(Request $request){
      $code = $request->code;
      $data = array("client_secret" => env('STRIPE_SECRET'), "code" => $code,"grant_type" => "authorization_code");
      $data_string = json_encode($data);

      $ch = curl_init('https://connect.stripe.com/oauth/token');
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_string))
      );

      $result = curl_exec($ch);
      $result = json_decode($result,true);
      $user = auth()->user();
      $user->stripe_account_id = $result["stripe_user_id"];
      $user->save();
      dd($user);

    }
}
