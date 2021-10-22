
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<title>Alterar Cliente</title>
</head>
<body>
	<div class="container mt-5">
	<h2 class="align center">Cliente</h2>	
	<?php helper('form'); ?>
	<?php echo form_open('cliente/inserir_dados')?>

	<div class="form-row">
	<div class="form-group col-md-2">
	<label for="TB_CLIENTE_ID">Id do Cliente</label>
	<input type="text"  name="TB_CLIENTE_ID" id="TB_CLIENTE_ID" class="form-control"value="<?php echo $tabela['TB_CLIENTE_ID'] ?>">	
	</div>	
	<div class="form-group col-md-5">
	<label for="TB_CLIENTE_NOME">Nome do Cliente</label>
	<input type="text"  name="TB_CLIENTE_NOME" id="TB_CLIENTE_NOME" class="form-control">	
	</div>
	<div class="form-group col-md-3">
	<label for="TB_CLIENTE_TEL">Telefone</label>
	<input type="text"  name="TB_CLIENTE_TEL" id="TB_CLIENTE_TEL" class="form-control" value="<?php echo $tabela['TB_CLIENTE_TEL'] ?>">	
	</div>
	<div class="form-group col-md-2">
	<label for="TB_CLIENTE_SEXO">Sexo</label>
	<input type="text"  name="TB_CLIENTE_SEXO" id="TB_CLIENTE_SEXO" class="form-control" value="<?php echo $tabela['TB_CLIENTE_SEXO'] ?>">	
	</div>	
	</div>

	<div class="form-row">
	<div class="form-group col-md-6">
	<label for="TB_CLIENTE_EMAIL">Email</label>
	<input type="text"  name="TB_CLIENTE_EMAIL" id="TB_CLIENTE_EMAIL" class="form-control" value="<?php echo $tabela['TB_CLIENTE_EMAIL'] ?>">
	</div>	
	<div class="form-group col-md-6">
	<label for="TB_CLIENTE_SENHA">Senha</label>
	<input type="password"  name="TB_CLIENTE_SENHA" id="TB_CLIENTE_SENHA" class="form-control" value="<?php echo $tabela['TB_CLIENTE_SENHA'] ?>">
	</div>	
	</div>

	<div class="form-row">
	<div class="form-group col-md-12">
    <label for="TB_CLIENTE_ENDERECO">Endereço</label>
    <input type="text"  name="TB_CLIENTE_ENDERECO" id="TB_CLIENTE_ENDERECO" class="form-control" value="<?php echo $tabela['TB_CLIENTE_ENDERECO'] ?>">     
    </div>
	</div>

	<div class="form-row">
	<div class="form-group col-md-3">
     	<label for="TB_CLIENTE_COMPLEMENTO">Complemento</label>
        <input type="text"  name="TB_CLIENTE_COMPLEMENTO" id="TB_CLIENTE_COMPLEMENTO" class="form-control" value="<?php echo $tabela['TB_CLIENTE_COMPLEMENTO'] ?>"> 
        </div>
        <div class="form-group col-md-3">
        <label for="TB_CLIENTE_BAIRRO">Bairro</label>
        <input type="text"  name="TB_CLIENTE_BAIRRO" id="TB_CLIENTE_BAIRRO" class="form-control" value="<?php echo $tabela['TB_CLIENTE_BAIRRO'] ?>"> 
        </div>
    	
    	<div class="form-group col-md-3">
		<label for="TB_CLIENTE_CIDADE">Cidade</label>
		<input type="text"  name="TB_CLIENTE_CIDADE" id="TB_CLIENTE_CIDADE" class="form-control" value="<?php echo $tabela['TB_CLIENTE_CIDADE'] ?>">
		</div>
		<div class="form-group col-md-3">
    	<label for="TB_CLIENTE_UF">Estado</label>
    	<input type="text"  name="TB_CLIENTE_UF" id="TB_CLIENTE_UF" class="form-control" value="<?php echo $tabela['TB_CLIENTE_UF'] ?>">     
    </div>	
	</div>

    	

    <div class="form-row">
    	<div class="form-group col-md-6">
     	<label for="TB_CLIENTE_DT_NASC">Data de Nascimento</label>
        <input type="text"  name="TB_CLIENTE_DT_NASC" id="TB_CLIENTE_DT_NASC" class="form-control" value="<?php echo $tabela['TB_CLIENTE_DT_NASC'] ?>"> 
        </div>
        <div class="form-group col-md-6">
        <label for="TB_CLIENTE_DT_CAD">Data de Cadastro</label>
        <input type="text"  name="TB_CLIENTE_DT_CAD" id="TB_CLIENTE_DT_CAD" class="form-control" value="<?php echo $tabela['TB_CLIENTE_DT_CAD'] ?>"> 
        </div>
    </div>


		
	
		<center>
        <input class="btn btn-primary" type="button" align="center" value="Voltar" onClick="javascript:location.href='index.php';" />
        <input class="btn btn-success" type="submit" align="center" value="Salvar">
        <input class="btn btn-danger" type="reset" value="Limpar"> 
        </center>
	

	

	


	<?php echo form_close()?>	
		
	</div>
	


</body>
</html>


