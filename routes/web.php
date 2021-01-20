<?php

use Illuminate\Support\Facades\Route;
use App\Models\Projeto;
use App\Models\Desenvolvedor;
use App\Models\Alocacao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/desenvolvedor_projeto', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach($desenvolvedores as $d) {
        echo "<p>Nome do Desenvolvedor: " . $d->nome . "</p>";
        echo "<p>Cargo: " . $d->cargo . "</p>";
        if (count($d->projetos) > 0) {
            echo "Projetos: <br>";
            echo "<ul>";
            foreach($d->projetos as $p) {
                echo "<li>";
                echo "Nome: " . $p->nome . " | ";
                echo "Estimativa de horas: " . $p->estimativa_horas . " | ";
                echo "</li>";
            }
            echo "</ul>";

        }
        echo "<br>";
    }
});
