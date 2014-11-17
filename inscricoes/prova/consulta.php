<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR" dir="ltr" >
<head>
   
    <title>PROENDURO</title>
    <link rel="stylesheet" type="text/css" href="../css/css.css" />
    
    <?php include ("../mysql/conexao_mysql.php"); ?>
   
   <script type="text/Javascript">
function send(action)
{
	switch(action) {
		case 'novo':
			url = 'index.php';
			break;
		
	}

	document.forms[0].action = url;
	document.forms[0].submit();
}
   
</script>
<script language="JavaScript">

function confirma(codigo) {
    if( confirm( 'ESTÁ OPÇÃO É IRREVERSÍVEL. DESEJA REALMENTE FAZER ISTO?' ) ) 
    {
        location.href='alterarexcluir.php?codExcluir=' + codigo;
    }
}

</script>
</head>
 
<body>

<form method="post" action="" name="consulta.php" >
  <table width="515" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81">Prova:</td>
      <td width="326"><label for="prova"></label>
      <input type="text" name="prova" id="prova" />
      <input type="submit" name="button2" id="button2" value="busca" /></td>
      <td width="108"><input type="submit" name="novo" value="Novo Registro" onclick="send('novo');"/></td>
    </tr>
  </table>
  <table align="center">
<thead>

<tr>
    <th id="th1">Alterar</th>
    <th id="th2">Prova - Data</th>
    <th id="th3">Campeonato</th>
    <th id="th4">Categoria</th>
    <th id="th5">Local</th>
    <th id="th6">Fim Insc.</th>
    <th id="th7">Excluir</th>
    <th id="th8">Fichas</th>
    </tr>
</thead>
<tbody>
 <?php include ("consulta_php.php"); ?>
    </tbody>
</table>
</form>
<br />
<br />
<br />
</div>
</body>
</html>

