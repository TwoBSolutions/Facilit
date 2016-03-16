<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServicoModel extends Model
{
    protected $table = 'OrdemSevico';

    protected $fillable = [
	'idOrdemServico',
	'idPrestador',
	'idCondominio',
	'idMorador',
	'Data',
	'Area',
	'Acao',
	'Necessidade',
	'Item',
	'Marca',
	'Modelo',
	'nSerie',
	'Garantia',
	'NecessidadePercebida',
	'Observacoes',
	'idSolicitacaoEvento',
	'DataFim',
	'Finalizada',
	'DataFimEstimada'];

public $timestamps = false;
}
