<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlocoModel extends Model
{
    protected $table = 'Bloco';

    protected $fillable =[
'idBloco',
'idCondominio',
'Bloco',
'Condominio',
'Abrev',
'CNPJ',
'Andares'
    ];

}
