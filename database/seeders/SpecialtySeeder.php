<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Ninguna'],
            ['Medico General'],
            ['Psicologo'],
            ['Root']
        ];

        foreach ($data as $specialty){

            Specialty::create([
                'desc_speci' => $specialty[0],
            ]);

        }
    }
}
