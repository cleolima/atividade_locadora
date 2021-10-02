<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('modelo/inserir'), 'Cadastrar Novos Modelos ');

echo $table->generate($tabela);

?>