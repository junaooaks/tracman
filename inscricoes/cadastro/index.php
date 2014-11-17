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
                                <td colspan="3"><input name="nome" type="text" id="nome" value="<?php echo $piloto; ?>" size="50" maxlength="50" />
                                    Sexo:
                                    <input type="radio" name="sexo" value="M" <?php if($sexo=='M'){echo "checked";}?>>M</input>
                                    <input type="radio" name="sexo" value="F" <?php if($sexo=='F'){echo "checked";}?>>F</input>
                                </td>

                            </tr>
                            <tr>
                                <td ><div align="right">Apelido:</div></td>
                                <td colspan="3"><input name="apelido" type="text" value="<?php echo $apelido; ?>" size="70" maxlength="50" />

                            </tr>
                            <tr>
                                <td ><div align="right">Estado Civil:</div></td>
                                <td colspan="3">
                                    <select name="civil" id="select2">
                                        <option value=""></option>
                                        <option value="SOLTEIRO" <?php
                                        if ($civil == 'SOLTEIRO') {
                                            echo "SELECTED";
                                        }
                                        ?> >SOLTEIRO</option>
                                        <option value="CASADO" <?php
                                        if ($civil == 'CASADO') {
                                            echo "SELECTED";
                                        }
                                        ?> >CASADO</option>
                                        <option value="DIVORCIADO" <?php
                                                if ($civil == 'DIVORCIADO') {
                                                    echo "SELECTED";
                                                }
                                                ?> >DIVORCIADO</option>
                                        <option value="VIUVO" <?php
                                                if ($civil == 'VIUVO') {
                                                    echo "SELECTED";
                                                }
                                                ?> >VIUVO</option>
                                    </select>
                                    Cônjuge:
                                    <input name="conjuge" type="text" value="<?php echo $conjuge; ?>" size="42" maxlength="50" /></td>

                            </tr>
                            <tr> 
                                <td><div align="right">Endereço:</div></td>
                                <td colspan="3"><input name="endereco" type="text" id="textfield13" value="<?php echo $endereco; ?>" size="70" maxlength="60"/></td>
                            </tr>
                            <tr> 
                                <td><div align="right">Bairro:</div></td>
                                <td ><input name="bairro" type="text" id="bairro" value="<?php echo $bairro; ?>" size="28" maxlength="20"/></td>
                                <td><div align="right"> Cidade:</div></td>
                                <td ><label for="estado">
                                        <input name="cidade" type="text" id="cidade2" value="<?php echo $cidade; ?>" size="28" maxlength="30" />
                                    </label> </td>
                            </tr>
                            <tr> 
                                <td><div align="right">Estado:</div></td>
                                <td><select name="estado" id="select2">
                                        <option value="AC" <?php
                                        if ($uf == 'AC') {
                                            echo "SELECTED";
                                        }
                                        ?> >Acre 
                                            - AC</option>
                                        <option value="AL" <?php
                                        if ($uf == 'AL') {
                                            echo "SELECTED";
                                        }
                                        ?> >Alagoas 
                                            - AL</option>
                                        <option value="AP" <?php
                                        if ($uf == 'AP') {
                                            echo "SELECTED";
                                        }
                                        ?> >Amapá 
                                            - AP</option>
                                        <option value="AM" <?php
                                        if ($uf == 'AM') {
                                            echo "SELECTED";
                                        }
                                        ?> >Amazonas 
                                            - AM</option>
                                        <option value="BA" <?php
                                        if ($uf == 'BA') {
                                            echo "SELECTED";
                                        }
                                        ?> >Bahia 
                                            - BA</option>
                                        <option value="CE" <?php
                                        if ($uf == 'CE') {
                                            echo "SELECTED";
                                        }
                                        ?> >Ceará 
                                            - CE</option>
                                        <option value="DF" <?php
                                        if ($uf == 'DF') {
                                            echo "SELECTED";
                                        }
                                        ?> >Distrito 
                                            Federal - DF</option>
                                        <option value="ES" <?php
                                        if ($uf == 'ES') {
                                            echo "SELECTED";
                                        }
                                        ?> >Espírito 
                                            Santo - ES</option>
                                        <option value="GO" <?php
                                        if ($uf == 'GO') {
                                            echo "SELECTED";
                                        }
                                        ?> >Goiás 
                                            - GO</option>
                                        <option value="MA" <?php
                                        if ($uf == 'MA') {
                                            echo "SELECTED";
                                        }
                                        ?> >Maranhão 
                                            - MA</option>
                                        <option value="MT" <?php
                                        if ($uf == 'MT') {
                                            echo "SELECTED";
                                        }
                                        ?> >Mato 
                                            Grosso - MT</option>
                                        <option value="MS" <?php
                                        if ($uf == 'MS') {
                                            echo "SELECTED";
                                        }
                                        ?> >Mato 
                                            Grosso do Sul - MS</option>
                                        <option value="MG" <?php
                                        if ($uf == 'MG') {
                                            echo "SELECTED";
                                        }
                                        ?> >Minas 
                                            Gerais - MG</option>
                                        <option value="PA" <?php
                                        if ($uf == 'PA') {
                                            echo "SELECTED";
                                        }
                                        ?> >Pará 
                                            - PA</option>
                                        <option value="PB" <?php
                                        if ($uf == 'PB') {
                                            echo "SELECTED";
                                        }
                                        ?> >Paraíba 
                                            - PB</option>
                                        <option value="PR" <?php
                                        if ($uf == 'PR') {
                                            echo "SELECTED";
                                        }
                                        ?> >Paraná 
                                            - PR</option>
                                        <option value="PE" <?php
                                        if ($uf == 'PE') {
                                            echo "SELECTED";
                                        }
                                        ?> >Pernambuco 
                                            - PE</option>
                                        <option value="PI" <?php
                                        if ($uf == 'PI') {
                                            echo "SELECTED";
                                        }
                                        ?> >Piauí 
                                            - PI</option>
                                        <option value="RJ" <?php
                                        if ($uf == 'RJ') {
                                            echo "SELECTED";
                                        }
                                        ?> >Rio 
                                            de Janeiro - RJ</option>
                                        <option value="RN" <?php
                                        if ($uf == 'RN') {
                                            echo "SELECTED";
                                        }
                                        ?> >Rio 
                                            Grande do Norte - RN</option>
                                        <option value="RS" <?php
                                        if ($uf == 'RS') {
                                            echo "SELECTED";
                                        }
                                        ?> >Rio 
                                            Grande do Sul - RS</option>
                                        <option value="RO" <?php
                                        if ($uf == 'RO') {
                                            echo "SELECTED";
                                        }
                                        ?> >Rondônia 
                                            - RO</option>
                                        <option value="RR" <?php
                                        if ($uf == 'RR') {
                                            echo "SELECTED";
                                        }
                                        ?> >Rorâima 
                                            - RR</option>
                                        <option value="SC" <?php
                                        if ($uf == 'SC') {
                                            echo "SELECTED";
                                        }
                                        ?> >Santa 
                                            Catarina - SC</option>
                                        <option value="SP" <?php
                                        if ($uf == 'SP') {
                                            echo "SELECTED";
                                        }
                                        ?> >São 
                                            Paulo - SP</option>
                                        <option value="SE" <?php
                                        if ($uf == 'SE') {
                                            echo "SELECTED";
                                        }
                                        ?> >Sergipe 
                                            - SE</option>
                                        <option value="TO" <?php
                                        if ($uf == 'TO') {
                                            echo "SELECTED";
                                        }
                                        ?> >Tocantins 
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
                                <td><div align="right">Telefone Contato:</div></td>
                                <td><input name="contato" type="text" value="<?php echo $telefonecontato; ?>" size="28" maxlength="50" /></td>
                            </tr>
                            <tr>
                                <td><div align="right">Email:</div></td>
                                <td colspan="3"><input name="email" type="text" id="email2" value="<?php echo $email; ?>" size="70" maxlength="50" /></td>
                            </tr>
                            <tr>
                                <td align="center"><div align="right">Nacionalidade:</div></td>
                                <td><input name="nacionalidade" type="text" value="<?php echo $nacionalidade; ?>" size="28" maxlength="20"/></td>
                                <td align="center"><div align="right">Naturalidade:</div></td>
                                <td><input name="naturalidade" type="text" value="<?php echo $naturalidade; ?>" size="28" maxlength="20"/></td>

                            </tr>
                            <tr> 
                                <td align="center"><div align="right">Celular:</div></td>
                                <td align="center"><div align="left">
                                        <input name="celular" type="text" id="celular3" value="<?php echo $celular; ?>" size="28" maxlength="20"/>
                                    </div></td>

                                <td align="center"><div align="right">Nascimento:</div></td>
                                <td align="center"> <div align="left"> 
                                        <input name="nascimento" type="text" id="nascimento" value="<?php echo $nascimento; ?>" size="28" maxlength="10" />
                                    </div></td>


                            </tr>
                            <tr> 
                                <td align="center"><div align="right">Senha</div></td>
                                <td><input name="senha" type="password" id="senha2" value="<?php echo $senhas; ?>" size="28" maxlength="6" /> 
                                </td>
                                <td><div align="right">Confirma Senha</div></td>
                                <td><input name="senhac" type="password" id="senhac" value="<?php echo $senhas; ?>" size="28"></td>
                            </tr>
                            <tr> 
                                <td align="center"><div align="right">Renavan:</div></td>
                                <td align="center"><input name="renavan" type="text" value="<?php echo $renavan; ?>" size="28" /></td>
                                <td><div align="right">Moto:</div></td>
                                <td><input name="moto" type="text" id="moto2" value="<?php echo $moto; ?>" size="28" maxlength="20" /></td>
                            </tr>
                            <tr> 
                                <td align="center"><div align="right">Chassi:</div></td>
                                <td><input name="chassi" type="text" value="<?php echo $chassi; ?>" size="28" /></td>
                                <td align="center"><div align="right">CNH:</div></td>
                                <td><input name="cnh" type="text" value="<?php echo $cnh; ?>" size="28" /></td>

                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <td colspan="4" align="center"> </td>
                            </tr>
                            <tr> 
                                <td colspan="4" align="center"><hr /></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div align="center"><strong>Dados Médicos</strong></div></td>
                                <td >&nbsp;</td>
                                <td><div align="right"></div></td>
                                <td>&nbsp;</td>
                            </tr><tr>
                                <td align="right">Alergia?</td>
                                <td><input name="alergiamedicamento" type="text" value="<?php echo $alergiamedicamento; ?>" size="28" /></td>
                                <td align="right">Tipo Sanguínio?</td>
                                <td><input name="sangue" type="text" value="<?php echo $sangue; ?>" size="28" /></td>
                            </tr>


                            <tr>
                                <td align="center"><div align="right">Emergência Ligar:</div></td>
                                <td align="center"><div align="left">
                                        <input name="emergencia" type="text" id="emergencia" value="<?php echo $emergencia; ?>" size="28"/>
                                    </div></td>
                                <td><div align="right">Plano de saúde:</div></td>
                                <td><input name="planosaude" type="text" id="planosaude" value="<?php echo $planosaude; ?>" size="28" maxlength="40" /></td>
                                <tr>
                                    <td align="right">Pessoa de Contato:</td>
                                    <td colspan="3"><input name="contato" type="text" value="<?php echo $saudeContato; ?>" size="70" /></td>
                                </tr>



                                <tr> 
                                    <td colspan="4" align="center"><hr /></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><div align="center"><strong>Situação Funcional</strong></div></td>
                                    <td>&nbsp;</td>
                                    <td><div align="right"></div></td>
                                    <td>&nbsp;</td>
                                </tr><tr>
                                    <td align="right">Empresa / Órgão / Entidade</td>
                                    <td colspan="3"><input name="empresa" type="text" value="<?php echo $empresa; ?>" size="70" /></td>
                                </tr>
                                <tr>
                                    <td align="right">Cargo/função:</td>
                                    <td><input name="cargo" type="text" value="<?php echo $cargo; ?>" size="28" /></td>
                                    <td>Tempo de serviço:</td>
                                    <td><input name="tempodeservico" type="text" value="<?php echo $tempodeservico; ?>" size="28"  /></td>
                                </tr>
                                <tr>
                                    <td align="center"><div align="right">Endereço Profissão:</div></td>
                                    <td><input name="endereco2" type="text" value="<?php echo $endereco2; ?>" size="28"/></td>
                                    <td><div align="right">Número:</div></td>
                                    <td><input name="numero2" type="text" value="<?php echo $numero2; ?>" size="28"  /></td>
                                </tr>
                                <tr> 
                                    <td><div align="right">Bairro:</div></td>
                                    <td ><input name="bairro2" type="text" value="<?php echo $bairro2; ?>" size="28" maxlength="20"/></td>
                                    <td><div align="right"> Cidade:</div></td>
                                    <td ><input name="cidade2" type="text" value="<?php echo $cidade2; ?>" size="28" maxlength="30" /></td>
                                </tr>
                                <tr> 
                                    <td><div align="right">Estado:</div></td>
                                    <td><select name="estado2" id="select2">
                                            <option value="AC" <?php
                                            if ($uf2 == 'AC') {
                                                echo "SELECTED";
                                            }
                                            ?> >Acre 
                                                - AC</option>
                                            <option value="AL" <?php
                                            if ($uf2 == 'AL') {
                                                echo "SELECTED";
                                            }
                                            ?> >Alagoas 
                                                - AL</option>
                                            <option value="AP" <?php
                                            if ($uf2 == 'AP') {
                                                echo "SELECTED";
                                            }
                                            ?> >Amapá 
                                                - AP</option>
                                            <option value="AM" <?php
                                            if ($uf2 == 'AM') {
                                                echo "SELECTED";
                                            }
                                            ?> >Amazonas 
                                                - AM</option>
                                            <option value="BA" <?php
                                            if ($uf2 == 'BA') {
                                                echo "SELECTED";
                                            }
                                            ?> >Bahia 
                                                - BA</option>
                                            <option value="CE" <?php
                                            if ($uf2 == 'CE') {
                                                echo "SELECTED";
                                            }
                                            ?> >Ceará 
                                                - CE</option>
                                            <option value="DF" <?php
                                            if ($uf2 == 'DF') {
                                                echo "SELECTED";
                                            }
                                            ?> >Distrito 
                                                Federal - DF</option>
                                            <option value="ES" <?php
                                            if ($uf2 == 'ES') {
                                                echo "SELECTED";
                                            }
                                            ?> >Espírito 
                                                Santo - ES</option>
                                            <option value="GO" <?php
                                            if ($uf2 == 'GO') {
                                                echo "SELECTED";
                                            }
                                            ?> >Goiás 
                                                - GO</option>
                                            <option value="MA" <?php
                                            if ($uf2 == 'MA') {
                                                echo "SELECTED";
                                            }
                                            ?> >Maranhão 
                                                - MA</option>
                                            <option value="MT" <?php
                                            if ($uf2 == 'MT') {
                                                echo "SELECTED";
                                            }
                                            ?> >Mato 
                                                Grosso - MT</option>
                                            <option value="MS" <?php
                                            if ($uf2 == 'MS') {
                                                echo "SELECTED";
                                            }
                                            ?> >Mato 
                                                Grosso do Sul - MS</option>
                                            <option value="MG" <?php
                                            if (($uf2 == 'MG') || ($uf2 == '')) {
                                                echo "SELECTED";
                                            }
                                            ?> >Minas 
                                                Gerais - MG</option>
                                            <option value="PA" <?php
                                            if ($uf2 == 'PA') {
                                                echo "SELECTED";
                                            }
                                            ?> >Pará 
                                                - PA</option>
                                            <option value="PB" <?php
                                            if ($uf2 == 'PB') {
                                                echo "SELECTED";
                                            }
                                            ?> >Paraíba 
                                                - PB</option>
                                            <option value="PR" <?php
                                            if ($uf2 == 'PR') {
                                                echo "SELECTED";
                                            }
                                            ?> >Paraná 
                                                - PR</option>
                                            <option value="PE" <?php
                                            if ($uf2 == 'PE') {
                                                echo "SELECTED";
                                            }
                                            ?> >Pernambuco 
                                                - PE</option>
                                            <option value="PI" <?php
                                            if ($uf2 == 'PI') {
                                                echo "SELECTED";
                                            }
                                            ?> >Piauí 
                                                - PI</option>
                                            <option value="RJ" <?php
                                            if ($uf2 == 'RJ') {
                                                echo "SELECTED";
                                            }
                                            ?> >Rio 
                                                de Janeiro - RJ</option>
                                            <option value="RN" <?php
                                            if ($uf2 == 'RN') {
                                                echo "SELECTED";
                                            }
                                            ?> >Rio 
                                                Grande do Norte - RN</option>
                                            <option value="RS" <?php
                                            if ($uf2 == 'RS') {
                                                echo "SELECTED";
                                            }
                                            ?> >Rio 
                                                Grande do Sul - RS</option>
                                            <option value="RO" <?php
                                            if ($uf2 == 'RO') {
                                                echo "SELECTED";
                                            }
                                            ?> >Rondônia 
                                                - RO</option>
                                            <option value="RR" <?php
                                            if ($uf2 == 'RR') {
                                                echo "SELECTED";
                                            }
                                            ?> >Rorâima 
                                                - RR</option>
                                            <option value="SC" <?php
                                            if ($uf2 == 'SC') {
                                                echo "SELECTED";
                                            }
                                            ?> >Santa 
                                                Catarina - SC</option>
                                            <option value="SP" <?php
                                            if ($uf2 == 'SP') {
                                                echo "SELECTED";
                                            }
                                            ?> >São 
                                                Paulo - SP</option>
                                            <option value="SE" <?php
                                            if ($uf2 == 'SE') {
                                                echo "SELECTED";
                                            }
                                            ?> >Sergipe 
                                                - SE</option>
                                            <option value="TO" <?php
                                            if ($uf2 == 'TO') {
                                                echo "SELECTED";
                                            }
                                            ?> >Tocantins 
                                                - TO</option>
                                        </select></td>
                                    <td><div align="right"> Cep:</div></td>
                                    <td><input name="cep2" type="text" id="textfield12" value="<?php echo $cep2; ?>" size="28" maxlength="10" /></td>
                                </tr>
                                <tr>
                                    <td><div align="right">Telefone Comercial:</div></td>
                                    <td><input name="telefonecontato" type="text" value="<?php echo $telefoneEmpresa; ?>" size="28" maxlength="50" /></td>
                                    <td><div align="right">Data:</div></td>
                                    <td><input name="data" type="text" value="<?php echo date("d/m/Y"); ?>" readonly size="28" maxlength="50" /></td>

                                </tr>

                                <tr> 
                                    <td colspan="4" align="center"><hr /></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><div align="center"><strong>Declaração</strong></div></td>
                                    <td >&nbsp;</td>
                                    <td><div align="right"></div></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr><td colspan="4"><p align=”Justify”> 
                                            Declaro para os devidos fins, que estou participando deste clube por 
                                            minha livre e espontânea vontade e </br>estou ciente que trata-se de 
                                            uma atividade esportiva de alto risco para minha segurança e saúde. </br> 
                                            Declaro também que me encontro física e clinicamente apto a participar 
                                            de tal atividade esportiva. </br>Concordo em observar e acatar qualquer 
                                            decisão oficial dos diretores do TRACMAN com objetivo de </br>manter a 
                                            minha segurança e dos demais afiliados. Assumo ainda todos os riscos e 
                                            isento o TRACMAN </br>bem como seus afiliados de quaisquer acidentes a 
                                            que venha sofrer que possa ocasionar-me alguma lesão </br>física, 
                                            tais como quedas, acidente que cause invalidez ou mesmo morte, contatos 
                                            com outros participantes, </br>efeito do clima, incluindo aqui alto calor 
                                            e suas consequências, condições de tráfego, além de outras </br>
                                            conseqüências que possam ter origem em minha falta de condicionamento físico
                                            para participar dos eventos</br> do TRACMAN. Tendo em vista esta renúncia de 
                                            direitos e conhecendo estes fatos, e por sua consideração </br>em aceitar 
                                            esta inscrição, eu, por mim mesmo e por ninguém mais que se faça por 
                                            eu representar em meu </br>favor, renuncio e libero o TRACMAN e 
                                            todos seus afiliados ou sucessores de todas as reclamações ou </br>
                                            responsabilidade por qualquer fato, ainda que a responsabilidade provenha 
                                            da negligência ou falta </br>de atenção de parte da entidade aqui nominada.
                                            Estou ciente que qualquer dano aos terceiros provocados </br>por mim, 
                                            serei o único responsável. Concedo ainda permissão ao TRACMAN e seus afiliados 
                                            para utilizarem </br>fotografias, filmagens ou qualquer outra forma que 
                                            mostre minha participação nos eventos do clube.
                                            </br>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">  <input type="checkbox" name="valida" value="1" <?php if ($valida==1){echo "checked";}?>></input>  Por ser Verdade firmo o presente.</td>

                                </tr>


                                <tr>
                                    <td colspan="4" align="center"><input name="cod" type="hidden" id="cod" value="<?php echo $cod; ?>" />
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