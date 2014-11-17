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

//verificar se piloto ja escrito

//$my = mysql_query("SELECT * FROM fichas WHERE fichas.piloto_id='$piloto' AND fichas.prova_id='$cod'")or die (mysql_error());
//pegar o numero de linha de retorno
//$num = mysql_num_rows($my);

//if ($num>=1){
//echo "<script type='text/javascript'> window.alert('PILOTO JA CADASTRADO NESTA PROVA');</script>";
//   echo "<script>window.location = 'javascript:history.go(-1);'</script>";
//   exit();
//}else{

echo" <center><h2>Selecione a categoria desejada e clique no bot&atilde;o Confirmar </h2></center> ";

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
      <td><input name='idpiloto' type='hidden' id='idpiloto'value=$piloto'/>
	  	   <input name='idprova' type='hidden' id='idprova'value=$cod'/>
	      $campeonato</td>
    </tr>
    <tr>
      <td>Prova:</td>
      <td>$prova</td>
    </tr>
    <tr>
      <td>Fim das insc.:</td>
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
</form> <center>
<img src='../cat.gif'> <br>
<B> OBS.: A categoria \"Nacional Iniciante B\" n&atilde;o vale pela Copa.</b>
 </center>";
		
		}
//}
?>

</body>
</html>
