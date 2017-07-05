<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = new User;
        $user->fullname = "Bundit Nuntates";
        $user->username = "admin";
        $user->email = "bundit_nun@cmru.ac.th";
        $user->password = bcrypt('1234');
        $user->save();
    }
}
