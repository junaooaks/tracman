<?php
$busca = $_REQUEST['piloto'];
$class = 'odd';
$cod   = $_REQUEST['idpiloto'];
$hoje=strtotime("now");
$hoje=$hoje-84000;
//busca tudo o que esta na tabela
	$sql = mysql_query("SELECT * FROM prova, piloto WHERE piloto.id='$cod' ORDER BY id_prova DESC")or die (mysql_error());

	while ($row = mysql_fetch_array($sql))
		{
		$nomepiloto = $row['nomePiloto'];
		$prova      = $row['prova'];
		$local      = $row['local'];
		$data       = $row['data'];
		$campeonato = $row['campeonato'];
		$categoria  = $row['categoria_prova'];
		$id         = $row['id_prova'];
		
		$categoria =  explode(', ',$categoria);
		
		//teste junao	
		$dat = $data;
		$data      = explode('a ',$data);
		$datai = $data[0];
		$dataf = $data[1];
	
		if($dataf == ''){
 		$data = $datai;
		$data1 = strtotime($datai);
		//echo "data iniciar = $datai - $data";
		}else{
		$data = $dataf;
		$data1 = strtotime($dataf);
		//echo "ooodata final = $dataf - $data ";
		}
		//$hoje = strtotime($hoje);
		//echo "hoje = $hoje";

		echo "
		
		<tr class='$class'>
		<td nowrap='nowrap'>$prova</td>
    	<th nowrap='nowrap'>$campeonato</th>
		<td><label for='categoria'></label>
                <select name='categoria' id='categoria'>
		";
		
		for($i=0; $i<sizeof($categoria);$i++) {
			echo "<option value='".$categoria[$i]."' >".$categoria[$i]."</option>";}
		
		echo "
		</select></td>
    	<td nowrap='nowrap'>$local</td>
    	<td>$dat</td>";

 /*    	<td align='center'><a href='cadastro.php?Codigo=" . $id . "&piloto=".$cod."'><img src='../imagem/moto.png'/></a></td> */ 

echo "	<td align='center'>";
		if ($data1>$hoje) { echo"
			<a href='cadastro.php?Codigo=" . $id . "&piloto=".$cod."'>Inscrever</a>";
				}
			else 	{
				echo"finalizado";
				}
echo"	</td>
  
  	<td><a href='inscritos.php?prova=$id'>ver </a> / <a href='../imprime.php?prova=$id&piloto=$cod' target=_BLANK> imprimir ficha</a></td>
		</tr>";

		
		if ($class=='odd'){$class='even';}else{$class = 'odd';}
		
		}

echo " <h4> Sistema GuerraCross de Inscri&ccedil;&atilde;o on-line </h4>
<br><b>Piloto:</b> $nomepiloto <br><br>
Caso tenha se inscrito em prova ou categoria errada,  <a href='../historico/index.php?Codigo=$cod'
onmouseover=\"window.status='Proenduro';return true\" onmouseout=\"window.status='';return true\"
>clique aqui</a> e cancele sua inscri&ccedil;&atilde;o.</br>

<br> Para alterar seus dados,<a href='../cadastro/index.php?Codigo=$cod'
onmouseover=\"window.status='Proenduro';return true\" onmouseout=\"window.status='';return true\">clique aqui</a>. <br> <br>
Para immprimir sua(s) ficha(s), use a op&ccedil;&atilde;o \"imprimir ficha\" na coluna \"Inscritos\". <br> Sujerimos configurar todas as margens para 10mm e retirar todos os Cabe&ccedil;alhos e Rodap&eacute;s.
<br><br>
Para Inscrever-se em uma prova, clique em \"inscrever\" na prova correspondente.<br>";
?>
