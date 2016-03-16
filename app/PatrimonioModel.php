<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatrimonioModel extends Model
{
    protected $table = 'patrimonio';

    protected $filable =[
			   ' descricao',
				'tipo',
				'documento',
				'fone',
				'fone_2',
				'acesso',
				'status'];
}
