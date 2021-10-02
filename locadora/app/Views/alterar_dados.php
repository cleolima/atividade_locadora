
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<title>Alterar</title>
</head>

<body>
	<div class="container mt-5">
	<h2 class="align center">Alterar Dados</h2>	
	<?php helper('form'); ?>
	<?php echo form_open('automovel/inserir_dados')?>

	<div class="form-row">
	<div class="form-group col-md-2">
	<label for="TB_AUTOMOVEL_ID">Id Carro</label>
	<input type="text"  name="TB_AUTOMOVEL_ID" id="TB_AUTOMOVEL_ID" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_ID'] ?>">	
	</div>	
	<div class="form-group col-md-4">
	<label for="TB_AUTOMOVEL_NOME">Nome Carro</label>
	<input type="text"  name="TB_AUTOMOVEL_NOME" id="TB_AUTOMOVEL_NOME" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_NOME'] ?>">	
	</div>
	<div class="form-group col-md-2">
	<label for="TB_AUTOMOVEL_ANO_FAB">Ano de Fabricação</label>
	<input type="text"  name="TB_AUTOMOVEL_ANO_FAB" id="TB_AUTOMOVEL_ANO_FAB" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_ANO_FAB'] ?>">	
	</div>
	<div class="form-group col-md-2">
	<label for="TB_AUTOMOVEL_COR">Cor</label>
	<input type="text"  name="TB_AUTOMOVEL_COR" id="TB_AUTOMOVEL_COR" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_COR'] ?>">	
	</div>
	<div class="form-group col-md-2">
	<label for="TB_AUTOMOVEL_KM">KM rodado</label>
	<input type="text"  name="TB_AUTOMOVEL_KM" id="TB_AUTOMOVEL_KM" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_KM'] ?>">
	</div>
	</div>

	<div class="form-row">
	<div class="form-group col-md-3">
	<label for="TB_AUTOMOVEL_VALOR_D">Valor</label>
	<input type="text"  name="TB_AUTOMOVEL_VALOR_D" id="TB_AUTOMOVEL_VALOR_D" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_VALOR_D'] ?>">
	</div>
	<div class="form-group col-md-3">
    <label for="TB_AUTOMOVEL_STATUS">Status</label>
    <input type="text"  name="TB_AUTOMOVEL_STATUS" id="TB_AUTOMOVEL_STATUS" class="form-control" value="<?php echo $tabela['TB_AUTOMOVEL_STATUS'] ?>">     
    </div>

    	<div class="form-group col-md-3">
     	<label for="TB_MARCA_ID">Marca-Id</label>
        <input type="text"  name="TB_MARCA_ID" id="TB_MARCA_ID" class="form-control" value="<?php echo $tabela['TB_MARCA_ID'] ?>"> 
        </div>
        <div class="form-group col-md-3">
        <label for="TB_MODELO_ID">Modelo-Id</label>
        <input type="text"  name="TB_MODELO_ID" id="TB_MODELO_ID" class="form-control" value="<?php echo $tabela['TB_MODELO_ID'] ?>"> 
        </div>
    </div>

    <div class="form-row">
    

        
        
        </div>

        

		
	
		<center>
        
        <input class="btn btn-success" type="submit" align="center" value="Atualizar">
        <input class="btn btn-danger" type="reset" value="Limpar"> 
        </center>
	

	

	


	<?php echo form_close()?>	
		
	</div>
	


</body>
</html>


