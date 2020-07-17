<?php

use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([
            'first_name' => 'Sardar',
            'last_name' => 'Yusuf',
            'email'=>'sardar705@gmail.com',
            'cell'=>'0124d56799',
            'company_id'=>'1',
            'type'=>'Both',
            'notes'=>'Demo Agent',
            'created_at'=> now()
        ]);
    }
}
