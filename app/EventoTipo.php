<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoTipo extends Model
{
    protected $table = "EventoTipo";

    protected $fillable = [
'idEventoTipo',
'idEvento',
'idTipo'
    ];

    protected $timestamps = false;
}
