<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentType::truncate();

        DocumentType::create(['name' =>'NIP', 'description' => 'NUMERO DE IDENTIFICACION PERSONAL']);
        DocumentType::create(['name' =>'NIT', 'description' => 'NUMERO DE IDENTIFICACION TRIBUTARIA']);
        DocumentType::create(['name' =>'TI', 'description' => 'TARJETA DE IDENTIDAD']);
        DocumentType::create(['name' =>'PAP', 'description' => 'PASAPORTE']);

    }
}
