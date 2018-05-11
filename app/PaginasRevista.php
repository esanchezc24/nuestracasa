<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaginasRevista extends Model
{
    //
    protected $table = "paginas_revista";
    protected $fillable = ['img', 'num_pag', 'revista_id', 'estado', 'visible', 'created_by' ];
}
