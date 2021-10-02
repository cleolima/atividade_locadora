<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('automovel/inserir'), 'Cadastrar Novos Carros ');

echo $table->generate($tabela);

?>