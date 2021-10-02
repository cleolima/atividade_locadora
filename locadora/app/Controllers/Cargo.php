<?php

namespace App\Controllers;
use App\Models\CargoModel;

class Cargo extends BaseController
{
    public function index()
    {
        $cargoModel = new CargoModel;
        $todosCargos = $cargoModel->findAll();

        foreach( $todosCargos as $key => $linha)
        {
             $todosCargos[$key]['excluir'] = '<a href="Delete/'.$linha['TB_CARGO_ID'] . '">Deletar</a>';
             $todosCargos[$key]['update'] = '<a href="Update/'.$linha['TB_CARGO_ID'] . '">Atualizar</a>';
        }
        
        
        $data['tabela'] =  $todosCargos;
        echo view('cargo_list_view', $data);
        
        

    }

    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_CARGO_ID'])) {
            $TB_CARGO_ID = $this->request->getPost()['TB_CARGO_ID'];
        } else {
            $TB_CARGO_ID = FALSE;
        }


        $nome = $this->request->getPost()['TB_CARGO_NOME'];
        
        $cargoModel = new CargoModel;

        $data = ['TB_CARGO_NOME'=> $nome ];
               

        
        if($TB_CARGO_ID != FALSE) {
            $data['TB_CARGO_ID'] = $TB_CARGO_ID;
        }

 

        $result = $cargoModel->save($data);
        var_dump($result);



        

        

    }

    public function inserir()
    {  

        $data['titulo'] = 'Inserir novo Cargo';
        $data['acao']='inserir'; 

        
        echo view('cargo_form',$data);
    }

    

    

    public function Update($TB_CARGO_ID)
    {
        
        $cargoModel = new CargoModel;
        
        $TodosCargos = $cargoModel->find($TB_CARGO_ID);
        $data['tabela'] = $TodosCargos;        
        
        echo view('cargo_updateform', $data);

    }

    

    public function Delete($TB_CARGO_ID)
    {
        $cargoModel = new CargoModel;

        
        $result = $cargoModel->delete($TB_CARGO_ID);
        
        //return redirect()->back();
        var_dump($result);
        
    }
    
}