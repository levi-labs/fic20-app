<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 1 company
        \App\Models\Company::create(
            [
                'name' => 'Company 1',
                'email' => 'j8kZL@example.com',
                'phone' => '1234567890',
                'website' => 'company1.com',
                'logo' => 'company1.png',
                'address' => 'Company 1 Address',
                'status' => 'active',
                'total_users' => 10,
                'clock_in_time' => '09:00:00',
                'clock_out_time' => '18:00:00',
                'early_clock_in_time' => 15,
                'allow_clock_out_till' => 15,
                'self_clocking' => 1,



            ]
        );
    }
}
