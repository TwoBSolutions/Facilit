<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    protected $table = 'Area';

    protected $fillable = [
'idArea',
'idCondominio',
'idTipo',
'Area'
    ];
}
