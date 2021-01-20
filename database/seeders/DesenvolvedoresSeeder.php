<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert(
            [
            'nome'=>'Bernardo Silva',
            'cargo'=>'Analista Pleno'
            ]
        );
        DB::table('desenvolvedores')->insert(
            [
            'nome'=>'Carlos Arnaldo',
            'cargo'=>'Analista Senior'
            ]
        );
        DB::table('desenvolvedores')->insert(
            [
            'nome'=>'Paulo Simas',
            'cargo'=>'Programador'
            ]
        );
    }
}
