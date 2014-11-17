<?php
include ("../mysql/conexao_mysql.php");

$codigo= $_REQUEST['Codigo'];
$ex    = $_REQUEST['codExcluir'];

// alterar dados do formulario
if(($codigo<>'')and ($ex=='')){
	
	//selecionar informação no banco de dados
	$sel = mysql_query("SELECT * FROM piloto WHERE id='$codigo'")or die (mysql_error());
	
	while ($row = mysql_fetch_array($sel))
		{
		$piloto      = $row['nomePiloto'];
		$cpf         = $row['cpf'];
		$identidade  = $row['identidade'];
		$senha       = $row['senha'];
		$endereco    = $row['endereco'];
		$cidade      = $row['cidade'];
		$telefone    = $row['telefone'];
		$numero      = $row['numero'];
		$id          = $row['id'];
		$email       = $row['email'];
		$cep         = $row['cep'];
		$bairro      = $row['bairro'];
		$uf 		 = $row['estado'];
		$cod		 = $row['id'];


		
		$data = explode('a ', $data);
		}
		
}
//excluir dados da tabela
if ($ex!=''){
	
	mysql_query("DELETE FROM piloto WHERE id = '$ex'")or die (mysql_error);
	
	echo "<meta http-equiv='refresh' content='0;URL=consulta.php'>";
	}
?>