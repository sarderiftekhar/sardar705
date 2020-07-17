<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sardar Yusuf',
            'username' => 'sardar705',
            'role_id' => '1',
            'email' => 'sardar705@gmail.com',
            'password' => Hash::make('abc123'),
        ]);
    }
}
