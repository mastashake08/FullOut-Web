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
        \App\User::Create([
          'email'=>  'renu.sharma@daffodilsw.com',
          'password' => bcrypt('fullout'),
          'name' => 'Renu',
          'phone'=>'555-555-5555',
          'address' => '101 Main Street, City, India'
        ]);
    }
}
