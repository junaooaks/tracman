<?php
$busca = $_REQUEST['prova'];
$class = 'odd';


if ($busca == '')
{
	//busca tudo o que esta na tabela
	$tab = mysql_query("SELECT * FROM prova ORDER BY id_prova DESC")or die (mysql_error());

	while ($row = mysql_fetch_array($tab))
		{
		$prova = $row['prova'];
		$local = $row['local'];
		$data  = $row['data'];
		$camp  = $row['campeonato'];
		$cat   = $row['categoria_prova'];
		$id    = $row['id_prova'];

	
		echo "
	
		<tr class='$class'>
    	<td align='center'><a href='index.php?Codigo=" . $id . "'><img src='../imagem/botao_edit.png'/></a></td>
    	<th nowrap='nowrap'>$prova</th>
    	<td nowrap='nowrap'>$camp</td>
    	<td>$cat</td>
    	<td nowrap='nowrap'>$local </td>
    	<td>$data</td>
    	<td align='center'><a href='javascript:;' onClick='confirma($id)'><img src='../imagem/botao_drop.png'/></a></td>
    	<td><a href='../imprime.php?prova=$id&ordem=nomePiloto' target=_blank>Non</a>
    	<a href='../imprime.php?prova=$id&ordem=categoria,nomePiloto' target=_blank> Cat</a>
    	<a href='../ficha/inscritos.php?prova=$id' target=_blank> ver</a></td>
    	</tr>";
		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}	
		}
	}else{
//consultar banco de dados
	$sql = mysql_query("SELECT * FROM prova WHERE prova LIKE '%$busca%' ") or die (mysql_error());
	
	while ($row = mysql_fetch_array($sql))
		{
		$prova = $row['prova'];
		$local = $row['local'];
		$data  = $row['data'];
		$camp  = $row['campeonato'];
		$cat   = $row['categoria_prova'];
		$id    = $row['id_prova'];

	
		echo "
	
		<tr class='$class'>
    	<td align='center'><a href='index.php?Codigo=" . $id . "'><img src='../imagem/botao_edit.png'/></a></td>
    	<th nowrap='nowrap'>$prova</th>
    	<td nowrap='nowrap'>$camp</td>
    	<td>$cat</td>
    	<td nowrap='nowrap'>$local </td>
    	<td>$data</td>
    	<td align='center'><a href='javascript:;' onClick='confirma($id)'><img src='../imagem/botao_drop.png'/></a></td>
    	<td><a href='../imprime.php?prova=$id' target=_blank>Imprime</a></td>
    	</tr>";
		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}	
	}
}
?>
