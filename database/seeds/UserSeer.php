<?php

use Illuminate\Database\Seeder;

class UserSeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Ismael Haytam',
            'email' => 'anonismaaa@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
