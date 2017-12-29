<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = \App\User::where('email','test.coach@gmail.com')->first();
//        $school = $user->school()->create([
        $school = \App\School::create([
          'user_id' => $user['id'],
          'name' => 'Test University',
          'logo' => '/',
          'description' => 'This is a test',
          'office_phone' => '888-888-8888',
          'cell_phone' => '888-888-8888',
          'office_address' => '111 Test Drive Somewhere, CA',
          'in_state_tuition' => '5000',
          'out_state_tuition' => '10000',
          'website' => 'https://test.edu',
          'min_gpa' => '2.0',
          'dob' => '111',
          'other_testing' => '111',
          'number_hours' => '111',
          'popular_scholarship_outside_program' => '111',
          'min_gpa_transfer' => '2.4',
          'gpa_needed_for_team' => '2.3',
          'act_score' => '15',
          'sat_score' => '1250'
        ]);
        $school->teams()->create([
          'team_name' => 'Team A',
          'coach_name' => 'Coach Johnson',
          'mascot' => 'Bulldogs',
          'team_type' => 'women',
          'description' => 'This is the A Team!',
          'team_responsibilities' => '111!',
          'number_members' => '111',
          'average_room' => '111!',
          'skills' => '111!'
        ]);

        DB::table('users')->update([
            'school_id' => 1
        ]);
    }
}
