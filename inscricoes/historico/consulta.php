<?php
//$hoje= date('d-m-Y');
$cod   = $_REQUEST['Codigo'];
$t1=strtotime("now");
$t1=$t1-84000;
//$hoje="12-02-2011";
	//busca na tabela
	$sql = mysql_query("SELECT * FROM fichas, prova, piloto 
			    WHERE piloto.id='$cod' 
			    AND fichas.prova_id = prova.id_prova 
			    AND piloto.id=fichas.piloto_id ORDER BY id_prova DESC")or die (mysql_error());

	while ($row = mysql_fetch_array($sql))
		{
		$nomepiloto = $row['nomePiloto'];
		$prova      = $row['prova'];
		$local      = $row['local'];
		$data       = $row['data'];
		$campeonato = $row['campeonato'];
		$id         = $row['id_prova'];
		$categoria  = $row['categoria'];
		
// Timestamp1
//$t1 = strtotime($hoje);

// Timestamp2
$t2 = strtotime($data); 
//	
//$t1 - $hoje = $t2 - $data <br>
		echo " 
	
		<tr class='$class'>
		<td nowrap='nowrap'>$prova</td>
    	<td nowrap='nowrap'>$campeonato</td>
		<td>$categoria</td>
    	<td nowrap='nowrap'>$local</td>
    	<td>$data</td> 
		<td align='center'>";
              
	
 if ($t1<=$t2) { 
				echo "<a href='excluir.php?idprova=$id&idpiloto=$cod&categoria=$categoria'>Excluir</a>";
                                }
                        else    {
                                echo "finalizado";
                                }

echo "$timestamp2</td>
		</tr>";

		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}
		

		}

?>
