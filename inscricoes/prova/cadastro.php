<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROENDURO</title>
</head>
<?php
include ("../mysql/conexao_mysql.php");

$nome  = $_REQUEST['nome'];
$local = $_REQUEST['local'];
$data1 = $_REQUEST['data1'];
$data2 = $_REQUEST['data2'];
$campe = $_REQUEST['campe'];
$cate  = $_REQUEST['cate'];
$cod   = $_REQUEST['cod'];

//trocar as barra da data e colocar -
$data1 = str_replace("/","-",$data1);
$data2 = str_replace("/","-",$data2);

//verificar se os campos de datas estao preenchidos
if (($data1<>'')and($data2<>'')){
//concatenar as datas
$data= "$data1 a $data2";
} elseif(($data2<>'')and($data1=='')){
	echo "<script type='text/javascript'> window.alert('PREENCHA OS CAMPOS DATA CORRETAMENTE');</script>";
   echo "<script>window.location = 'javascript:history.go(-1);'</script>";
   exit();
   
	}else{
		$data = $data1;
	}


//verificar os campos estao preenchidos
if (($local=='') || ($data =='') || ($campe=='') || ($nome=='') || ($cate=='')){
	echo "<script type='text/javascript'> window.alert('PREENCHA TODOS OS CAMPOS');</script>";
    echo "<script>window.location = 'javascript:history.go(-1);'</script>";
	exit();
	}
	//fazer alteração
	else if($cod!=''){
	$up = mysql_query("UPDATE prova SET prova='$nome', local='$local', data='$data', campeonato='$campe', categoria_prova='$cate'
	 WHERE id_prova='$cod'")or die (mysql_error());
	 echo "<script type='text/javascript'> window.alert('ALTERADO COM SUCESSO');</script>";
   /* echo "<script>window.location = 'javascript:history.go(-2);'</script>";*/
echo "<meta http-equiv='refresh' content='0;URL=consulta.php'>";	
exit();
	}else{




//fazer cadastro na tabela

$sql = mysql_query("INSERT INTO prova(prova, local, data, campeonato, categoria_prova)
					VALUES('$nome','$local','$data', '$campe', '$cate')")or die (mysql_error());
					
	echo "<script type='text/javascript'> window.alert('CADASTRADO COM SUCESSO');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=consulta.php'>";
   /* echo "<script>window.location = 'javascript:history.go(-2);'</script>";	*/			
	
	}
?>
<body>
</body>
</html>
