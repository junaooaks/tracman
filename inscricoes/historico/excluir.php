<?php 
include ("../mysql/conexao_mysql.php");
$idprova = $_REQUEST['idprova'];
$idpiloto= $_REQUEST['idpiloto'];
$categoria= $_REQUEST['categoria'];

mysql_query("DELETE FROM fichas WHERE prova_id = '$idprova' AND piloto_id = '$idpiloto' AND categoria='$categoria'")or die (mysql_error);
	echo "<script type='text/javascript'> window.alert('Sua Inscricao nesta prova foi cancelada.');</script>";
//	echo "<meta http-equiv='refresh' content='0;URL=../login/index.php'>";
 echo "<script>window.location = 'javascript:history.go(-2);'</script>";
?>
