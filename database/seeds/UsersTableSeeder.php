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
        // Create default user for each role
         $user = \App\Models\User::create([
            'name' =>  'super_admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('123456')
        ]);
        $user->attachRole('super_admin');

    }
}
