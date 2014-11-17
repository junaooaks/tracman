<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRO VELO</title>
<style type="text/css">@import url("../css/form.css");</style>
<?php include ("alterarexcluir.php"); ?>
</head>

<body>
<table width="0%" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td ><strong>CADASTRO INDIVIDUAL DE PILOTO.</strong></td>
</tr>
  
    <td><fieldset>
      <legend>Dados Pessoais</legend>
      <form id="form1" name="form1" method="post" action="cadastro.php">
        <table width="0%" border="0" cellspacing="5" cellpadding="0">
          <tr> 
            <td ><div align="right">Nome:</div></td>
            <td colspan="3"><input name="nome" type="text" id="nome" value="<?php echo $piloto; ?>" size="70" maxlength="50" /></td>
          </tr>
          <tr> 
            <td><div align="right">Identidade:</div></td>
            <td ><input name="identidade" type="text" id="identidade" value="<?php echo $identidade; ?>" size="28" maxlength="20"/></td>
            <td ><div align="right">Cpf:</div></td>
            <td ><input name="cpf" type="text" id="cpf" value="<?php echo $cpf; ?>" size="28" maxlength="15"/></td>
          </tr>
          <tr> 
            <td><div align="right">Email:</div></td>
            <td><input name="email" type="text" id="email" value="<?php echo $email; ?>" size="28" maxlength="50" /></td>
            <td><div align="right">Senha:</div></td>
            <td><input name="senha" type="text" id="senha" value="<?php echo $senhas; ?>" size="28" maxlength="6" /></td>
          </tr>
          <tr> 
            <td><div align="right">Cidade:</div></td>
            <td><input name="cidade" type="text" id="textfield14" value="<?php echo $cidade; ?>" size="28" maxlength="30" /></td>
            <td><div align="right">UF:</div></td>
            <td><label for="estado"></label> <select name="estado" id="estado">
                <option value="AC" <?php if($uf=='AC'){echo "SELECTED";}?> >Acre 
                - AC</option>
                <option value="AL" <?php if($uf=='AL'){echo "SELECTED";}?> >Alagoas 
                - AL</option>
                <option value="AP" <?php if($uf=='AP'){echo "SELECTED";}?> >Amapá 
                - AP</option>
                <option value="AM" <?php if($uf=='AM'){echo "SELECTED";}?> >Amazonas 
                - AM</option>
                <option value="BA" <?php if($uf=='BA'){echo "SELECTED";}?> >Bahia 
                - BA</option>
                <option value="CE" <?php if($uf=='CE'){echo "SELECTED";}?> >Ceará 
                - CE</option>
                <option value="DF" <?php if($uf=='DF'){echo "SELECTED";}?> >Distrito 
                Federal - DF</option>
                <option value="ES" <?php if($uf=='ES'){echo "SELECTED";}?> >Espírito 
                Santo - ES</option>
                <option value="GO" <?php if($uf=='GO'){echo "SELECTED";}?> >Goiás 
                - GO</option>
                <option value="MA" <?php if($uf=='MA'){echo "SELECTED";}?> >Maranhão 
                - MA</option>
                <option value="MT" <?php if($uf=='MT'){echo "SELECTED";}?> >Mato 
                Grosso - MT</option>
                <option value="MS" <?php if($uf=='MS'){echo "SELECTED";}?> >Mato 
                Grosso do Sul - MS</option>
                <option value="MG" <?php if($uf=='MG'){echo "SELECTED";}?> >Minas 
                Gerais - MG</option>
                <option value="PA" <?php if($uf=='PA'){echo "SELECTED";}?> >Pará 
                - PA</option>
                <option value="PB" <?php if($uf=='PB'){echo "SELECTED";}?> >Paraíba 
                - PB</option>
                <option value="PR" <?php if($uf=='PR'){echo "SELECTED";}?> >Paraná 
                - PR</option>
                <option value="PE" <?php if($uf=='PE'){echo "SELECTED";}?> >Pernambuco 
                - PE</option>
                <option value="PI" <?php if($uf=='PI'){echo "SELECTED";}?> >Piauí 
                - PI</option>
                <option value="RJ" <?php if($uf=='RJ'){echo "SELECTED";}?> >Rio 
                de Janeiro - RJ</option>
                <option value="RN" <?php if($uf=='RN'){echo "SELECTED";}?> >Rio 
                Grande do Norte - RN</option>
                <option value="RS" <?php if($uf=='RS'){echo "SELECTED";}?> >Rio 
                Grande do Sul - RS</option>
                <option value="RO" <?php if($uf=='RO'){echo "SELECTED";}?> >Rondônia 
                - RO</option>
                <option value="RR" <?php if($uf=='RR'){echo "SELECTED";}?> >Rorâima 
                - RR</option>
                <option value="SC" <?php if($uf=='SC'){echo "SELECTED";}?> >Santa 
                Catarina - SC</option>
                <option value="SP" <?php if($uf=='SP'){echo "SELECTED";}?> >São 
                Paulo - SP</option>
                <option value="SE" <?php if($uf=='SE'){echo "SELECTED";}?> >Sergipe 
                - SE</option>
                <option value="TO" <?php if($uf=='TO'){echo "SELECTED";}?> >Tocantins 
                - TO</option>
              </select></td>
          </tr>
          <tr> 
            <td><div align="right">Endereço:</div></td>
            <td colspan="3"><input name="endereco" type="text" id="textfield13" value="<?php echo $endereco; ?>" size="70" maxlength="60"/></td>
          </tr>
          <tr> 
            <td><div align="right">Bairro:</div></td>
            <td><input name="bairro" type="text" id="textfield11" value="<?php echo $bairro;?>" size="28" maxlength="20"/></td>
            <td><div align="right">Cep:</div></td>
            <td><input name="cep" type="text" id="textfield12" value="<?php echo $cep; ?>" size="28" maxlength="10" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Telefone:</div></td>
            <td align="center"><div align="left"> 
                <input name="telefone" type="text" id="telefone" value="<?php echo $telefone; ?>" size="28" maxlength="20"/>
              </div></td>
            <td align="center"><div align="right">N° Piloto:</div></td>
            <td><input name="npiloto" type="text" id="npiloto" value="<?php echo $numero; ?>" size="28" maxlength="5"/></td>
          </tr>
          <tr> 
            <td height="20" align="center">
