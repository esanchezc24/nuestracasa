<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        return view('web.pages.index');
    }

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



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
