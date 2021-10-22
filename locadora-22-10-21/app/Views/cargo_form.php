
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
	<?php echo form_open('cargo/inserir_dados')?>

	<div class="form-row">
	<div class="form-group ">
	<label for="TB_CARGO_NOME">Nome do Cargo</label>
	<input type="text"  name="TB_CARGO_NOME" id="TB_CARGO_NOME" class="form-control">	
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


