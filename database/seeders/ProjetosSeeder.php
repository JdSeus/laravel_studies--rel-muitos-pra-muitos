<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(
            [
            'nome'=>'Sistema de Alocação de Recursos',
            'estimativa_horas'=>200
            ]
        );
        DB::table('projetos')->insert(
            [
            'nome'=>'Sistema de Bibliotecas',
            'estimativa_horas'=>1000
            ]
        );
        DB::table('projetos')->insert(
            [
            'nome'=>'Sistema de Vendas',
            'estimativa_horas'=>2000
            ]
        );
        DB::table('projetos')->insert(
            [
            'nome'=>'Novo Sistema',
            'estimativa_horas'=>5000
            ]
        );
    }
}
