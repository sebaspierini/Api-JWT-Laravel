<?php

namespace Database\Seeders;

use App\Models\Applicant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicants')->truncate();
        DB::table('applicants')->insert([
            'job_offer_id' => '1', 'user_id' => '1' 
        ]);
        DB::table('applicants')->insert([
            'job_offer_id' => '2', 'user_id' => '1' 
        ]);
        DB::table('applicants')->insert([
            'job_offer_id' => '3', 'user_id' => '1' 
        ]);
    }
}
