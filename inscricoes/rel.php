<html>
<head>
    <title>PROENDURO</title>
    <link rel="stylesheet" type="text/css" href="../css/css.css" />
    <?php include ("mysql/conexao_mysql.php"); ?>
<STYLE TYPE="text/css">
P.quebra-aqui {page-break-after: always}
</STYLE>
</head>
<body>
<?php
$p=1;
$sql = mysql_query("SELECT * FROM fichas, piloto, prova where fichas.prova_id=prova.id_prova and fichas.piloto_id=piloto.id")or die (mysql_error());

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
                $patrocinio         = $row['patrocinio'];


echo"<font face='verdana'> 
<center><h1>$campeonato</h1><h3>$prova - Data: $data - Local: $local</h3><H4>FICHA DE INSCRIÇÃO</H4></center>
Nome: $nome | Nº: $numero | Categoria: $categoria <br>
RG: $rg | CPF: $cpf | Fone: $telefone<br>
Endereço: $endereco | Bairro: $bairro<br>
Cidade: $cidade | CEP: $cep | Moto: $moto<br>
Patrocinador: $patrocinio <br>
GPS 1:_______________    GPS 2:_________________
</font>";
echo " <pre>
O piloto acima identificado ao confirmar sua inscrição declara:
1 - Serem verdadeiras as informações acima. 
2 - Ser habilitado e estar ciente e de acordo com o regulamento da CBM e da prova.
3 - Se menor de dezoito anos, ter autorização do responsável que se responsabiliza pelos
 seus atos e por quaisquer conseqüências que deles possam advir, seja a sua própria
 pessoa ou a terceiros, isentando as entidades, empresas e patrocinadores envolvidos
 direta ou indiretamente neste evento de toda e qualquer responsabilidade sobre os mesmos.
4 - Devolver os equipamentos GPS Rastro, de meu uso, e em caso extravio e ou dano total
 ou parcial, do mesmo, fico responsável em ressarcir os prejuízos decorrentes. Em caso
 de extravio ou dano total autorizo a cobrança do valor de R$ 1.200,00 pôr equipamento.


______________________________________           _______________________________________ 
      Assinatura do Responsável                            Assinatura do Piloto



</pre>";



if (!$p % 2) {echo"<p class='quebra-aqui'>$p</p>";}
$p=$p+1;
	}

?>
</body>
