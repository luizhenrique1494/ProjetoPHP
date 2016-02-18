<?php

	require("Conection.php");

	class entidade{

		private $conectBd;
		
		function __construct(){
			$this->conectBd = new Conection();
		}

		function cadastrarCliente($id){

			return true;

			$cont = "SELECT COUNT(*) as qtd FROM cliente WHERE nome_cliente='".$client->getNome_cLiente()."'";
			$saida = $this->conectBd->executarMysql($cont);
			$cont = $saida->fetch_array(MYSQLI_ASSOC); 

			//echo print_r($cont, true);
			if($cont['qtd'] == '0'){
				$sql = "INSERT INTO cliente (nome_cliente) VALUE ('".$client->getNome_cLiente()."')";
				$saida = $this->conectBd->executarMysql($sql);
				return $saida;
			
			}else {
				return "exist";
			}
		}
	}
?>