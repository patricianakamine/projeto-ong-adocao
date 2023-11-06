<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Formularios extends Controller
{
   public function mostrarFormularios()
   {
       $formularios = DB::select('SELECT * FROM `formularios`');
       dd($formularios);
   }

   public function preencheFormulario($nome,$animal,$cpf,$email,$celular,$data_nascimento)
   {

   }
}
