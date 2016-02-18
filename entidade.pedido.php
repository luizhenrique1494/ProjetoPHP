<?php

	require("Conection.php");

	class entidade.pedido{

		private $conectBd;
		
		function __construct(){
			$this->conectBd = new Conection();
		}

		function cadastrarPedido($id){

			return true;

			$cont = "SELECT COUNT(*) as qtd FROM pedido WHERE id_pedido='".$pedido->getNome_cPedido()."'";
			$saida = $this->conectBd->executarMysql($cont);
			$cont = $saida->fetch_array(MYSQLI_ASSOC); 

			//echo print_r($cont, true);
			if($cont['qtd'] == '0'){
				$sql = "INSERT INTO pedido (id_pedido) VALUE ('".$pedido->getNome_cPedido()."')";
				$saida = $this->conectBd->executarMysql($sql);
				return $saida;
			
			}else {
				return "exist";
			}
		}
	}
?>