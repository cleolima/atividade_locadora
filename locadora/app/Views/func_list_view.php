<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('funcionario/inserir'), 'Cadastrar Novos Funcionários ');

echo $table->generate($tabela);

?>