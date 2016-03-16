<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitacaoEventoModel extends Model
{
    

    protected $table = 'SolicitacaoEvento';

    protected $fillable =[
'idSolicitacaoEvento',
'idArea',
'idEventoTipo',
'DataEvento',
'DescUsuario',
'NomeAutorizado',
'RGAutorizado',
'HoraIni',
'HoraFim',
'CodRegistro',
'idMorador',
'idCondominio',
'subEvento',
'qtdPessoas',
'datahora',
'Bloco',
'Andar',
'Coluna',
'idAreaRef',
'DataEventoAte',
'OBS',
'idEquipe',
'idApartamento',
'ImagemInicio1',
'ImagemInicio2',
'ImagemFim1',
'ImagemFim2'
];
public $timestamps = false;
}
