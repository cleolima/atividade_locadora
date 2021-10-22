<?php

namespace App\Models;

use CodeIgniter\Model;

class LocacaoModel extends Model
{
    protected $table      = 'tb_locacao';
    protected $primaryKey = 'TB_LOCACAO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;   

   

    protected $allowedFields = [
                                'TB_LOCACAO_TIPO',   
                                'TB_LOCACAO_VALOR',    
                                'TB_LOCACAO_DT_INICIO' ,
                                'TB_LOCACAO_DT_FIM', 
                                'TB_CLIENTE_ID', 
                                'TB_FUNCIONARIO_ID',
                                'TB_AUTOMOVEL_ID'                                
                                ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function findAll(int $limit = 0, int $offset = 0) {

      $sqlString = "
      select
      TB_LOCACAO_ID,
      TB_LOCACAO_TIPO,   
      TB_LOCACAO_VALOR,    
      TB_LOCACAO_DT_INICIO,
      TB_LOCACAO_DT_FIM, 
      tb_locacao.TB_CLIENTE_ID, 
      tb_locacao.TB_FUNCIONARIO_ID,
      tb_locacao.TB_AUTOMOVEL_ID,  
      TB_CLIENTE_NOME,      
      TB_FUNCIONARIO_NOME,
      TB_AUTOMOVEL_NOME

       from tb_locacao
      inner join
      tb_cliente on tb_locacao.TB_CLIENTE_ID = tb_cliente.TB_CLIENTE_ID
      inner join
      tb_funcionario on tb_locacao.TB_FUNCIONARIO_ID = tb_funcionario.TB_FUNCIONARIO_ID
      inner join
      tb_automovel on tb_locacao.TB_AUTOMOVEL_ID = tb_automovel.TB_AUTOMOVEL_ID

      ;

      ";

      $resultado = $this->query($sqlString);

      $rows = array();

      foreach ($resultado->getResult('array') as $row){
        $rows[] = $row;
      }

      return $rows;

    }
}