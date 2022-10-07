<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['CC', 'Cédula de Ciudadanía'],
            ['CE', 'Cédula de Extranjería'],
            ['TI', 'Tarjeta de Identidad'],
        ];

        foreach ($data as $typeDocument){

            TypeDocument::create([
                'tdd' => $typeDocument[0],
                'description' => $typeDocument[1],
            ]);

        }

    }
}
