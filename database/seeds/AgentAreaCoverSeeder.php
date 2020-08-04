<?php

use Illuminate\Database\Seeder;

class AgentAreaCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agent_area_covers')->insert([
            'area'=>'Edmonton',
            'agent_id'=>1
        ]);
    }
}
