<?php

namespace App\Controllers;

class Paises extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function mostrar(): string
    {
        $datos['titulo'] = 'Paises';
        
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('templates/footer');
    }
    public function inicio(): string
    {
        $datos['titulo'] = 'inicio';
        $datos['seleccionado'] = 'inicio';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral'). view('content/inicio') . view('templates/footer');
    }
    public function japon(): string
    {
        $datos['titulo'] = 'japon';
        $datos['seleccionado'] = 'japon';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/japon'). view('templates/footer');

    }
    public function italia(): string
    {
        $datos['titulo'] = 'italia';
        $datos['seleccionado'] = 'italia';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/italia'). view('templates/footer');

    }
    public function grecia(): string
    {
        $datos['titulo'] = 'grecia';
        $datos['seleccionado'] = 'grecia';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/grecia'). view('templates/footer');

    }
    public function korea(): string
    {
        $datos['titulo'] = 'korea';
        $datos['seleccionado'] = 'korea';
        return view('templates/head', $datos) .view ('templates/header'). view('templates/menu_lateral') . view('content/korea'). view('templates/footer');

    }
}
