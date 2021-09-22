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

	<h2>Cadastro de Clientes</h2>
	<a href="CadastroProdutos.php"><button class="btn btn-secondary btn-sm">Cadastro de Produtos</button></a>
	<a href="adicionar.php"><button class="btn btn-secondary btn-sm">Cadastro de Clientes</button></a>
	<a href="pesquisar.php"><button class="btn btn-primary btn-sm">Pesquisar Clientes</button></a>
	<a href="dadosProduto.php"><button class="btn btn-danger btn-sm">Dados de Produtos</button></a>

	<br />
	<table class="table" width="400">
		<tr>
			<th>Id</th>
			<th>CPF</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>email</th>
			<th>Ação</th>
		</tr>

		<?php 

		require("conecta.php");
		
		$query = $mysqli->query("select * from clientes");
		echo $mysqli->error;


		while ($tabela = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[cpf]</td>
			<td align='center'>$tabela[nome]</td>
			<td align='center'>$tabela[email]</td>
			<td align='center'>$tabela[telefone]</td>
			
			
			<td width='120'><a href='excluir.php?excluir=$tabela[id]'><button class='btn btn-danger btn-sm'>Excluir</button></a>
			
			<a href='alterar.php?alterar=$tabela[id]'><button class='btn btn-primary btn-sm'>Alterar</button></a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>