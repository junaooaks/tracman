<?php

include ("../mysql/conexao_mysql.php");

$codigo= $_REQUEST['Codigo'];
$ex    = $_REQUEST['codExcluir'];

// alterar dados do formulario
if(($codigo<>'')and ($ex=='')){
	
	//selecionar informação no banco de dados
	$sel = mysql_query("SELECT * FROM prova WHERE id_prova='$codigo'")or die (mysql_error());
	
	while ($row = mysql_fetch_array($sel))
		{
		$cod   = $row['id_prova'];
		$prova = $row['prova'];
		$local = $row['local'];
		$data  = $row['data'];
		$camp  = $row['campeonato'];
		$cat   = $row['categoria_prova'];
		$id    = $row['id_prova'];
		
		$data = explode('a ', $data);
		}
		
}
//excluir dados da tabela
if ($ex!=''){
	
	mysql_query("DELETE FROM prova WHERE id_prova = '$ex'")or die (mysql_error);
	
	echo "<meta http-equiv='refresh' content='0;URL=consulta.php'>";
	}
?>