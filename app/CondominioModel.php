<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondominioModel extends Model
{
    protected $table = "Condominio";
    
	protected $filable =[
					'idCondominio',
					'Condominio',
					'Abrev',
					'CNPJ',
					'Logradouro',
					'Numero',
					'Complemento',
					'Bairro',
					'Cidade',
					'UF',
					'Email1',
					'Email2',
					'Tel1',
					'Tel2',
					'CEP',
					'TipoAnuncioTelaInicial',
					'stream',
					'agendaBloqueada',
					'agendaMaisUm',
					'agencia_apsa',
					'conta_apsa'   ];
	protected $dateformat='d/m/y';
}
