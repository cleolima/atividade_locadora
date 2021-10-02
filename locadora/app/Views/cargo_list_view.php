<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('cargo/inserir'), 'Cadastrar Novos Cargos ');

echo $table->generate($tabela);

?>