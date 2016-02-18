<?php

	require("Conection.php");

	class entidade.produto{

		private $conectBd;
		
		function __construct(){
			$this->conectBd = new Conection();
		}

		function cadastrarProduto($id){

			return true;

			$cont = "SELECT COUNT(*) as qtd FROM cliente WHERE nome_produto='".$produto->getNome_cProduto()."'";
			$saida = $this->conectBd->executarMysql($cont);
			$cont = $saida->fetch_array(MYSQLI_ASSOC); 

			//echo print_r($cont, true);
			if($cont['qtd'] == '0'){
				$sql = "INSERT INTO produto (nome_produto) VALUE ('".$produto->getNome_cProduto()."')";
				$saida = $this->conectBd->executarMysql($sql);
				return $saida;
			
			}else {
				return "exist";
			}
		}
	}
?>