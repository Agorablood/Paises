<?php

namespace App\Controllers;

class Vehiculos extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    // Funcion coches
    //URL
    //
    // @return string un conjuntos de vistar para configurar una pagina web
    public function coches(): string
    {
        $datos['titulo'] = 'Paises';

        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/Paises') . view('templates/footer');
    }
    public function aviones(): string
    {
        return "";
    }
}
