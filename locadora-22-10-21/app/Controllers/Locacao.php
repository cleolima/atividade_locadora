<?php

namespace App\Controllers;
use App\Models\LocacaoModel;
use App\Models\ClienteModel;
use App\Models\FuncionarioModel;
use App\Models\AutomovelModel;

class Locacao extends BaseController
{
    public function index()
    {
        $locModel = new LocacaoModel;
        $TodosLocacao = $locModel->findAll();

        foreach($TodosLocacao as $key => $linha)
        {
           $TodosLocacao[$key]['excluir'] = '<a href="Delete/'.$linha['TB_LOCACAO_ID'] . '">Deletar</a>';
            $TodosLocacao[$key]['update'] = '<a href="Update/'.$linha['TB_LOCACAO_ID'] . '">Atualizar</a>';
        }
        $automoveisSemIds = array();

    foreach ($TodosLocacao as $key => $value) {
      unset($value['TB_CLIENTE_ID']);
      unset($value['TB_FUNCIONARIO_ID']);
      unset($value['TB_AUTOMOVEL_ID']);
         
      $automoveisSemIds[] = $value;
    }
    $data = array();

    $data['tabela'] = $automoveisSemIds;
        echo view('locacao_list_view', $data);
        
    }

    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_LOCACAO_ID'])) {
            $TB_LOCACAO_ID = $this->request->getPost()['TB_LOCACAO_ID'];
        } else {
            $TB_LOCACAO_ID = FALSE;
        }

        $tipo = $this->request->getPost()['TB_LOCACAO_TIPO'];
        $valor = $this->request->getPost()['TB_LOCACAO_VALOR'];        
        $dt_inicio = $this->request->getPost()['TB_LOCACAO_DT_INICIO'];
        $dt_fim = $this->request->getPost()['TB_LOCACAO_DT_FIM'];
        $clienteId = $this->request->getPost()['TB_CLIENTE_ID'];
        $funcionarioId = $this->request->getPost()['TB_FUNCIONARIO_ID'];
        $autoId = $this->request->getPost()['TB_AUTOMOVEL_ID'];
    

        $locModel = new LocacaoModel;

        $data = [

           'TB_LOCACAO_TIPO'=> $tipo, 
           'TB_LOCACAO_VALOR'=>$valor,          
           'TB_LOCACAO_DT_INICIO'=> $dt_inicio,
           'TB_LOCACAO_DT_FIM'=> $dt_fim,
           'TB_CLIENTE_ID'=> $clienteId,        
           'TB_FUNCIONARIO_ID'=>$funcionarioId,
           'TB_AUTOMOVEL_ID'=> $autoId        
        ];

        if($TB_LOCACAO_ID != FALSE) {
            $data['TB_LOCACAO_ID'] = $TB_LOCACAO_ID;
        }

 

        $result = $locModel->save($data);
        var_dump($result);     

        
    }

    public function inserir()
    {  

        //$data['titulo'] = 'Inserir novo Cliente';
        //$data['acao']='inserir'; 

        $cliModel = new ClienteModel;
        $clienteLista = $cliModel->findAll();
        $funcModel = new FuncionarioModel;
        $funcionarioLista = $funcModel->findAll();
        $autoModel = new AutomovelModel;
        $automovelLista = $autoModel->findAll();

    
        helper('form');
        $listaCliente = array();
        $listaFuncionario = array();
        $listaAutomovel = array();


        foreach ($clienteLista as $key => $value) {
        $listaCliente[$value['TB_CLIENTE_ID']] =  $value['TB_CLIENTE_NOME'] ;
        }  
        foreach ($funcionarioLista as $key => $value) {
        $listaFuncionario[$value['TB_FUNCIONARIO_ID']] =  $value['TB_FUNCIONARIO_NOME'] ;
        } 
        foreach ($automovelLista as $key => $value) {
        $listaAutomovel[$value['TB_AUTOMOVEL_ID']] =  $value['TB_AUTOMOVEL_NOME'] ;
        }  

        $data = array();    
        $data['comboCliente'] = form_dropdown('TB_CLIENTE_ID', $listaCliente);          
        $data['comboFuncionario'] = form_dropdown('TB_FUNCIONARIO_ID', $listaFuncionario);
        $data['comboAutomovel'] = form_dropdown('TB_AUTOMOVEL_ID', $listaAutomovel);

        
        echo view('locacao_form',$data);
    }

    public function Update($TB_LOCACAO_ID)
    {
        
        $locModel = new LocacaoModel;

        
        $TodosLocacao = $locModel->find($TB_LOCACAO_ID);
        $data['tabela'] = $TodosLocacao;        
        
        echo view('locacao_updateform', $data);

    }

    

    public function Delete($TB_LOCACAO_ID)
    {
        $locModel = new LocacaoModel;
        
        $result = $locModel->delete($TB_LOCACAO_ID);
        
        //return redirect()->back();
        var_dump($result);
        
        
    }

}