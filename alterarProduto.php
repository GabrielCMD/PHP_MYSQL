<?php 
	require("conecta.php");
	$produto="";
	$valor=""; 
	$data="";
	$deposito="";

	if(isset($_GET["alterar"])){
		$idpro = htmlentities($_GET["alterar"]);
		$query=$mysqli->query("select * from produtos where id = '$idpro'");
		$tabela2=$query->fetch_assoc();
		$produto=$tabela2["nome"];
		$valor=$tabela2["valor"];		
		$deposito=$tabela2["idDeposito"];
		$data=$tabela2["data"];
		
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
			<form method="POST" action="alterarProduto.php">
				<div class="form-group">
					<div class="form-group col-md-10">
						<input type="hidden" class="form-control" name="id" value="<?php echo $idpro ?>">
					</div>
					<br/>
					<div class="form-group col-md-10">
					<label>Nome do Produto:<br/></label>
						<input type="text" class="form-control" name="produto" value="<?php echo $produto ?>">
					<br/>		
					</div>
					<div class="form-group col-md-10">
						<label>ID do Deposito:</label>
						<input type="text" class="form-control" name="deposito" value="<?php echo $deposito ?>">
					</div>
					<div class="form-group col-md-10">
					<label>Data:<br/></label>
						<input type="text" class="form-control" name="data" value="<?php echo $data ?>">
					<br/>		
					</div>
					<div class="form-group col-md-10">
					<label>Valor:<br/></label>
						<input type="text" class="form-control" name="valor" value="<?php echo $valor ?>">
					<br/>		
					</div>
				</div>
				<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Salvar" name="botao"></button>
			</form>
			<a href ="dadosProduto.php"><button class="btn btn-danger btn-sm">Voltar</button></a>
			<br />

	<?php 
	if(isset($_POST["botao"])){

		$idpro   = htmlentities($_POST["id"]);
		$produto  = htmlentities($_POST["produto"]);
		$valor = htmlentities($_POST["valor"]);
		$deposito = htmlentities($_POST["deposito"]);
		$data = htmlentities($_POST["data"]);

		$mysqli->query("update produtos set produto = '$produto', valor = '$valor', deposito = '$deposito' , data='$data' where id = '$idpro'  ");
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
