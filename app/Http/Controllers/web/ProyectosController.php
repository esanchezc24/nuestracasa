<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyectosController extends Controller
{
    //
    public function proyectos()
    {
        return view('web.pages.proyectos');
    }

    public function alquiler()
    {
        return view('web.pages.proyectos');
    }

    public function venta()
    {
        return view('web.pages.proyectos');
    }

    public function detalle_proyecto()
    {
        return view('web.pages.detalle_proyecto');
    }
}
