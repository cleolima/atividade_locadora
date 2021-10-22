<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;
use App\Models\CargoModel;

class Funcionario extends BaseController
{
    public function index()
    {
        $funcModel = new FuncionarioModel;
        $todosFunc = $funcModel->findAll();

        foreach( $todosFunc as $key => $linha)
        {
             $todosFunc[$key]['excluir'] = '<a href="Delete/'.$linha['TB_FUNCIONARIO_ID'] . '">Deletar</a>';
             $todosFunc[$key]['update'] = '<a href="Update/'.$linha['TB_FUNCIONARIO_ID'] . '">Atualizar</a>';
        }
        $automoveisSemIds = array();

        foreach ($todosFunc as $key => $value) {
             unset($value['TB_CARGO_ID']);         
            $automoveisSemIds[] = $value;
        }
        $data = array();

        $data['tabela'] =  $automoveisSemIds;
        echo view('func_list_view', $data);
    }

    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_FUNCIONARIO_ID'])) {
            $TB_FUNCIONARIO_ID = $this->request->getPost()['TB_FUNCIONARIO_ID'];
        } else {
            $TB_FUNCIONARIO_ID = FALSE;
        }


        $nome = $this->request->getPost()['TB_FUNCIONARIO_NOME'];
        $telefone = $this->request->getPost()['TB_FUNCIONARIO_TEL'];
        $dataContrato = $this->request->getPost()['TB_FUNCIONARIO_DT_CONTRATO'];
        $cargoId = $this->request->getPost()['TB_CARGO_ID'];                      
                                
        
        $funcModel = new FuncionarioModel;

        $data = [
            'TB_FUNCIONARIO_NOME'=> $nome,
             'TB_FUNCIONARIO_TEL'=>$telefone,
             'TB_FUNCIONARIO_DT_CONTRATO'=>$dataContrato,
             'TB_CARGO_ID'=>$cargoId
        ];
               

        
        if($TB_FUNCIONARIO_ID != FALSE) {
            $data['TB_FUNCIONARIO_ID'] = $TB_FUNCIONARIO_ID;
        }

 

        $result = $funcModel->save($data);
        var_dump($result);        

    }

    public function inserir()
    {  

        $data['titulo'] = 'Inserir novo Funcionario';
        $data['acao']='inserir'; 

        $cargoModel = new CargoModel;
        $cargoLista = $cargoModel->findAll();
        
        helper('form');
        $listaCargo = array();      


        foreach ($cargoLista as $key => $value) {
        $listaCargo[$value['TB_CARGO_ID']] =  $value['TB_CARGO_NOME'] ;
        }  
          

        $data = array();    
        $data['comboCargo'] = form_dropdown('TB_CARGO_ID', $listaCargo);          
        

        
        echo view('funcionario_form',$data);
    }

    public function Update($TB_FUNCIONARIO_ID)
    {
        
        $funcModel = new FuncionarioModel;
        
        $todosFunc = $funcModel->find($TB_FUNCIONARIO_ID);
        $data['tabela'] = $todosFunc;        
        
        echo view('funcinario_updateform', $data);

    }

    public function Delete($TB_FUNCIONARIO_ID)
    {
        $funcModel = new FuncionarioModel;

        
        $result = $funcModel->delete($TB_FUNCIONARIO_ID);
        
        //return redirect()->back();
        var_dump($result);
        
        
    }

}