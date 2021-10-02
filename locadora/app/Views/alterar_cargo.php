<?php

helper('form');
echo "<pre>";
echo form_open('cargo/inserir_dados');
echo form_label('Id do cargo =>');
echo form_input('TB_CARGO_ID', $tabela['TB_CARGO_ID']);
echo "<br>";
echo form_label('Nome do cargo=>');
echo form_input('TB_CARGO_NOME', $tabela['TB_CARGO_NOME']);
echo "<br>";


echo form_submit('mysubmit', 'Novo Cargo');

echo form_close();


?>