<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROENDURO</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
</head>

<body>
<?php
include ("../mysql/conexao_mysql.php");
$cod = $_REQUEST['Codigo'];
$piloto = $_REQUEST['piloto'];

//pegar dados das tabelas
$sql = mysql_query("SELECT * FROM piloto, prova WHERE piloto.id = '$piloto' AND prova.id_prova='$cod'") or die (mysql_error());
while ($row = mysql_fetch_array($sql))
		{
		$pil     = $row['nomePiloto'];
		$prova      = $row['prova'];
		$local      = $row['local'];
		$data       = $row['data'];
		$campeonato = $row['campeonato'];
		$categoria  = $row['categoria_prova'];
		$id         = $row['id_prova'];
		
		$categoria =  explode(', ',$categoria);
		
		echo "
		
		<form id='form1'name='form1' method='post' action='sucesso.php'>
  <table width='0%' border='0' align='center' cellpadding='0' cellspacing='5'>
    <tr>
      <td>Nome Piloto:</td>
      <td>$pil</td>
    </tr>
    <tr>
      <td>Campeonato:</td>
      <td>$campeonato</td>
    </tr>
    <tr>
      <td>Prova:</td>
      <td>$prova</td>
    </tr>
    <tr>
      <td>Data:</td>
      <td>$data</td>
    </tr>
    <tr>
      <td>Local:</td>
      <td>$local</td>
    </tr>
    <tr>
      <td>Categoria:</td>
      <td><label for='categoria'></label>
                <select name='categoria' id='categoria'>
		";
		
		for($i=0; $i<sizeof($categoria);$i++) {
			echo "<option value='".$categoria[$i]."' >".$categoria[$i]."</option>";}
		
		echo "
		</select></td>
    </tr>
    <tr>
      <td colspan='2' align='center'><input type='submit' name='button' id='button' value='Confirmar' /></td>
    </tr>
  </table>
</form>
		";
		
		}
?>

</body>
</html>