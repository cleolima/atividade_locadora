
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<title>Alterar Dados</title>
</head>
<body>
	<div class="container mt-5">
	<h2 class="align center">Alterar Dados</h2>	
	<?php helper('form'); ?>
	<?php echo form_open('marca/inserir_dados')?>

	<div class="form-row">
	<div class="form-group col-md-3">
	<label for="TB_MARCA_ID">Id da Marca</label>
	<input type="text"  name="TB_MARCA_ID" id="TB_MARCA_ID" class="form-control"value="<?php echo $tabela['TB_MARCA_ID'] ?>">	
	</div>	
	<div class="form-group ">
	<label for="TB_MARCA_NOME col-md-9">Marca</label>
	<input type="text"  name="TB_MARCA_NOME" id="TB_MARCA_NOME" class="form-control"value="<?php echo $tabela['TB_MARCA_NOME'] ?>">	
	</div>
	
	</div>

		
	
		<center>
        
        <input class="btn btn-success" type="submit" align="center" value="Alterar Marca">
        <input class="btn btn-danger" type="reset" value="Limpar"> 
        </center>
	

	

	


	<?php echo form_close()?>	
		
	</div>
	


</body>
</html>


