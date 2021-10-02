<?php

namespace App\Controllers;
use App\Models\AutomovelModel;

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
        
        
        $data['tabela'] = $autoTodos;
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
        $data['acao']='inserir'; 

        
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