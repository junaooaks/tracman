<?php
include ("../mysql/conexao_mysql.php"); 

$idpiloto = $_REQUEST['idpiloto'];
$idprova  = $_REQUEST['idprova'];
$categoria= $_REQUEST['categoria'];

//verificar se piloto ja escrito

$my = mysql_query("SELECT * FROM fichas WHERE piloto_id='$idpiloto' AND prova_id='$idprova' AND categoria='$categoria'") or die (mysql_error());
//pegar o numero de linha de retorno
$num = mysql_num_rows($my);

if ($num>=1){
echo "<script type='text/javascript'> window.alert('PILOTO JA CADASTRADO NESTA PROVA / CATEGORIA');</script>";
   echo "<script>window.location = 'javascript:history.go(-1);'</script>";
   exit();
}else{


//cadastrar piloto de prova

$sql = mysql_query("INSERT INTO fichas(prova_id, piloto_id, categoria)
				    VALUES('$idprova','$idpiloto','$categoria')")or die (mysql_error());
					
	echo "<script type='text/javascript'> window.alert('Inscrição Realizada com sucesso!!!.');</script>";
//	echo "<meta http-equiv='refresh' content='0;URL=../login/index.php'>";
  echo "<script>window.location = 'javascript:history.go(-2);'</script>"; 			

}
?>
