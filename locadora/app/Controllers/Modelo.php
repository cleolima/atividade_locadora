<?php

namespace App\Controllers;

use App\Models\ModeloModel;

class Modelo extends BaseController
{
    public function index()
    {
        $modeModel = new ModeloModel;
        $todosModelo = $modeModel->findAll();

        foreach( $todosModelo as $key => $linha)
        {
             $todosModelo[$key]['excluir'] = '<a href="Delete/'.$linha['TB_MODELO_ID'] . '">Deletar</a>';
             $todosModelo[$key]['update'] = '<a href="Update/'.$linha['TB_MODELO_ID'] . '">Atualizar</a>';
        }


        $data['tabela'] =  $todosModelo;
        echo view('modelo_list_view', $data);
    }

    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_MODELO_ID'])) {
            $TB_MODELO_ID = $this->request->getPost()['TB_MODELO_ID'];
        } else {
            $TB_MODELO_ID = FALSE;
        }


        $descricao = $this->request->getPost()['TB_MODELO_DESC'];
        $observacao = $this->request->getPost()['TB_MODELO_OBS'];
        $dataModelo = $this->request->getPost()['TB_MODELO_DATA'];
                             
                                
        
        $modeModel = new ModeloModel;

        $data = [
            'TB_MODELO_DESC'=> $descricao,
             'TB_MODELO_OBS'=>$observacao,
             'TB_MODELO_DATA'=>$dataModelo
        ];
            

        
        if($TB_MODELO_ID != FALSE) {
            $data['TB_MODELO_ID'] = $TB_MODELO_ID;
        }

 

        $result = $modeModel->save($data);
        var_dump($result);        

    }

    public function inserir()
    {  

        $data['titulo'] = 'Inserir novo Funcionario';
        $data['acao']='inserir'; 

        
        echo view('modelo_form',$data);
    }

    public function Update($TB_MODELO_ID)
    {
        
        $modeModel = new ModeloModel;
        
        $todosModelo = $modeModel->find($TB_MODELO_ID);
        $data['tabela'] = $todosModelo;        
        
        echo view('modelo_updateform', $data);

    }

    public function Delete($TB_MODELO_ID)
    {
        $modeModel = new ModeloModel;

        
        $result = $modeModel->delete($TB_MODELO_ID);
        
        //return redirect()->back();
        var_dump($result);
        
        
    }
}