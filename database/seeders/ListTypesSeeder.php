<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_types')->insert([
            'name' => 'Identificación',
        ]);

        DB::table('list_types')->insert([
            'name' => 'Tercero',
        ]);

        DB::table('list_types')->insert([
            'name' => 'Contribuyente',
        ]);

        DB::table('list_types')->insert([
            'name' => 'Ciudad',
        ]);

        DB::table('list_types')->insert([
            'name' => 'Departamento',
        ]);


    }
}
