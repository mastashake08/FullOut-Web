<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    //
    public function register(Request $request){
      $user = User::Create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone' => $request->phone,
        'password' => bcrypt($request->password)
      ]);

      $http = new \GuzzleHttp\Client;

      $response = $http->post('http://192.241.140.151/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => '1',
              'client_secret' => 'xrQDFd3xndnGSTJQ34DeJhroJHQ34NjmbhvxuXaO',
              'username' => $request->email,
              'password' => $request->password,
              'scope' => '',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);
    }
}
