<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticulosController extends Controller
{
    //
    public function noticias()
    {
        return view('web.pages.articulos');
    }

    public function alertaroja()
    {
        return view('web.pages.articulos');
    }

    public function detalle_articulo()
    {
        return view('web.pages.detalle_articulo');
    }
}
