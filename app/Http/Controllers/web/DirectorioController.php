<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectorioController extends Controller
{
    //
    public function constructoras()
    {
        return view('web.pages.directorio');
    }

    public function proveedores()
    {
        return view('web.pages.directorio');
    }

    public function inmobiliarias()
    {
        return view('web.pages.directorio');
    }

    public function detalle_directorio()
    {
        return view('web.pages.detalle_directorio');
    }
}
