<?php

use App\User;
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
        factory(\App\User::class, 200)->create();

        $user        = User::find(1);
        $user->name  = 'dongjun';
        $user->email = 'admin@246ha.com';
        $user->save();
    }
}
