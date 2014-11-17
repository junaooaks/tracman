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
            <td><div align="right">Endereço:</div></td>
            <td colspan="3"><input name="endereco" type="text" id="textfield13" value="<?php echo $endereco; ?>" size="70" maxlength="60"/></td>
          </tr>
          <tr> 
            <td><div align="right">Bairro:</div></td>
            <td ><input name="bairro" type="text" id="bairro" value="<?php echo $bairro;?>" size="28" maxlength="20"/></td>
            <td><div align="right"> Cidade:</div></td>
            <td ><label for="estado">
              <input name="cidade" type="text" id="cidade2" value="<?php echo $cidade; ?>" size="28" maxlength="30" />
              </label> </td>
          </tr>
          <tr> 
            <td><div align="right">Estado:</div></td>
            <td><select name="estado" id="select2">
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
            <td><div align="right"> Cep:</div></td>
            <td><input name="cep" type="text" id="textfield12" value="<?php echo $cep; ?>" size="28" maxlength="10" /></td>
          </tr>
          <tr> 
            <td><div align="right">Identidade (RG):</div></td>
            <td ><input name="identidade" type="text" id="identidade" value="<?php echo $identidade; ?>" size="28" maxlength="20"/></td>
            <td ><div align="right">Cpf:</div></td>
            <td ><input name="cpf" type="text" id="cpf" value="<?php echo $cpf; ?>" size="28" maxlength="15"/></td>
          </tr>
          <tr> 
            <td><div align="right">Telefone:</div></td>
            <td><input name="telefone" type="text" id="telefone2" value="<?php echo $telefone; ?>" size="28" maxlength="20"/></td>
            <td><div align="right">Email::</div></td>
            <td><input name="email" type="text" id="email2" value="<?php echo $email; ?>" size="28" maxlength="50" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Celular:</div></td>
            <td align="center"><div align="left">
                <input name="celular" type="text" id="celular3" value="<?php echo $celular; ?>" size="28" maxlength="20"/>
              </div></td>
            <td align="center"><div align="right">Senha</div></td>
            <td><input name="senha" type="password" id="senha2" value="<?php echo $senhas; ?>" size="28" maxlength="6" /> 
            </td>
          </tr>
          <tr> 
            <td height="20" align="center"> <div align="right">Patrocinio:</div></td>
            <td align="center"><div align="left"> 
                <input name="patrocinio" type="text" id="patrocinio" value="<?php echo $patrocinio; ?>" size="28" maxlength="60"/>
              </div></td>
            <td><div align="right">Confirma Senha</div></td>
            <td><input name="senhac" type="password" id="senhac" value="<?php echo $senhas; ?>" size="28"></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Nascimento:</div></td>
            <td align="center"> <div align="left"> 
                <input name="nascimento" type="text" id="nascimento" value="<?php echo $nascimento; ?>" size="28" maxlength="10" />
              </div></td>
            <td><div align="right">Moto:</div></td>
            <td><input name="moto" type="text" id="moto2" value="<?php echo $moto; ?>" size="28" maxlength="20" /></td>
          </tr>
          <tr> 
            <td align="center"><div align="right">Idade:</div></td>
            <td align="center"><input name="idade" type="text" id="idade" value="<?php echo $idade; ?>" size="28" maxlength="3" /></td>
            <td align="right">N° Piloto:</td>
            <td><input name="npiloto" type="text" id="npiloto" value="<?php echo $numero; ?>" size="28" maxlength="5"/></td>
          </tr>
          <tr>
            
          </tr>
          <tr>
            <td colspan="4" align="center"> </td>
          </tr>
          <tr> 
            <td colspan="4" align="center"><hr /></td>
          </tr>
          <td colspan="4"><div align="center"><strong>Dados Médicos</strong></div></td>
            <td >&nbsp;</td>
            <td><div align="right"></div></td>
            <td>&nbsp;</td>
          </tr><tr>
            <td align="right">Alergia à Medicamentos?</td>
            <td ><select name="alergiamedicamento" id="alergiamedicamento">
              <option value="SIM" <?php if($alergiamedicament=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($alergiamedicament=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
            <td align="right">Distúrbio Cardíaco?</td>
            <td><select name="dcardiaco" id="dcardiaco" >
              <option value="SIM" <?php if($dcardiac=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($dcardiac=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
          </tr>
          <tr>
            <td align="center"><div align="right">Eplepsia e Convulsões?</div></td>
            <td ><select name="eplepsiaconvulsao" id="eplepsiaconvulsao">
              <option value="SIM" <?php if($eplepsiaconvulsa=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($eplepsiaconvulsa=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
            <td><div align="right">Distúrbio Nervoso ou Mental?</div></td>
            <td><select name="dnervosomental" id="dnervosomental">
              <option value="SIM" <?php if($dnervosomenta=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($dnervosomenta=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
          </tr>
          <tr>
            <td align="center"><div align="right">Disturbio Sanguineo?</div></td>
            <td><select name="dsanguineo" id="dsanguineo">
              <option value="SIM" <?php if($dsanguineo=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($dsanguineo=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
            <td><div align="right">Tratamento Cirurgico?</div></td>
            <td><select name="tcirurgico" id="tcirurgico">
              <option value="SIM" <?php if($tcirurgico=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($tcirurgico=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
          </tr>
          <tr>
            <td align="center"><div align="right"> Usa medicamentos ou drogas?</div></td>
            <td><select name="usamedicamento" id="usamedicamento">
              <option value="SIM" <?php if($usamedicamento=='SIM'){echo "SELECTED";} ?> > SIM </option>
              <option value="NAO" <?php if($usamedicamento=='NAO'){echo "SELECTED";} ?> > NAO </option>
            </select></td>
            <td><div align="right">Qual medicamento usa?</div></td>
            <td><input name="medicamento" type="text" id="medicamento" value="<?php echo $medicamento; ?>" size="28" maxlength="40" /></td>
          </tr>
          <tr>
            <td align="center"><div align="right">Emergência Ligar:</div></td>
            <td align="center"><div align="left">
              <input name="emergencia" type="text" id="emergencia" value="<?php echo $emergencia; ?>" size="28" maxlength="40"/>
            </div></td>
            <td><div align="right">Plano de saúde:</div></td>
            <td><input name="planosaude" type="text" id="planosaude" value="<?php echo $planosaude; ?>" size="28" maxlength="40" /></td>
          <tr>
            <td colspan="4" align="center"><input name="cod" type="hidden" id="cod" value="<?php echo $cod;?>" />
              <input type="submit" name="button" id="button" value="Cadastrar" /></td>
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