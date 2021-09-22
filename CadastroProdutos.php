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
			<form method="POST" action="CadastroProdutos.php">
				<div class="form-group">
                <legend>Cadastro de Produto</legend>
                    <div class="form-group col-md-10">
                        <label>Nome:<br/></label>
                        <input type="text" class="form-control" name="produto" maxlength="30" placeholder="Nome do Produto"><br/>
                    </div>
                    <div class="form-group col-md-10">
                        <label>Valor:<br/></label>
                        <input type="text" class="form-control" name="valor" maxlength="6" placeholder="Valor do Produto"><br/>
                    </div>
                    <div class="form-group col-md-10">
                        <label>ID do Deposito:<br/></label>
                        <input type="text" class="form-control" name="deposito" maxlength="20" placeholder="Numero do Produto"><br/>
                    </div>
                    <div class="form-group col-md-10">
                        <label>Data de Entrada:<br/></label>
                        <input type="text" class="form-control" name="data" maxlength="10" placeholder="dd/mm/aaaa"><br/>
						<button class='btn btn-primary btn-sm'><input type="submit" class="btn btn-primary btn-sm" value="Salvar" name="botao"></button>
                    </div>
				</div>
			</form><br/>
			<?php 
				if(isset($_POST["botao"])){
					require("conecta.php");

					$produto=htmlentities($_POST["produto"]);	
					$valor=htmlentities($_POST["valor"]);	
                    $deposito=htmlentities($_POST["deposito"]);	
                    $data=htmlentities($_POST["data"]);	

					$mysqli->query("insert into produtos(id,nome,valor,idDeposito,data)values('','$produto', '$valor', '$deposito', '$data')");
					echo $mysqli->error;

					if($mysqli->error == ""){
						echo "<br />Inserido com Sucesso!<br /></br />";
						echo "<a href='dadosProduto.php'><button class='btn btn-danger btn-sm'>Voltar</button></a>";
					}

				}
			?>
		</div>
	</section>	
</body>
</html>


