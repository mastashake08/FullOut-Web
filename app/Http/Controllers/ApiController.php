<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    //
    public function __construct(){
      $this->client_id = 6;
      $this->client_secret = 'FWPfYiFFvPN8EH7QOIVho5kocTbtMifinqwg0XfQ';
    }
    public function register(Request $request){
      $user = User::Create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone' => $request->phone,
        'password' => bcrypt($request->password)
      ]);

      $http = new \GuzzleHttp\Client;

      $response = $http->post('/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => $this->client_id,
              'client_secret' => $this->client_secret,
              'username' => $user->email,
              'password' => $request->password,
              'scope' => '*',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);
    }

    public function login(Request $request){

      $http = new \GuzzleHttp\Client;

      $response = $http->post('/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => $this->client_id,
              'client_secret' => $this->client_secret,
              'username' => $request->email,
              'password' => $request->password,
              'scope' => '*',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);
    }

    public function test(){
      $http = new \GuzzleHttp\Client;
      $response = $http->post('http://192.241.140.151/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => $this->client_id,
              'client_secret' => $this->client_secret,
              'username' => 'jyrone.parker@gmail.com',
              'password' => 'n1nt3nd0',
              'scope' => '*',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);
    }


}
