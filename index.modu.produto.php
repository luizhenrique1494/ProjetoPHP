<?php
	
	require("Conection.php");
	//require_once("entidade.php");

	

	if (isset($_GET["botao"])) {

		if($_GET["botao"] == "cadastrar") {

			$id = $_GET["text_id"];
			$nome = $_GET["text_nome"];
			$descricao = $_GET["text_descricao"];
			$preco = $_GET["text_preco"];

			$conectBd = new Conection();

			$sql = "INSERT INTO produto (id,nome,descricao,preco) 
			VALUES (".$id.",".$nome.",".$descricao.",".$preco.")";
			$conectBd->executarMysql($sql);		
		} 

		if($_GET["botao"] == "consultar") {

			$id = $_GET["text_id"];
			$nome = $_GET["text_nome"];
			$descricao = $_GET["text_descricao"];
			$preco = $_GET["text_preco"];


			$conectBd = new Conection();

			$sql = "SELECT * FROM produto WHERE id = '".$id."'";
			$conectBd->executarMysql($sql);
		}


		if($_GET["botao"] == "excluir"){

			$id = $_GET["text_id"];
			$nome = $_GET["text_nome"];
			$descricao = $_GET["text_descricao"];
			$preco = $_GET["text_preco"];


			$conectBd = new Conection();

			$sql = "DELETE produto WHERE id = id = '".$id."'";
			$conectBd->executarMysql($sql);
		}


		if($_GET["botao"] == "excluir"){

			$id = $_GET["text_id"];
			$nome = $_GET["text_nome"];
			$descricao = $_GET["text_descricao"];
			$preco = $_GET["text_preco"];


			$conectBd = new Conection();

			$sql = "UPDATE produto SET nome = '".$nome."', descricao = '".$descricao."', 
			preco = '".$preco."'";	
			$conectBd->executarMysql($sql);
		}	
	} 
?>