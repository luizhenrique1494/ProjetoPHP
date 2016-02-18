 
<?php
	
	require("Conection.php");
	//require_once("entidade.php");

	

	if (isset($_GET["botao"])) {

	if($_GET["botao"] == "cadastrar") {

		$id = $_GET["text_id"];
		$nome = $_GET["text_nome"];
		$email = $_GET["text_email"];
		$tel = $_GET["text_tel"];

		$conectBd = new Conection();

		$sql = "INSERT INTO cliente (id,nome,email,tel) VALUES (".$id.",".$nome.",".$email.",".$tel.")";
		$conectBd->executarMysql($sql);		
	} 

	
	if($_GET["botao"] == "consultar") {

		$id = $_GET["text_id"];
		$nome = $_GET["text_nome"];
		$email = $_GET["text_email"];
		$tel = $_GET["text_tel"];


		$conectBd = new Conection();

		$sql = "SELECT * FROM cliente WHERE id = '".$id."'";
		$conectBd->executarMysql($sql);
	}


	if($_GET["botao"] == "excluir"){

		$id = $_GET["text_id"];
		$nome = $_GET["text_nome"];
		$email = $_GET["text_email"];
		$tel = $_GET["text_tel"];

		$conectBd = new Conection();

		$sql = "DELETE cliente WHERE id = '".$id."'";
		$conectBd->executarMysql($sql);
	}


	if($_GET["botao"] == "alterar"){

		$id = $_GET["text_id"];
		$nome = $_GET["text_nome"];
		$email = $_GET["text_email"];
		$tel = $_GET["text_tel"];

		$conectBd = new Conection();

		$sql = "UPDATE cliente 
		SET nome = '".$nome."', email = '".$email."',tel = '".$tel."'" 
		;
		$conectBd->executarMysql($sql);
	}		

	} 
?>