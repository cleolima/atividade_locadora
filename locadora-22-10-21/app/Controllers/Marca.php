<?php

namespace App\Controllers;

use App\Models\MarcaModel;

class Marca extends BaseController
{
    public function index()
    {
        $marcaModel = new MarcaModel;
        $todosMarca = $marcaModel->findAll();

        foreach( $todosMarca as $key => $linha)
        {
             $todosMarca[$key]['excluir'] = '<a href="Delete/'.$linha['TB_MARCA_ID'] . '">Deletar</a>';
             $todosMarca[$key]['update'] = '<a href="Update/'.$linha['TB_MARCA_ID'] . '">Atualizar</a>';
        }
        
        
        $data['tabela'] =  $todosMarca;
        echo view('marca_list_view', $data);
    }


    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_MARCA_ID'])) {
            $TB_MARCA_ID = $this->request->getPost()['TB_MARCA_ID'];
        } else {
            $TB_MARCA_ID = FALSE;
        }


        $nome = $this->request->getPost()['TB_MARCA_NOME'];
        
        $marcaModel = new MarcaModel;

        $data = ['TB_MARCA_NOME'=> $nome ];
               

        
        if($TB_MARCA_ID != FALSE) {
            $data['TB_MARCA_ID'] = $TB_MARCA_ID;
        }

 

        $result = $marcaModel->save($data);
        var_dump($result);     

    }

    public function inserir()
    {  

        $data['titulo'] = 'Inserir nova Marca';
        $data['acao']='inserir'; 

        
        echo view('marca_form',$data);
    }

    public function Update($TB_MARCA_ID)
    {
        
        $marcaModel = new MarcaModel;
        
        $todosMarca = $marcaModel->find($TB_MARCA_ID);
        $data['tabela'] = $todosMarca;        
        
        echo view('marca_updateform', $data);

    }

    public function Delete($TB_MARCA_ID)
    {
        $marcaModel = new MarcaModel;

        
        $result = $marcaModel->delete($TB_MARCA_ID);
        
        //return redirect()->back();
        var_dump($result);
        
        
    }

    
}