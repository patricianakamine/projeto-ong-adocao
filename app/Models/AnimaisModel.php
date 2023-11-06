<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnimaisModel extends Model
{
    use HasFactory;

    protected $fillable=['nome','galeria_imagens'];
    public function buscarTodosOsAnimais()
    {
        $resultado = DB::select('SELECT * FROM animais');
        return $resultado;
    }

    public function buscarAnimalPorEspecie($especie)
    {

        $resultado = DB::select('SELECT * FROM animais WHERE especie = ? ',[$especie]);
        return $resultado;
    }

    public function buscarAnimalPorRaca($raca)
    {
        $resultado = DB::select('SELECT * FROM animais WHERE raca = ? ',[$raca]);
        return $resultado;
    }

    public function buscarAnimalPorLocal($local)
    {
        $resultado = DB::select('SELECT * FROM animais WHERE local = ? ',[$local]);
        return $resultado;
    }

    public function buscarAnimalPorPorte($porte)
    {
        $resultado = DB::select('SELECT * FROM animais WHERE porte = ? ',[$porte]);
        return $resultado;
    }

    public function buscarAnimalPorGenero($genero)
    {
        $resultado = DB::select('SELECT * FROM animais WHERE genero = ? ',[$genero]);
        return $resultado;
    }

}
