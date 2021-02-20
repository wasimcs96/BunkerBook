<?php

use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class UserRoleTableSeeder.
 */
class AdminSeeder extends Seeder
{
  

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
   
        User::find(1)->assignRole('superadmin');
        User::find(2)->assignRole('university');
        User::find(3)->assignRole('student');
        User::find(4)->assignRole('consultant');
     
    }
}
