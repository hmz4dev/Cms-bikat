<?php

use Illuminate\Database\Seeder;
use App\user;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users_info
        User::create([
        'name'      => 'Naseeb ul Hassan',
        'email'     => 'naseebulhassan4@gmail.com',
        'password'  => Hash::make('password'),
        'remember_token' => str_random(10)
        ]);
        
    }
}
