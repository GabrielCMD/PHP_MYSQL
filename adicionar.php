<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<header id="Home">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
          <ul>
            <ul class="navbar-nav" onclick="getElementById('close-menu').checked = false;">
              <li class="nav-item"><a class="navbar-brand" href="#Home"><font color ="white"><b>Bem Vindo!</b></font></a></li>
            </ul>
        </nav>
	</header>
	<section id="Cadastro">
        <div class="container">
			<form method="POST" action="adicionar.php">
				<div class="form-group">
					<div class="form-group col-md-10">
					<label>CPF:<br/></label>
						<input type="text" class="form-control" name="cpf" maxlength="20" placeholder="Digite o CPF">
					</div>	
					<br/>
				</div>
				<div class="form-group col-md-10">
					<label for="caixaEmail">Email:<br/></label>
					<input type="text" class="form-control" name="email" maxlength="30" placeholder="Email"><br/>
				</div>
				<div class="form-group col-md-10">
				<label for="caixaTel">Telefone:<br/></label>
				<input type="text" class="form-control" name="telefone" placeholder="(99)999999999" maxlength="13"><br/>
				</div>
				<div class="form-group">
					<div class="form-group col-md-10">
						<label>Nome:<br/></label>
						<input type="text" name="nome" class="form-control" maxlength="50" placeholder="Digite o Nome">		
						<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Salvar" name="botao"></button>
					</div>
				</div>
			</form><br/>
			<?php 
				if(isset($_POST["botao"])){
					require("conecta.php");


					$cpf=htmlentities($_POST["cpf"]);	
					$nome=htmlentities($_POST["nome"]);
					$telefone=htmlentities($_POST["telefone"]);
					$email=htmlentities($_POST["email"]);
					

					$mysqli->query("insert into Clientes values('', '$cpf', '$nome', '$telefone', '$email')");
					echo $mysqli->error;

					if($mysqli->error == ""){
						echo "<br />Inserido com Sucesso!<br /></br />";
						echo "<a href='index.php'><button class='btn btn-danger btn-sm'>Voltar</button></a>";
					}

				}
			?>
		</div>
	</section>	
</body>
</html>

