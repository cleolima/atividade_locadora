<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('cliente/inserir'), 'Cadastrar Novos Clientes ');

echo $table->generate($tabela);

?>