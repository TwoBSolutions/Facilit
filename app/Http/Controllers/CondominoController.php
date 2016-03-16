<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CondominioModel;
use App\AreaModel;
use App\BlocoModel;
use App\ItemModel;

class CondominoController extends Controller
{
    

    public function getAll(){
         $condominios = CondominioModel::get();
    

        foreach ($condominios as $key => $condominio) {
            $condominio['areas'] = AreaModel::where('idCondominio',$condominio['idCondominio'])
            ->join('Tipo','Tipo.idTipo','=','Area.idTipo')
            ->select('Area.*','Tipo.Tipo as TipoArea','Tipo.*')
            ->get();
           
        }


        return $condominios;
    }

    public function getBlocos(){

        return BlocoModel::get();
    }

     public function getItens($area){

        return ItemModel::join('ItemArea','ItemArea.idItem','=','Item.idItem')->where('ItemArea.idArea',$area)->get();
    }
}
