<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function index()
    {
        $cliModel = new ClienteModel;
        $TodosCliente = $cliModel->findAll();

        foreach($TodosCliente as $key => $linha)
        {
            $TodosCliente[$key]['excluir'] = '<a href="Delete/'.$linha['TB_CLIENTE_ID'] . '">Deletar</a>';
            $TodosCliente[$key]['update'] = '<a href="Update/'.$linha['TB_CLIENTE_ID'] . '">Atualizar</a>';
        }
        
        
        $data['tabela'] = $TodosCliente;
        echo view('cliente_list_view', $data);
    }

    public function inserir_dados()
    {
        if(isset($this->request->getPost()['TB_CLIENTE_ID'])) {
            $TB_CLIENTE_ID = $this->request->getPost()['TB_CLIENTE_ID'];
        } else {
            $TB_CLIENTE_ID = FALSE;
        }

        $nome = $this->request->getPost()['TB_CLIENTE_NOME'];
        $telefone = $this->request->getPost()['TB_CLIENTE_TEL'];        
        $sexo = $this->request->getPost()['TB_CLIENTE_SEXO'];
        $email = $this->request->getPost()['TB_CLIENTE_EMAIL'];
        $senha = $this->request->getPost()['TB_CLIENTE_SENHA'];
        $endereco = $this->request->getPost()['TB_CLIENTE_ENDERECO'];
        $complemento = $this->request->getPost()['TB_CLIENTE_COMPLEMENTO'];
        $bairro = $this->request->getPost()['TB_CLIENTE_BAIRRO'];
        $cidade = $this->request->getPost()['TB_CLIENTE_CIDADE'];
        $uf = $this->request->getPost()['TB_CLIENTE_UF'];
        $dtnasc = $this->request->getPost()['TB_CLIENTE_DT_NASC'];
        $dtcadastro = $this->request->getPost()['TB_CLIENTE_DT_CAD'];   
    

        $cliModel = new ClienteModel;

        $data = [

           'TB_CLIENTE_NOME'=> $nome, 
           'TB_CLIENTE_TEL'=>$telefone,          
           'TB_CLIENTE_SEXO'=> $sexo,
           'TB_CLIENTE_EMAIL'=> $email,          
           'TB_CLIENTE_SENHA'=>$senha,
           'TB_CLIENTE_ENDERECO'=> $endereco,
           'TB_CLIENTE_COMPLEMENTO'=> $complemento,
           'TB_CLIENTE_BAIRRO'=> $bairro,
           'TB_CLIENTE_CIDADE'=>$cidade,
           'TB_CLIENTE_UF'=>$uf,
           'TB_CLIENTE_DT_NASC'=>$dtnasc,
           'TB_CLIENTE_DT_CAD'=>$dtcadastro           
        ];
                     

        if($TB_CLIENTE_ID != FALSE) {
            $data['TB_CLIENTE_ID'] = $TB_CLIENTE_ID;
        }

 

        $result = $cliModel->save($data);
        var_dump($result);     

        
    }

    public function inserir()
    {  

        $data['titulo'] = 'Inserir novo Cliente';
        $data['acao']='inserir'; 

        
        echo view('cliente_form',$data);
    }

     public function Update($TB_CLIENTE_ID)
    {
        
        $cliModel = new ClienteModel;

        
        $TodosCliente = $cliModel->find($TB_CLIENTE_ID);
        $data['tabela'] = $TodosCliente;        
        
        echo view('cliente_updateform', $data);

    }

    

    public function Delete($TB_CLIENTE_ID)
    {
        $cliModel = new ClienteModel;
        
        $result = $cliModel->delete($TB_CLIENTE_ID);
        
        //return redirect()->back();
        var_dump($result);
        
        
    }

}