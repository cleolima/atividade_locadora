<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('marca/inserir'), 'Cadastrar Novas Marcas ');

echo $table->generate($tabela);

?>