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
			<?php 
				if(isset($_GET["excluir"])){
					$id = htmlentities($_GET["excluir"]);
					require("conecta.php");
					$mysqli->query("delete from clientes where id = '$id'");
					echo $mysqli->error;
					if ($mysqli->error==""){
						echo "Excluido com Sucesso!<br />";
						echo "<a href='index.php'><button class='btn btn-danger btn-sm'>Voltar</button></a>";
					}
				}
			?>
		</div>
	</section>	
</body>
</html>