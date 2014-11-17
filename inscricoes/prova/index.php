<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROENDURO</title>
<style type="text/css">@import url("../css/form.css");</style>
<script language="JavaScript" src="../js/pupdate.js"></script>
<script language="JavaScript" src="../js/data.js"></script>
<?php include ("../mysql/conexao_mysql.php");?>
<?php include ("alterarexcluir.php"); ?>
<style>
    .dia {font-family: helvetica, arial; font-size: 8pt; color: #FFFFFF}
    .data {font-family: helvetica, arial; font-size: 8pt; text-decoration:none; color:#191970}
    .mes {font-family: helvetica, arial; font-size: 8pt}
    .Cabecalho_Calendario {font-family: helvetica, arial; font-size: 10pt; color: #000000; text-decoration:none; font-weight:bold}
</style>

</head>
<body>
<form id="form1" name="form1" method="post" action="cadastro.php">
<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>CADASTRO DE PROVAS</strong></td>
  </tr>
  <tr>
    <td><fieldset>
      <legend><strong>PROVAS</strong></legend>
      
        <table width="0%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td>Nome Prova - data:</td>
            <td colspan="3"><label for="local">
              <input name="nome" type="text" id="nome" value="<?php echo $prova;?>" size="55" />
            </label></td>
            </tr>
          <tr>
            <td>Local:</td>
            <td colspan="3"><input name="local" type="text" id="local" value="<?php echo $local;?>" size="55" /></td>
          </tr>
          <tr>
            <td>Final Insc:</td>
            <td><font size="1">
              <input name="data1" id="data1" style="font-size:12px; font-family: Verdana;" value="<?php echo $data[0];?>" size="10" maxlength="10" /> dd-mm-aaaa
               </font></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td>Campeonato:</td>
            <td colspan="3"><input name="campe" type="text" id="campe" value="<?php echo $camp;?>" size="55" /></td>
            </tr>
          <tr>
            <td valign="top">Categorias:</td>
            <td colspan="3"><label for="cate"></label>
              <textarea name="cate" id="cate" cols="55" rows="5"><?php echo $cat;?></textarea></td>
          </tr>
          <tr>
            <td colspan="4" align="center"><input name="cod" type="hidden" id="cod" value="<?php echo $cod;?>" />              <input type="submit" name="button" id="button" value="Cadastrar" /></td>
            </tr>
          <tr>
            <td colspan="4" style="color:#F00;"><p>obs: As categorias são separadas por virgula e espaço(,&nbsp;).</p></td>
            </tr>
        </table>
      
    </fieldset></td>
  </tr>

</table>
  </form>
<p>&nbsp;</p>
</body>
</html>
