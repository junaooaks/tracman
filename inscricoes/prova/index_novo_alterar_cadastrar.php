<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROENDURO</title>
<style type="text/css">@import url("../css/form.css");</style>
<script language="JavaScript" src="../js/pupdate.js"></script>
<script language="JavaScript" src="../js/data.js"></script>
<style>
    .dia {font-family: helvetica, arial; font-size: 8pt; color: #FFFFFF}
    .data {font-family: helvetica, arial; font-size: 8pt; text-decoration:none; color:#191970}
    .mes {font-family: helvetica, arial; font-size: 8pt}
    .Cabecalho_Calendario {font-family: helvetica, arial; font-size: 10pt; color: #000000; text-decoration:none; font-weight:bold}
</style>

</head>
<script type="text/Javascript">
function send(action)
{
	switch(action) {
		case 'alterar':
			url = 'alterar.php';
			break;
		case 'excluir':
			url = 'excluir.php';
			break;
	}

	document.forms[0].action = url;
	document.forms[0].submit();
}
   
</script>
<script>
function teste(obj){
txt = document.getElementById('txt');
txt.disabled = obj.checked;
}
</script>
<script type="text/javascript">
window.onload = function(){
        id('novo').onclick = function(){
                toogle_disabled( id('form1'), false );
        }
        
}
function toogle_disabled( obj_form, bool_disabled ){
        var inputs = obj_form.getElementsByTagName('input');
		var texte = obj_form.getElementsByTagName('textarea');
        
        for( var i=0; i<inputs.length; i++ ){
                inputs[i].disabled = bool_disabled;
        }  
		for( var i=0; i<texte.length; i++ ){
                texte[i].disabled = bool_disabled;
				
        }       
}
function id( el ){
        return document.getElementById( el );
}
</script>
<body>
<form id="form1" name="form1" method="post" action="cadastro.php">
<table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td><input type="reset" name="novo" id="novo" value="NOVO"/>
      <input type="submit" name="alterar" value="ALTERAR" onclick="send('alterar');"/>
      <input type="submit" name="excluir" value="EXCLUIR" onclick="send('excluir');" /></td>
  </tr>
  <tr>
    <td><strong>CADASTRO DE PROVAS</strong></td>
  </tr>
  <tr>
    <td><fieldset>
      <legend><strong>PROVAS</strong></legend>
      
        <table width="0%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td>Nome:</td>
            <td colspan="3"><label for="local">
              <input name="nome" type="text" disabled="true" id="nome" size="55" />
            </label></td>
            </tr>
          <tr>
            <td>Local:</td>
            <td colspan="3"><input name="local" type="text" disabled="true" id="local" size="55" /></td>
          </tr>
          <tr>
            <td>Data Inicio:</td>
            <td><font size="1">
              <input name="data1" id="data1" disabled="true" style="font-size:10px; font-family: Verdana;" value="" size="10" maxlength="10" />
              <span id="pop1" style="position:absolute"></span> <a href="#" name="btnData1" id="btnData1" onclick="javascript:popdate('document.form1.data1','pop1','150',document.form1.data1.value)"><img src="../imagem/calendario.jpg" alt="" border="0" /></a></font></td>
            <td>Data Final:</td>
            <td><font size="1">
              <input name="data2" size="10" maxlength="10" disabled="true" value="" style="font-size:10px; font-family: Verdana;" />
              <a href="#" name="btnData2" id="btnData2" onclick="javascript:popdate('document.form1.data2','pop2','150',document.form1.data2.value)"><img src="../imagem/calendario.jpg" border="0" /></a>
              <!-- na span abaixo aparece o segundo calendario -->
              <span id="pop2" style="position:absolute"></span
		
		  ></font><font size="1">&nbsp;</font></td>
            </tr>
          <tr>
            <td>Campeonato:</td>
            <td colspan="3"><input name="campe" type="text" disabled="true" id="campe" size="55" /></td>
            </tr>
          <tr>
            <td valign="top">Categorias:</td>
            <td colspan="3"><label for="cate"></label>
              <textarea name="cate" disabled="true" id="cate" cols="55" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="4" align="center"><input type="submit" name="button" id="button" value="Cadastrar" /></td>
            </tr>
          <tr>
            <td colspan="4" style="color:#F00;"><p>obs: As categorias são separadas por espaço ou virgula(,).</p></td>
            </tr>
        </table>
      
    </fieldset></td>
  </tr>

</table>
  </form>
<p>&nbsp;</p>
</body>
</html>