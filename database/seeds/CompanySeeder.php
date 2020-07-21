<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Sarder705',
            'address_line_1' => 'address_line',
            'address_line_2' => 'address_line_2',
            'address_line_3' => 'address_line_3',
            'province'=>'province',
            'city'=>'Berry',
            'zip'=>'1000',
            'phone'=>'0123456789',
            'fax'=>'0123456789',
            'email'=>'sardar705@gmail.com',
            'website'=>'www.sardar705.xyz',
            'notes'=>'Demo company',
            'created_at'=>now(),
        ]);
    }
}
