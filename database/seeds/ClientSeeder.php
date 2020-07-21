<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'title' => 'Mr',
            'first_name' => 'John',
            'middle_name' => 'Unknown',
            'last_name' => 'Doe',
            'address_line_1' => 'Flat 140',
            'address_line_2' => 'Queens Road',
            'address_line_3' => 'Plaistow',
            'zip_code' => '1000',
            'province' => 'Quebec',
            'city' => 'Berry',
            'email'=>'sardar705@gmail.com',
            'phone_number'=>'0124d56799',
            'mobile_number'=>'0124d56799',
            'date_of_birth'=>'1990-06-06',
            'marriage_day'=>'2006-01-01',
            'client_type'=>'Seller',
            'client_photograph'=>null,
            'agent_id'=>1,
            'notes'=>'Some note here',
            'status'=>1,
            'created_at'=> now()
        ]);
    }
}
