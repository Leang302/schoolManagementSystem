<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'leang',
            'email' => 'leang@gmail.com',
            'password' => Hash::make('123'),
            'role'=>1
        ]);
        // $user = new User;
        // $user->email = '';
        // $user->password = Hash::make('123');
        // $user->role = 1;
        // $user->save();
        // \App\Models\User::factory(10)->create();
    }
}
