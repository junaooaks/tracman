<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title>PRO-VELO (fichas)</title>
    <link rel="stylesheet" type="text/css" href="../css/css.css" />
    <?php include ("mysql/conexao_mysql.php"); ?>
<STYLE TYPE="text/css">
P.quebra-aqui {page-break-before: always}
</STYLE>
</head>
<body>
<?php
$prova_id = $_REQUEST['prova'];
$ordem= $_REQUEST['ordem'];
$piloto= $_REQUEST['piloto'];
if ($piloto<>"") {$sql = mysql_query("SELECT * FROM fichas, prova, piloto 
			    WHERE piloto.id='$piloto' 
			    AND fichas.prova_id = '$prova_id'
			    AND fichas.piloto_id = '$piloto'  
			    AND prova.id_prova='$prova_id' ORDER BY id_prova DESC")or die (mysql_error());}
		else
		{
		$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=$prova_id 
			and fichas.piloto_id=piloto.id and prova.id_prova=$prova_id ORDER BY $ordem")or die (mysql_error());
		}
$p=1;
//$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=prova.id_prova and fichas.piloto_id=piloto.id")or die (mysql_error());
//$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=$prova_id and fichas.piloto_id=piloto.id and prova.id_prova=$prova_id ORDER BY $ordem")or die (mysql_error());
//$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=$prova_id and fichas.piloto_id=$piloto and prova.id_prova=$prova_id ORDER BY $ordem")or die (mysql_error());
//	$sql = mysql_query("SELECT * FROM fichas, prova, piloto 
//			    WHERE piloto.id='$piloto' 
//			    AND fichas.prova_id = '$prova_id'
//			    AND fichas.piloto_id = '$piloto'  
//			    AND prova.id_prova='$prova_id' ORDER BY id_prova DESC")or die (mysql_error());

        while ($row = mysql_fetch_array($sql))
                {
                $prova      = $row['prova'];
                $local      = $row['local'];
                $data       = $row['data'];
                $campeonato = $row['campeonato'];
                $categoria  = $row['categoria'];
                $nome         = $row['nomePiloto'];
                $rg	= $row['identidade'];
                $cpf         = $row['cpf'];
                $cidade         = $row['cidade'];
                $uf         = $row['estado'];
                $endereco         = $row['endereco'];
                $bairro         = $row['bairro'];
                $cep         = $row['cep'];
                $telefone         = $row['telefone'];
                $numero         = $row['numero'];
                $moto         = $row['moto'];
                $patrocinio         = $row['patrocinio'];
				$celular     = $row['celular'];
		$email=$row['email'];
		$idade       = $row['idade'];
		$nascimento  = $row['nascimento'];
		$alergiamedicament = $row['alergiamedicamento'];
		$dcardiac   = $row['dcardiaco'];
		$eplepsiaconvulsa = $row['eplepsiaconvulsao'];
		$dnervosomenta = $row['dnervosomental'];
		$dsanguineo = $row['dsanguineo'];
		$tcirurgico = $row['tcirurgico'];
		$usamedicamento = $row['usamedicamento'];
		$medicamento = $row['medicamento'];
		$emergencia = $row['emergencia'];
		$planosaude = $row['planosaude'];
 		$nascimento = $row['nascimento'];
		$idade = $row['idade'];


echo"<font face='verdana' size='3'> 

<center>
<font size='5'>FICHA DE INSCRI&Ccedil;&Atilde;O</font><br>
<font size='4'> $campeonato</font><br><font size='3'>$prova  - $local</font><br>
</center><br>
<div align='right'><font size='4' >Categoria: $categoria |  N&ordm;: $numero</font></div><br>
Nome: <b>$nome</b> <br> Data Nasc.: $nascimento | Idade: <b>$idade</b> <br>
RG: $rg | CPF: $cpf <br> Fone: $telefone | Celular: $celular<br>
Endere&ccedil;o: $endereco | Bairro: $bairro<br>
Cidade: $cidade | CEP: $cep | Moto: $moto<br>
email: $email <br>
Patrocinador: $patrocinio <br><br>
<b> DADOS M&Eacute;DICOS</b>
<br> Al&eacute;rgico &agrave; Medicamentos? $alergiamedicament | Dist&uacute;rbio
Card&iacute;aco? $dcardiac <br>
Epilepsia e Convuls&otilde;es ? $eplepsiaconvulsa | Dist&uacute;rbio Nervoso ou Mental?
$dnervosomenta <br>
Dist&uacute;rbio Sanguineo ? $dsanguineo | Tratamento Cir&uacute;rgico? $tcirurgico <br>
Faz uso de medicamentos ou drogas? $usamedicamento | Qual  Medicamento? $medicamento <br>
Emerg&ecirc;ncia Ligar: $emergencia | Plano de Sa&uacute;de: $planosaude <br>";

echo " <font size='2'> <p align='justify'>
Eu, $nome, portador do RG N&ordm; $rg e CPF N&ordm; $cpf, Declaro para os devidos fins, que estou participando deste evento por minha livre e
espont&acirc;nea vontade e estou ciente que trata-se de uma atividade esportiva de alto
risco para minha seguran&ccedil;a e sa&uacute;de. Declaro tamb&eacute;m que me encontro
f&iacute;sica e clinicamente apto a participar de tal evento esportivo. Concordo em
observar e acatar qualquer decis&atilde;o oficial dos organizadores do evento relativa a
possibilidade de n&atilde;o termin&aacute;-lo de maneira segura. Assumo ainda todos os
riscos competir, isento seus organizadores bem como seus patrocinadores de quaisquer
acidentes a que venha sofrer que possa ocasionar-me alguma les&atilde;o f&iacute;sica,
tais como quedas, acidente que cause invalidez ou mesmo morte, contatos com outros
participantes, efeito do clima, incluindo aqui alto calor e suas conseq&uuml;&ecirc;ncias,
condi&ccedil;&otilde;es de tr&aacute;fego e do circuito al&eacute;m de outras
conseq&uuml;&ecirc;ncias que possam ter origem em minha falta de condicionamento
f&iacute;sico para participar do mencionado evento. Tendo em lista esta renuncia de
direitos e conhecendo estes fatos, e por sua considera&ccedil;&atilde;o em aceitar esta
inscri&ccedil;&atilde;o, eu, por mim mesmo e por ningu&eacute;m mais que se fa&ccedil;a
por eu representar em meu favor, renuncio e libero a Federa&ccedil;&atilde;o de
Motociclismo do Estado e todos seus patrocinadores, organizadores,
apoiadores, seus representantes ou sucessores de todas as reclama&ccedil;&otilde;es ou
responsabilidade por qualquer fato que me coloque fora da participa&ccedil;&atilde;o da
competi&ccedil;&atilde;o, ainda que responsabilidade provenha da neglig&ecirc;ncia ou
falta de aten&ccedil;&atilde;o de parte das entidades/pessoas aqui  nominadas. Estou
ciente que qualquer atendimento m&eacute;dico que for necess&aacute;rio ocasionado por
acidente na competi&ccedil;&atilde;o ser&aacute; direcionado a rede publica de atendimento
m&eacute;dico, SUS. Concedo ainda permiss&atilde;o aos organizadores do evento e a seus
patrocinadores, a utilizarem fotografias, filmagens ou qualquer outra forma que mostre
minha participa&ccedil;&atilde;o no(a) $prova.<br>
Por Ser verdade firmo o presente.</p><br>
<center>
______________________________________________________________<br>
      Assinatura do Piloto ou Respons&aacute;vel no caso menor de idade <br><br>
______________________________________________________________<br>
Testemunha
</font> 
</center>
</font>";

echo "<p class='quebra-aqui'></p>";
	}
?>
</body>
