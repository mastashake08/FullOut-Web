<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        \App\User::create([
          'name' => 'Test Cheerleader',
          'email' => 'test.cheerleader@gmail.com',
          'password' => bcrypt('n1nt3nd0'),
          'type' => 'student',
          'address' => '113 East Mason Ave. Danville, KY 40422',
          'phone' => '8594024863'
        ]);

        \App\User::create([
          'name' => 'Test Coach',
          'email' => 'test.coach@gmail.com',
          'password' => bcrypt('n1nt3nd0'),
          'type' => 'coach',
          'address' => '113 East Mason Ave. Danville, KY 40422',
          'phone' => '8594024863'
        ]);
        */
         factory(App\User::class, 1000)->create();
    }
}
