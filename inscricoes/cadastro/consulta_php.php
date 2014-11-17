<?php
$busca = $_REQUEST['piloto'];
$class = 'odd';


if ($busca == '')
{
	//busca tudo o que esta na tabela
	$tab = mysql_query("SELECT * FROM piloto ORDER BY id DESC")or die (mysql_error());

	while ($row = mysql_fetch_array($tab))
		{
		$piloto   = $row['nomePiloto'];
		$cpf      = $row['cpf'];
		$cidade   = $row['cidade'];
		$telefone = $row['telefone'];
		$numero   = $row['numero'];
		$id       = $row['id'];

	
		echo "
	
		<tr class='$class'>
    	<td align='center'><a href='index.php?Codigo=" . $id . "'><img src='../imagem/botao_edit.png'/></a></td>
    	<th nowrap='nowrap'>$piloto</th>
    	<td nowrap='nowrap'>$cpf</td>
    	<td>$cidade</td>
    	<td nowrap='nowrap'>$telefone </td>
    	<td>$numero</td>
    	<td align='center'><a href='javascript:;' onClick='confirma($id)'><img src='../imagem/botao_drop.png'/></a></td>
    	</tr>";
		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}	
		}
	}else{
//consultar banco de dados
	$sql = mysql_query("SELECT * FROM piloto WHERE nomePiloto LIKE '%$busca%' ") or die (mysql_error());
	
	while ($row = mysql_fetch_array($sql))
		{
		$piloto   = $row['nomePiloto'];
		$cpf      = $row['cpf'];
		$cidade   = $row['cidade'];
		$telefone = $row['telefone'];
		$numero   = $row['numero'];
		$id       = $row['id'];

	
		echo "
	
		<tr class='$class'>
    	<td align='center'><a href='index.php?Codigo=" . $id . "'><img src='../imagem/botao_edit.png'/></a></td>
    	<th nowrap='nowrap'>$piloto</th>
    	<td nowrap='nowrap'>$cpf</td>
    	<td>$cidade</td>
    	<td nowrap='nowrap'>$telefone </td>
    	<td>$numero</td>
    	<td align='center'><a href='javascript:;' onClick='confirma($id)'><img src='../imagem/botao_drop.png'/></a></td>
    	</tr>";
		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}	
	}
}
?>