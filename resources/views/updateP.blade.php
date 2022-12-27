<?php

$user=DB::table('Usuario')
	->where('id', $id)
	->update([
		'NomeCompleto'=>$nome,
        'DataNascimento'=>$dNascimento,
        'WhatsApp'=>$WhatsApp,
        'Foto'=>$fotoP
	]);

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Paciente</title>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Atualização de Pacientes</h5>
					<div class="alert alert-success" role="alert">
						O paciente foi atualizado com Sucesso!
					</div>

					

					<a class="btn btn-outline-primary" href="http://localhost:8000" name="bAbrir" id="aberto" role="button"><i class="fas fa-paper-plane"></i> Início</a>
        			<a class="btn btn-outline-info" href="http://localhost:8000" name="bVoltar" id="fechado" role="button"><i class="fas fa-reply"></i> Voltar</a>
				
				</div>
			</div>
		</div>
  	</div>


</body>
</html>