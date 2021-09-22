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
	<section>
        <div class="container">
			<form method="POST" action="pesquisarProduto.php">
			<div class="form-group">
                <div class="form-group col-md-10">
                    <label>Nome:<br/></label>
                    <input type="text" class="form-control" name="produto" maxlength="30" placeholder="Nome do Produto"><br/>
                </div>
			</div>
				<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Pesquisar" name="botao"></button>
			</form>
	<?php 
		if(isset($_POST["botao"])){
			require("conecta.php");
			$produto=htmlentities($_POST["produto"]);

			$query = $mysqli->query("select * from produtos where nome like '%$produto%'");
			echo $mysqli->error;

			echo "
				<table class='table' border='1' width='400'align='center'>
				<tr>
					<th>ID</th>
					<th>Produto</th>
					<th>ID Deposito</th>
					<th>Valor</th>
					<th>Data</th>
				</tr>
			";
			while ($tabela2=$query->fetch_assoc()) {
				echo "
				<tr><td >$tabela2[id]</td>
				<td align='center'>$tabela2[nome]</td>
				<td align='center'>$tabela2[idDeposito]</td>
				<td align='center'>$tabela2[valor]</td>
				<td align='right'>$tabela2[data]</td>
				</tr>
			";
			}
		echo "</table>";
		}
	?>
	<a href='dadosProduto.php'><button class="btn btn-danger btn-sm">Voltar</button></a>
		</div>
	</section>
</body>
</html>