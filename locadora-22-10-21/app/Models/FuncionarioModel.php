<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table      = 'tb_funcionario';
    protected $primaryKey = 'TB_FUNCIONARIO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;   

   

    protected $allowedFields = ['TB_FUNCIONARIO_NOME', 
                                'TB_FUNCIONARIO_TEL', 
                                'TB_FUNCIONARIO_DT_CONTRATO', 
                                'TB_CARGO_ID'
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
        TB_FUNCIONARIO_ID,
        TB_FUNCIONARIO_NOME, 
        TB_FUNCIONARIO_TEL, 
        TB_FUNCIONARIO_DT_CONTRATO, 
        tb_funcionario.TB_CARGO_ID,      
        TB_CARGO_NOME
      

       from tb_funcionario
      inner join
      tb_cargo on tb_funcionario.TB_CARGO_ID = tb_cargo.TB_CARGO_ID 

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