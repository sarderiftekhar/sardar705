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
            'middle_name' => 'Mohammad',
            'last_name' => 'Yusuf',
            'email'=>'sardar705@gmail.com',
            'mobile'=>'0124d56799',
            'area'=>'Toronto',
            'company_id'=>'1',
            'type'=>'Both',
            'designation'=>'Sales Person',
            'photograph'=>null,
            'notes'=>'Demo Agent',
            'created_at'=> now()
        ]);
    }
}
