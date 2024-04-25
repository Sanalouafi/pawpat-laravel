<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['type_name' => 'Dog'],
            ['type_name' => 'Cat'],
            ['type_name' => 'Bird'],
            ['type_name' => 'Fish'],
        ];

        DB::table('types')->insert($types);

    }
}
