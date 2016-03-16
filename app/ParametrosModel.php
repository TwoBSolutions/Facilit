<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ParametrosModel extends Model
{
    protected $table = "parametros_os";
    
    protected $filable = ['tempo_para_resolucao', 'alerta1', 'alerta2', 'alerta3', 'email_alerta1', 'email_alerta2', 'email_alerta3', 'sendmail', 'descricao'];
}
