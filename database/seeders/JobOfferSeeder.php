<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobOffer::truncate();

        JobOffer::create(['name' =>'TRABAJO 1', 'state_id' => '1']);
        JobOffer::create(['name' =>'TRABAJO 2', 'state_id' => '1']);
        JobOffer::create(['name' =>'TRABAJO 3', 'state_id' => '2']);
    }
}
