<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrdemServicoModel;
use App\SolicitacaoEventoModel;
use App\EventoTipo;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function image($file = null){
        if ($file) {

            try {

                $filename = md5(uniqid(rand(), true)) . '.jpg';

                $path = public_path('files/pictures/');

                if (!file_exists($path)) {

                    mkdir($path, 0755);

                }

                Image::make($image->getRealPath())->resize(800, 600)->save($path . $filename);

            } catch (Exception $e) {

                

            }

        } else {

           return false;

        }
    }

    private function codigoRegistro()
    {
        $Soli = SolicitacaoEventoModel::orderBy('idSolicitacaoEvento', 'desc')->first();
    

        return $Soli->CodRegistro + 1;
    }

    public function PutOrder(Request $request)
    {   



        $SS = new SolicitacaoEventoModel;
        $SS->idCondominio = $request->CONDOMINIO;
        $SS->subEvento = $request->SOLICITAR;
        $SS->datahora = $request->DATA;
        $SS->Bloco = $request->BLOCO;
        $SS->Andar = $request->ANDAR;
        $SS->Coluna = $request->COLUNA;
        $SS->OBS = $request->OBSERVACAO;
        $SS->CodRegistro = $this->codigoRegistro();
        $SS->idEventoTipo = 6;
        $SS->DataEvento = date("Y-m-d H:i:s"); 
        $SS->idArea = $request->idArea;
        $SS->ImagemInicio1 = $this->image($request->file);
        if ($SS->save()) {
           
            // $OS = new OrdemServicoModel;
            // $OS->idCondominio = $request->CONDOMINIO;
            // $OS->Area = $request->NomeArea;
            // $OS->Necessidade = $request->SOLICITAR;
            // $OS->Acao = 'SOLICITAR';
            // $OS->Item = $request->ITEM;
            // $OS->NecessidadePercebida = $request->SOLICITAR;
            // $OS->Observacoes = $request->OBSERVACAO;
            // $OS->idSolicitacaoEvento = $SS->idSolicitacaoEvento;
           
            // $OS->Data = $request->DATA;
            // if ($OS->save()) {
            //    return ['status' => 'sucesso', 'image' => $filename, 'response' => $order];
            // }
        return ['status' => 'sucesso', 'response' => 'Solicitação Criada com sucesso, mas ouve um erro ao criar a Ordem de serviço'];


        }

        return ['status' => 'erro', 'response' => 'Não Foi possivel criar a solicitação'];



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        return SolicitacaoEventoModel::orderBy('idSolicitacaoEvento', 'desc')->get()->take(15);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
