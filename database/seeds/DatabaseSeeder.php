<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::Create([
          'email'=>  'renu.sharma@daffodilsw.com',
          'password' => bcrypt('fullout'),
          'name' => 'Renu'
        ]);
    }
}
