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
            'marital_status'=>'single',
            'address_line_1' => 'Flat 140',
            'address_line_2' => 'Queens Road',
            'address_line_3' => 'Plaistow',
            'zip_code' => '1000',
            'province' => 'Quebec',
            'city' => 'Berry',
            'email'=>'sardar705@gmail.com',
            'phone_number'=>'0124156799',
            'mobile_number'=>'0078256799',
            'date_of_birth'=>'1990-06-06',
            'marriage_day'=>'2006-01-01',
            'client_type'=>'Seller',
            'work_phone_number'=>'00882513467',
            'extension'=>'202',
            'client_photograph'=>null,
            'agent_id'=>1,
            'client_rating'=>'A',
            'notes'=>'Some note here',
            'status'=>1,
            'created_at'=> now()
        ]);
    }
}
