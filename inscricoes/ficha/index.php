<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRO-Velo</title>
 <link rel="stylesheet" type="text/css" href="../css/css.css" />
 <?php include ("../mysql/conexao_mysql.php"); ?>
</head>
<body>
<form id="form1" name="form1" method="post" action="cadastro.php">
  <table align="center">
    <thead>
      <tr>
        <th id="th2">Prova</th>
        <th id="th3">Campeonato</th>
        <th id="th4">Categorias</th>
        <th id="th5">Local</th>
        <th id="th6">Inscri&ccedil;&otilde;es on-line at&eacute;:</th>
        <th id="th7">Inscri&ccedil;&atilde;o</th>
        <th id="th7">Inscritos</th>
      </tr>
    </thead>
    <tbody>
      <?php include ("consulta.php"); ?>
    </tbody>
  </table>
</form>
</body>
</html>