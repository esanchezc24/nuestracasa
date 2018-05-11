<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BancosController extends Controller
{
    //
    public function bancos()
    {
        return view('web.pages.bancos');
    }

    public function bcp()
    {
        return view('web.pages.detalle_banco');
    }

    public function interbank()
    {
        return view('web.pages.detalle_banco');
    }

    public function scotia()
    {
        return view('web.pages.detalle_banco');
    }

    public function bn()
    {
        return view('web.pages.detalle_banco');
    }

    public function gnb()
    {
        return view('web.pages.detalle_banco');
    }

    public function banbif()
    {
        return view('web.pages.detalle_banco');
    }

    public function bbva()
    {
        return view('web.pages.detalle_banco');
    }

    public function mibanco()
    {
        return view('web.pages.detalle_banco');
    }
}
