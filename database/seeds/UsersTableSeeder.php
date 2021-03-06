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

        \App\User::create([
          'name' => 'Test Cheerleader',
          'email' => 'test.cheerleader@gmail.com',
          'password' => bcrypt('n1nt3nd0'),
          'type' => 'student',
        ]);

        \App\User::create([
          'name' => 'Test Coach',
          'email' => 'test.coach@gmail.com',
          'password' => bcrypt('n1nt3nd0'),
          'type' => 'coach',
        ]);

        /*
        42
        43
        59
        57


        */
        $users = \App\User::where('id','>',3)->get();
        $users->each(function($item,$key){
          $item->delete();
        });
//         factory(App\User::class, 1000)->create()->each(function($u){
//           $u->skillSet()->save(factory(App\Skill::class)->make());
//           $u->videos()->save(factory(App\Video::class)->make());
//         });
    }
}
