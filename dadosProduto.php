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

	<h2>Cadastro de Produtos</h2>
	<a href="CadastroProdutos.php"><button class="btn btn-secondary btn-sm">Cadastro de Produtos</button></a>
	<a href="adicionar.php"><button class="btn btn-secondary btn-sm">Cadastro de Clientes</button></a>
	<a href="pesquisarProduto.php"><button class="btn btn-primary btn-sm">Pesquisar Produtos</button></a>
	<a href="index.php"><button class="btn btn-danger btn-sm">Dados de Clientes</button></a>

	<br />
	<table class="table" width="400">
		<tr>
			<th>Id</th>
			<th>produto</th>
			<th>Valor</th>
			<th>ID Deposito</th>
			<th>Data</th>
			<th>Ação</th>
		</tr>

		<?php 
		require("conecta.php");
		
		$query = $mysqli->query("select * from produtos");
		echo $mysqli->error;


		while ($tabela2 = $query->fetch_assoc()){
			echo "
			<tr><td align='center'>$tabela2[id]</td>
			<td align='center'>$tabela2[nome]</td>
			<td align='center'>$tabela2[valor]</td>
			<td align='center'>$tabela2[idDeposito]</td>
			<td align='center'>$tabela2[data]</td>
			
			
			<td width='120'><a href='excluirProduto.php?excluir=$tabela2[id]'><button class='btn btn-danger btn-sm'>Excluir</button></a>
			
			<a href='alterarProduto.php?alterar=$tabela2[id]'><button class='btn btn-primary btn-sm'>Alterar</button></a></td>
			</tr>
			";
		}
		?>
	</table>
</body>
</html>