<?php 
	require("conecta.php");
	$cpf="";
	$nome=""; 
	$email="";
	$telefone="";

	if(isset($_GET["alterar"])){
		$id = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from clientes where id = '$id'");
		$tabela=$query->fetch_assoc();
		$cpf=$tabela["cpf"];		
		$nome=$tabela["nome"];
		$telefone=$tabela["telefone"];
		$email=$tabela["email"];
		
	}
?>


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
			<form method="POST" action="alterar.php">
				<div class="form-group">
					<div class="form-group col-md-10">
						<input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
					</div>
					<br/>
					<div class="form-group col-md-10">
					<label>CPF:<br/></label>
						<input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
					<br/>		
					</div>
					<div class="form-group col-md-10">
						<label>Nome:</label>
						<input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
					</div>
					<div class="form-group col-md-10">
					<label>Email:<br/></label>
						<input type="text" class="form-control" name="email" value="<?php echo $email ?>">
					<br/>		
					</div>
					<div class="form-group col-md-10">
					<label>Telefone:<br/></label>
						<input type="text" class="form-control" name="telefone" value="<?php echo $telefone ?>">
					<br/>		
					</div>
				</div>
				<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Salvar" name="botao"></button>
			</form>
			<a href ="index.php"><button class="btn btn-danger btn-sm">Voltar</button></a>
			<br />

	<?php 
	if(isset($_POST["botao"])){

		$id   = htmlentities($_POST["id"]);
		$cpf  = htmlentities($_POST["cpf"]);
		$nome = htmlentities($_POST["nome"]);
		$email = htmlentities($_POST["email"]);
		$telefone = htmlentities($_POST["telefone"]);

		$mysqli->query("update clientes set cpf = '$cpf', email = '$email', telefone = '$telefone' ,nome='$nome' where id = '$id'  ");
		echo $mysqli->error;
		if ($mysqli->error == "") {
			echo "Alterado com sucesso";
		}
	}
	?>

		</div>
	</section>
</body>
</html>


