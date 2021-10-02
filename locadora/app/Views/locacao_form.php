
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<title><?php echo $titulo ?></title>
</head>
<body>
	<div class="container mt-5">
	<h2 class="align center"><?php echo $titulo ?></h2>	
	<?php helper('form'); ?>
	<?php echo form_open('locacao/inserir_dados')?>

	<div class="form-row">
	<div class="form-group col-md-4">
	<label for="TB_LOCACAO_TIPO">Tipo de Locação</label>
	<input type="text"  name="TB_LOCACAO_TIPO" id="TB_LOCACAO_TIPO" class="form-control">	
	</div>
	<div class="form-group col-md-2">
	<label for="TB_LOCACAO_VALOR">Valor</label>
	<input type="text"  name="TB_LOCACAO_VALOR" id="TB_LOCACAO_VALOR" class="form-control">	
	</div>
	<div class="form-group col-md-3">
	<label for="TB_LOCACAO_DT_INICIO">Data de Inicio</label>
	<input type="text"  name="TB_LOCACAO_DT_INICIO" id="TB_LOCACAO_DT_INICIO" class="form-control">	
	</div>
	<div class="form-group col-md-3">
	<label for="TB_LOCACAO_DT_FIM">Data do Fim</label>
	<input type="text"  name="TB_LOCACAO_DT_FIM" id="TB_LOCACAO_DT_FIM" class="form-control">
	</div>
	</div>

	<div class="form-row">
	<div class="form-group col-md-3">
	<label for="TB_CLIENTE_ID">Id do Cliente</label>
	<input type="text"  name="TB_CLIENTE_ID" id="TB_CLIENTE_ID" class="form-control">
	</div>
	<div class="form-group col-md-3">
    <label for="TB_FUNCIONARIO_ID">Id do Funcionario</label>
    <input type="text"  name="TB_FUNCIONARIO_ID" id="TB_FUNCIONARIO_ID" class="form-control">     
    </div>

    	<div class="form-group col-md-3">
     	<label for="TB_AUTOMOVEL_ID">Id do Automovel</label>
        <input type="text"  name="TB_AUTOMOVEL_ID" id="TB_AUTOMOVEL_ID" class="form-control"> 
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


