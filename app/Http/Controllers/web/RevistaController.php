<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PaginasRevista;

class RevistaController extends Controller
{
    //
    public function revistas()
    {
        return view('web.pages.revistas');
    }

    public function detalle_revista($id)
    {
    	
    	$num_filas = PaginasRevista::where('revista_id',$id)->orderBy('num_pag','asc')->count();

        if($num_filas > 0)
        {
            $contador = PaginasRevista::where('revista_id',$id)->orderBy('num_pag','asc')->skip(0)->take($num_filas - 1)->get();
        }
        else
        {
            $contador = PaginasRevista::where('revista_id',$id)->orderBy('num_pag','asc')->skip(0)->take($num_filas)->get();
        }        

        $galeria = PaginasRevista::where('revista_id',$id)->orderBy('num_pag','asc')->get();

        $ultimo = PaginasRevista::where('revista_id',$id)->orderBy('num_pag','desc')->first(); 


        return view('web.pages.detalle_revista')->with(compact('galeria',$galeria))->with(compact('ultimo',$ultimo))->with(compact('contador',$contador));
    }
}
