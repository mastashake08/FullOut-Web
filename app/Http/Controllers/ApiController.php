<?php

namespace App\Http\Controllers;

use App\MainInformationCoach;
use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    //
    public function __construct(){
      $this->client_id = 3;
      $this->client_secret = 'wqWMsdgm78h5Pug848g2Aw8DudOCZNQyNC5fK5be';
    }

    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);
        $user = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => bcrypt($request->password)
        ]);
        if($request->type == 'student'){
            $user->mainInformationStudent()->Create([
                'address' => $request->address,
                'phone' => $request->phone,
                'gender' => $request->gender,
            ]);
        }

      $http = new \GuzzleHttp\Client;

        try {
            $response = $http->post('http://www.full-out.net/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $this->client_id,
                    'client_secret' => $this->client_secret,
                    'username' => $user->email,
                    'password' => $request->password,
//              'redirect_uri' => 'http://localhost',
                    'scope' => '*',
                ],
            ]);

        }
        catch(\Exception $e) {
            if(!is_null($e->getResponse()) && !empty($e->getResponse())) {
                var_dump($e->getResponse()->getBody()->getContents());die;
            }
            var_dump($e->getMessage());die;
        }

//      $response = $http->post('http://www.full-out.net/oauth/token', [
//          'form_params' => [
//              'grant_type' => 'password',
//              'client_id' => $this->client_id,
//              'client_secret' => $this->client_secret,
//              'username' => $user->email,
//              'password' => bcrypt($request->password),
////              'redirect_uri' => 'http://localhost',
//              'scope' => '*',
//          ],
//      ]);

      return json_decode((string) $response->getBody(), true);
    }

    public function login(Request $request){

      $http = new \GuzzleHttp\Client;

      $response = $http->post('http://www.full-out.net/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => $this->client_id,
              'client_secret' => $this->client_secret,
              'username' => $request->email,
              'password' => $request->password,
              'scope' => '',
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
