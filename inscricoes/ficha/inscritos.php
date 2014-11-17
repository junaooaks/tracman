<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>PRO-VELO</title>
    <link rel="stylesheet" type="text/css" href="../css/css.css" />
    <?php include ("../mysql/conexao_mysql.php"); ?>
<STYLE TYPE="text/css">
</STYLE>
</head>
<body>
<?php
$ordem = $_REQUEST['ordem'];
$prova_id = $_REQUEST['prova'];
if ($ordem=='') {$ordem = 'NomePiloto';}
        //busca tudo o que esta na tabela
	$sql=mysql_query("SELECT * FROM prova wheRE id_prova=$prova_id")or die (mysql_error());
	$row=mysql_fetch_array($sql);
                $nome = $row['prova'];
                $local      = $row['local'];
                $data       = $row['data'];
                $campeonato = $row['campeonato'];

 echo"<font face='verdana'><center>
<font size='5'>$campeonato</font><br><font size='4'>$nome - $local</center></font></font><br><br>";
//echo "<a href='inscritos.php?prova=$prova&ordem=categoria,nomePiloto'>Ordenar por categoria</a>";
echo "<table border='1' cellspacing='0' cellpadding='0' bordercolor='#00BFFF' align='center'>
<tr bgcolor='#DCDCDC'>
	<td ><b><a href='inscritos.php?prova=$prova&ordem=id_ficha'>#</a></td>
	<td ><b><a href='inscritos.php?prova=$prova&ordem=nomePiloto'>Nome</a></td>
	<td ><b><a href='inscritos.php?prova=$prova&ordem=abs(numero),nomePiloto'>Número</a></td>
	<td><b><a href='inscritos.php?prova=$prova&ordem=cidade,nomePiloto'>Cidade</a></td>
	<td ><b> <a href='inscritos.php?prova=$prova&ordem=categoria,nomePiloto'>Categoria</a></td>
</tr>";
$p=1;
$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=$prova_id and prova.id_prova=$prova_id and piloto.id=fichas.piloto_id ORDER BY $ordem")or die (mysql_error());

        while ($row = mysql_fetch_array($sql))
                {
            //    $prova      = $row['prova'];
          //      $local      = $row['local'];
         //       $data       = $row['data'];
          //      $campeonato = $row['campeonato'];
                $categoria  = $row['categoria'];
                $nome         = $row['nomePiloto'];
        //        $rg     = $row['identidade'];
       //         $cpf         = $row['cpf'];
                $cidade         = $row['cidade'];
        //        $uf         = $row['estado'];
       //         $endereco         = $row['endereco'];
       //         $bairro         = $row['bairro'];
       //         $cep         = $row['cep'];
       //         $telefone         = $row['telefone'];
                $numero         = $row['numero'];
       //         $patrocinio         = $row['patrocinio'];

echo "
<tr";
$p1=($p % 2);

if ($p1 == '0')
	{ $cor= "bgcolor='#E6E6FA'";}
	else
 	{ $cor="";}
echo " $cor ><td> $p </td> <td> $nome </td><td> $numero </td><td> $cidade </td><td> $categoria </td></tr>";
$p=$p+1;}
echo "</table>";
?>
