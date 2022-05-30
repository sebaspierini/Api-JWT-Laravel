<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create(['email' =>'seba.i.pierini@gmail.com', 'password' => bcrypt('123456789'), 'name' => 'Sebastian', 'document_type_id' => '1', 'document_number' => '33744884']);
        User::create(['email' =>'nadia@gmail.com', 'password' => bcrypt('123456789'), 'name' => 'Nadia', 'document_type_id' => '2', 'document_number' => '33744886']);
    }
}
