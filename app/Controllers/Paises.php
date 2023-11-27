<?php

namespace App\Controllers;

class Paises extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function active(): string
    {
        $cambiar['seleccionado'] = '';
        return view('welcome_message');
    }

    // Funcion coches
    //URL
    //
    // @return string un conjuntos de vistar para configurar una pagina web

    public function mostrar(): string
    {
        $datos['titulo'] = 'Paises';

        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('templates/footer');
    }
    public function inicio(): string
    {
        $datos['titulo'] = 'inicio';

        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/inicio'). view('templates/footer');
    }
    public function japon(): string
    {
        $datos['titulo'] = 'Japon';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/japon'). view('templates/footer');

    }
    public function italia(): string
    {
        $datos['titulo'] = 'Japon';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/italia'). view('templates/footer');

    }
    public function grecia(): string
    {
        $datos['titulo'] = 'Japon';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/grecia'). view('templates/footer');

    }
    public function korea(): string
    {
        $datos['titulo'] = 'korea';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/korea'). view('templates/footer');

    }
}