<div align="right">Patrocinio:</div></td>
            <td align="center"><div align="left"> 
                <input name="patrocinio" type="text" id="patrocinio" value="<?php echo $patrocinio; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Moto:</div></td>
            <td><input name="moto" type="text" id="moto" value="<?php echo $moto; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="left"></div></td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Alergia à Medicamentos:</div></td>
            <td align="center"><div align="left"> 
                <input name="alergiamedicamento" type="text" id="alergiamedicamento" value="<?php echo $alergiamedicamento; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Distúrbio Cardíaco:</div></td>
            <td><input name="dcardiaco" type="text" id="dcardiaco" value="<?php echo $dcardiaco; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Eplepsia e Convulsões:</div></td>
            <td align="center"><div align="left"> 
                <input name="eplepsiaconvulsao" type="text" id="eplepsiaconvulsao" value="<?php echo $eplepsiaconvulsao; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Distúrbio Nervoso ou Mental:</div></td>
            <td><input name="dnervosomental" type="text" id="dnervosomental" value="<?php echo $dnervosomental; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Disturbio Sanguineo:</div></td>
            <td align="center"> <div align="left"> 
                <input name="dsanguineo" type="text" id="dsanguineo" value="<?php echo $dsanguineo; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Tratamento Cirurgico:</div></td>
            <td><input name="tcirurgico" type="text" id="tcirurgico" value="<?php echo $tcirurgico; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Faz uso medicamentos ou drogas:</div></td>
            <td align="center"> <div align="left"> 
                <input name="usamedicamento" type="text" id="usamedicamento" value="<?php echo $patrocinio; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Qual medicamento:</div></td>
            <td><input name="medicamento" type="text" id="medicamento" value="<?php echo $medicamento; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Emergência Ligar:</div></td>
            <td align="center"> <div align="left"> 
                <input name="emergencia" type="text" id="emergencia" value="<?php echo $emergencia; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Plano de saúde:</div></td>
            <td><input name="planosaude" type="text" id="planosaude" value="<?php echo $planosaude; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td colspan="4" align="center"><div align="right"> 
                <input name="cod" type="hidden" id="cod" value="<?php echo $cod;?>" />
                <input type="submit" name="button" id="button" value="Cadastrar" />
              </div></td>
          </tr>
          <tr>
            <td colspan="4" align="center">&nbsp;</td>
          </tr>
        </table>
      </form>
    </fieldset></td>
  
  <tr>
    <td style="color:#F00;">obs: o CPF ser&aacute; usado para acessar o sistema. Senha no máximo 6 digitos</td>
  </tr>
</table>
</body>
</html>
