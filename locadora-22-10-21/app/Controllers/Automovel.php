<?php

namespace App\Controllers;
use App\Models\AutomovelModel;
use App\Models\MarcaModel;
use App\Models\ModeloModel;

class Automovel extends BaseController
{
    public function index()
    {
        $autoModel = new AutomovelModel;
        $autoTodos = $autoModel->findAll();

        foreach($autoTodos as $key => $linha)
        {
            $autoTodos[$key]['excluir'] = '<a href="Delete/'.$linha['TB_AUTOMOVEL_ID'] . '">Deletar</a>';
            $autoTodos[$key]['update'] = '<a href="Update/'.$linha['TB_AUTOMOVEL_ID'] . '">Atualizar</a>';
        }

    $automoveisSemIds = array();

    foreach ($autoTodos as $key => $value) {
      unset($value['TB_MARCA_ID']);
      unset($value['TB_MODELO_ID']);
         
      $automoveisSemIds[] = $value;
    }
    $data = array();

    $data['tabela'] = $automoveisSemIds;       
        
    echo view('automovel_view', $data);
        
        

    }

    


    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_AUTOMOVEL_ID'])) {
            $TB_AUTOMOVEL_ID = $this->request->getPost()['TB_AUTOMOVEL_ID'];
        } else {
            $TB_AUTOMOVEL_ID = FALSE;
        }
        
        $nome = $this->request->getPost()['TB_AUTOMOVEL_NOME'];
        $anofab = $this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];        
        $cor = $this->request->getPost()['TB_AUTOMOVEL_COR'];
        $km = $this->request->getPost()['TB_AUTOMOVEL_KM'];
        $valorD = $this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
        $status = $this->request->getPost()['TB_AUTOMOVEL_STATUS'];
        $marcaId = $this->request->getPost()['TB_MARCA_ID'];
        $modeloId = $this->request->getPost()['TB_MODELO_ID'];
        
        
    

        $autoModel = new AutomovelModel;

        $data = [

           'TB_AUTOMOVEL_NOME'=> $nome, 
           'TB_AUTOMOVEL_ANO_FAB'=>$anofab,          
           'TB_AUTOMOVEL_COR'=> $cor,
           'TB_AUTOMOVEL_KM'=> $km,          
           'TB_AUTOMOVEL_VALOR_D'=>$valorD,
           'TB_AUTOMOVEL_STATUS'=> $status,
           'TB_MARCA_ID'=> $marcaId,
           'TB_MODELO_ID'=> $modeloId
           
        ];

        
        if($TB_AUTOMOVEL_ID != FALSE) {
            $data['TB_AUTOMOVEL_ID'] = $TB_AUTOMOVEL_ID;
        }

 

        $result = $autoModel->save($data);
        var_dump($result); 
        
    }

    

    public function inserir()
    {  

         $data['titulo'] = 'Inserir novo Carro';
         $data['acao'] = 'Inserir ';
         $data['msg'] = ' ';

        
        $marca = new MarcaModel;
        $marcasLista = $marca->findAll();
        $modeModel = new ModeloModel;
        $modeloLista = $modeModel->findAll();

    
        helper('form');
        $listaMarcas = array();
        $listaModelo = array();


        foreach ($marcasLista as $key => $value) {
        $listaMarcas[$value['TB_MARCA_ID']] =  $value['TB_MARCA_NOME'] ;
        }  
        foreach ($modeloLista as $key => $value) {
        $listaModelo[$value['TB_MODELO_ID']] =  $value['TB_MODELO_DESC'] ;
        }   

        $data = array();    
        $data['comboMarca'] = form_dropdown('TB_MARCA_ID', $listaMarcas);          
        $data['comboModelo'] = form_dropdown('TB_MODELO_ID', $listaModelo);

        echo view('auto_form',$data);



    }
        
        
    

    

    public function Update($TB_AUTOMOVEL_ID)
    {
        
        $autoModel = new AutomovelModel;
        
        $autoTodos = $autoModel->find($TB_AUTOMOVEL_ID);
        $data['tabela'] = $autoTodos;        
        
        echo view('auto_updateform', $data);

    }

    

    public function Delete($TB_AUTOMOVEL_ID)
    {
        $autoModel = new AutomovelModel;

        
        $result = $autoModel->delete($TB_AUTOMOVEL_ID);
        
        return redirect()->back();
        
        
    }
    
}