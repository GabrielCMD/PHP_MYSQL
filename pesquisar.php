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
			<form method="POST" action="pesquisar.php">
			<div class="form-group">
				<div class="form-group col-md-10">
					<label>Nome do Cliente:</label>
					<input type="text" class="form-control" name="nome" maxlength="40" placeholder="digite o nome">
				</div><br/>
			</div>
				<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Pesquisar" name="botao"></button>
			</form>
	<?php 
		if(isset($_POST["botao"])){
			require("conecta.php");
			$nome=htmlentities($_POST["nome"]);

			$query = $mysqli->query("select * from clientes where nome like '%$nome%'");
			echo $mysqli->error;

			echo "
				<table class='table' border='1' width='400'align='center'>
				<tr>
					<th>ID</th>
					<th>CPF</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
				</tr>
			";
			while ($tabela=$query->fetch_assoc()) {
				echo "
				<tr><td >$tabela[id]</td>
				<td align='center'>$tabela[cpf]</td>
				<td align='center'>$tabela[nome]</td>
				<td align='center'>$tabela[telefone]</td>
				<td align='right'>$tabela[email]</td>
				</tr>
			";
		}
		echo "</table>";
		}
	?>
	<a href='index.php'><button class="btn btn-danger btn-sm">Voltar</button></a>
		</div>
	</section>
</body>
</html>