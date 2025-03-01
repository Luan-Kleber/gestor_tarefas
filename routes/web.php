<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    try {
        DB::connection()->getPdo(); // irá se concetar com o banco
        echo "Conexão Efetuada com Sucesso. " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possível conectar ao banco de dados, Erro: {$e->getMessage()}");
    }

});
