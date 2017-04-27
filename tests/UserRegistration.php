<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
class UserRegistration extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $created = false;
        try{
          User::create([
            'name' => 'Jyrone Parker',
            'email' => 'jyrone.parker@gmail.com',
            'password' => bcrypt('n1nt3nd0'),
            'type' => 'student',
            'address' => '113 East Mason Ave. Danville, KY 40422'
          ]);
          $created = true;
        }
        catch(Exception $e){

        }
        $this->assertTrue($created);
    }
}
