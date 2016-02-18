
<?php
	
	require("Conection.php");
	//require_once("entidade.php");

	if (isset($_GET["botao"])) {

	if($_GET["botao"] == "cadastrar") {

		$id_pedido = $_GET[]"text_id_pedido"];
		$id_produto = $_GET["text_id_produto"];
		$id_cliente = $_GET["text_id_cliente"];
		$conectBd = new Conection();

		$sql = "INSERT INTO pedido (id_produto,id_cliente) 
		VALUES (".$id_produto.",".$id_cliente.")";
		$conectBd->executarMysql($sql);		
	} 

	if($_GET["botao"] == "consultar") {

		$id_pedido = $_GET[]"text_id_pedido"];
		$id_produto = $_GET["text_id_produto"];
		$id_cliente = $_GET["text_id_cliente"];

		$conectBd = new Conection();

		$sql = "SELECT * FROM pedido WHERE id = '".$id_pedido."'";
		$conectBd->executarMysql($sql);
		
	}
	
	

	if($_GET["botao"] == "excluir"){

		$id_pedido = $_GET[]"text_id_pedido"];
		$id_produto = $_GET["text_id_produto"];
		$id_cliente = $_GET["text_id_cliente"];

		$conectBd = new Conection();

		$sql = "DELETE pedido WHERE id = '".$id_pedido."'";
		$conectBd->executarMysql($sql);
	}


	if($_GET["botao"] == "alterar"){

		$id_pedido = $_GET[]"text_id_pedido"];
		$id_produto = $_GET["text_id_produto"];
		$id_cliente = $_GET["text_id_cliente"];

		$conectBd = new Conection();

		$sql = "UPDATE pedido 
		SET id_produto = '".$id_produto."', id_cliente = '".$id_cliente."'";
		$conectBd->executarMysql($sql);
	}		

	} 
?>