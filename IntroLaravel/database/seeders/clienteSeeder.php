<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombre' => 'Isa',
                'apellido' => 'Villagran',
                'correo' => 'isa@gmail.com',
                'telefono' => '1234567890'
            ],
            [
                'nombre' => 'Santiago',
                'apellido' => 'Amaya',
                'correo' => 'santi@gmail.com',
                'telefono' => '+9876534567'   
            ],
            [
                'nombre' => 'Lolis',
                'apellido' => 'Zuñiga',
                'correo' => 'lolis@gmail.com',
                'telefono' => '+4567834567'
            ]
        ]);
    }
}
