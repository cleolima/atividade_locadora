<?php 
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('locacao/inserir'), 'Cadastrar Novos Locatários ');

echo $table->generate($tabela);

?>