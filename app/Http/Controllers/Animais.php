<?php

namespace App\Http\Controllers;

use App\Models\AnimaisModel;
use function PHPUnit\Framework\isEmpty;

class Animais extends Controller
{
    public function mostrarAnimais()
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarTodosOsAnimais();
        dd($resultados);
    }

    public function mostrarAnimaisPorEspecie($especie)
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarAnimalPorEspecie($especie);
        if($resultados == null)
        {
            echo 'nao tem nada';
        }else
        {
            dd($resultados);
        }
    }
    public function mostrarAnimaisPorRaca()
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarAnimalPorEspecie("gato");
        if($resultados == null)
        {
            echo 'nao tem nada';
        }else
        {
            dd($resultados);
        }
    }
    public function mostrarAnimaisPorLocal()
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarAnimalPorEspecie("gato");
        if($resultados == null)
        {
            echo 'nao tem nada';
        }else
        {
            dd($resultados);
        }
    }
    public function mostrarAnimaisPorPorte()
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarAnimalPorEspecie("gato");
        if($resultados == null)
        {
            echo 'nao tem nada';
        }else
        {
            dd($resultados);
        }
    }

    public function mostrarAnimaisPorGenero()
    {
        $animais = new AnimaisModel();
        $resultados = $animais->buscarAnimalPorEspecie("gato");
        if($resultados == null)
        {
            echo 'nao tem nada';
        }else
        {
            dd($resultados);
        }
    }

    public function cadastraAnimais(){
        echo 'animal cadastrado com sucesso!';
    }

}
