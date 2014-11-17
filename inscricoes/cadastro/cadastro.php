<?php

include ("../mysql/conexao_mysql.php");

//receber dados do formulario
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$apelido = filter_input(INPUT_POST, 'apelido', FILTER_SANITIZE_STRING);
$civil = filter_input(INPUT_POST, 'civil', FILTER_SANITIZE_STRING);
$conjuge = filter_input(INPUT_POST, 'conjuge', FILTER_SANITIZE_STRING);
$telefonecontato = filter_input(INPUT_POST, 'telefonecontato', FILTER_SANITIZE_STRING);
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade', FILTER_SANITIZE_STRING);
$naturalidade = filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_STRING);
$moto = filter_input(INPUT_POST, 'moto', FILTER_SANITIZE_STRING);
$renavan = filter_input(INPUT_POST, 'renavan', FILTER_SANITIZE_STRING);
$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_STRING);
$sangue = filter_input(INPUT_POST, 'sangue', FILTER_SANITIZE_STRING);
$emergencia = filter_input(INPUT_POST, 'emergencia', FILTER_SANITIZE_STRING);
$planosaude = filter_input(INPUT_POST, 'planosaude', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$tempodeservico = filter_input(INPUT_POST, 'tempodeservico', FILTER_SANITIZE_STRING);
$endereco2 = filter_input(INPUT_POST, 'endereco2', FILTER_SANITIZE_STRING);
$numero2 = filter_input(INPUT_POST, 'numero2', FILTER_SANITIZE_STRING);
$bairro2 = filter_input(INPUT_POST, 'bairro2', FILTER_SANITIZE_STRING);
$cidade2 = filter_input(INPUT_POST, 'cidade2', FILTER_SANITIZE_STRING);
$estado2 = filter_input(INPUT_POST, 'estado2', FILTER_SANITIZE_STRING);
$cep2 = filter_input(INPUT_POST, 'cep2', FILTER_SANITIZE_STRING);
$comercial = filter_input(INPUT_POST, 'comercial', FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
$identidade = filter_input(INPUT_POST, 'identidade', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senhac = filter_input(INPUT_POST, 'senhac', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$npiloto = filter_input(INPUT_POST, 'npiloto', FILTER_SANITIZE_STRING);
$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
$cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_STRING);
$valida = filter_input(INPUT_POST, 'valida', FILTER_VALIDATE_BOOLEAN);


echo $email;
exit();


if (empty($valida)) {
    echo "<script type='text/javascript'> window.alert('CAMPO DECLARAÇÃO OBRIGATORIO');</script>";
    echo "<script>window.location = 'javascript:history.go(-1);'</script>";
    exit();
}

//validar cpf e cnpj
$RecebeCPF = $cpf;
//Retirar todos os caracteres que nao sejam 0-9
$s = "";
for ($x = 1; $x <= strlen($RecebeCPF); $x = $x + 1) {
    $ch = substr($RecebeCPF, $x - 1, 1);
    if (ord($ch) >= 48 && ord($ch) <= 57) {
        $s = $s . $ch;
    }
}

$RecebeCPF = $s;
if (strlen($RecebeCPF) != 11) {
    echo "<script type='text/javascript'> window.alert('CPF: $cpf INVALIDO, INFORME OS DADOS CORRETAMENTE');</script>";
    echo "<script>window.location = 'javascript:history.go(-1);'</script>";
    exit();
} else
if ($RecebeCPF == "00000000000") {
    $then;
    echo "<script type='text/javascript'> window.alert('CPF: $cpf INVALIDO, INFORME OS DADOS CORRETAMENTE');</script>";
    echo "<script>window.location = 'javascript:history.go(-1);'</script>";
    exit();
} else {
    $Numero[1] = intval(substr($RecebeCPF, 1 - 1, 1));
    $Numero[2] = intval(substr($RecebeCPF, 2 - 1, 1));
    $Numero[3] = intval(substr($RecebeCPF, 3 - 1, 1));
    $Numero[4] = intval(substr($RecebeCPF, 4 - 1, 1));
    $Numero[5] = intval(substr($RecebeCPF, 5 - 1, 1));
    $Numero[6] = intval(substr($RecebeCPF, 6 - 1, 1));
    $Numero[7] = intval(substr($RecebeCPF, 7 - 1, 1));
    $Numero[8] = intval(substr($RecebeCPF, 8 - 1, 1));
    $Numero[9] = intval(substr($RecebeCPF, 9 - 1, 1));
    $Numero[10] = intval(substr($RecebeCPF, 10 - 1, 1));
    $Numero[11] = intval(substr($RecebeCPF, 11 - 1, 1));

    $soma = 10 * $Numero[1] + 9 * $Numero[2] + 8 * $Numero[3] + 7 * $Numero[4] + 6 * $Numero[5] + 5 *
            $Numero[6] + 4 * $Numero[7] + 3 * $Numero[8] + 2 * $Numero[9];
    $soma = $soma - (11 * (intval($soma / 11)));

    if ($soma == 0 || $soma == 1) {
        $resultado1 = 0;
    } else {
        $resultado1 = 11 - $soma;
    }

    if ($resultado1 == $Numero[10]) {
        $soma = $Numero[1] * 11 + $Numero[2] * 10 + $Numero[3] * 9 + $Numero[4] * 8 + $Numero[5] * 7 + $Numero[6] * 6 + $Numero[7] * 5 +
                $Numero[8] * 4 + $Numero[9] * 3 + $Numero[10] * 2;
        $soma = $soma - (11 * (intval($soma / 11)));

        if ($soma == 0 || $soma == 1) {
            $resultado2 = 0;
        } else {
            $resultado2 = 11 - $soma;
        }
        if ($resultado2 == $Numero[11]) {

// aqui comeca se o cpf tiver ok
            //verificar se cpf ja existe no sistema
            $sq = mysql_query("SELECT cpf FROM piloto WHERE cpf='$cpf'") or die(mysql_error());

            //pegar numero de retorno de linha
            $row = mysql_num_rows($sq);

            //verificar a quantidade de linha de retorno
            if (($row >= 1) and ( $cod == '')) {
                echo "<script type='text/javascript'> window.alert('ESTE CPF JA ESTA CADASTRADO');</script>";
                echo "<script>window.location = 'javascript:history.go(-1);'</script>";
                exit();
            }

//VALIDAR EMAIL 
            if (preg_match("/^[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*@[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*\\.[A-Za-z0-9]{2,4}$/", $email)) {

//validar sernha 
                if (($senha == '')or ( $senha <> $senhac)) {
                    echo "<script type='text/javascript'> window.alert('Preencha a SENHA corretamente');</script>";
                    echo "<script>window.location = 'javascript:history.go(-1);'</script>";
                    exit();
                }

                if ($cod != '') {

                    $up = mysql_query("UPDATE piloto SET "
                            . "nomePiloto='$nome', sexo='$sexo', apelido='$apelido', civil='$civil', 
                    conjuge='$conjuge', identidade='$identidade', cpf='$cpf', email='$email', nacionalidade='$nacionalidade', naturalidade='$naturalidade',
                    senha='$senha', cidade='$cidade', estado='$uf', endereco='$endereco', bairro='$bairro', cep='$cep', telefone='$telefone', 
                    telefoneContato='$telefonecontato', numero='$npiloto', patrocinio='$patrocinio', moto='$moto', renavan='$renavan', chassi='$chassi',
                    alergiamedicamento='$alergiamedicamento', dcardiaco='$dcardiaco', eplepsiaconvulsao='$eplepsiaconvulsao', dnervosomental='$dnervosomental',
                    dsanguineo='$dsanguineo', sangue='$sangue', tcirurgico='$tcirurgico', usamedicamento='$usamedicamento', medicamento='$medicamento', 
                    emergencia='$emergencia', planosaude='$planosaude', saudeContato='$contato', nascimento='$nascimento', idade='$idade', celular='$celular',
                    valida='$valida',empresa='$empresa', cargoEmpresa='$cargo', tempoServico='$tempodeservico', enderecoEmpresa='$endereco2',
                    numeroEmpresa='$numero2', bairroEmpresa='$bairro2', cidadeEmpresa='$cidade2', estadoEmpresa='$estado2', cepEmpresa='$cep2',
                    telefoneEmpresa='$telefonecontato',cnh='$cnh'"
                            . " WHERE id='$cod'")or die(mysql_error());



                    echo "<script type='text/javascript'> window.alert('ALTERADO COM SUCESSO');</script>";
                    echo "<script>window.location = 'javascript:history.go(-2);'</script>";
                    /* echo "<meta http-equiv='refresh' content='0;URL=../login'>";	 */
                    exit();
                } else {
                    //cadastro na tabela sql
                    /* $sql = mysql_query("INSERT INTO piloto (nomePiloto, identidade, cpf, email, senha, cidade, estado, endereco, bairro, cep, telefone, numero)
                      VALUES('$nome','$identidade','$cpf','$email','$senha','$cidade','$uf','$endereco','$bairro','$cep','$telefone','$npiloto')")or die (mysql_error());
                     */
                    $sql = mysql_query("INSERT INTO piloto (nomePiloto, sexo, apelido, civil, 
                    conjuge, identidade, cpf, email, nacionalidade, naturalidade,
                    senha, cidade, estado, endereco, bairro, cep, telefone, 
                    telefoneContato, numero, patrocinio, moto, renavan, chassi,cnh,
                    alergiamedicamento, dcardiaco, eplepsiaconvulsao, dnervosomental,
                    dsanguineo, sangue, tcirurgico, usamedicamento, medicamento, 
                    emergencia, planosaude, saudeContato, nascimento, idade, celular,
                    valida,empresa, cargoEmpresa, tempoServico, enderecoEmpresa,
                    numeroEmpresa, bairroEmpresa, cidadeEmpresa, estadoEmpresa, cepEmpresa,
                    telefoneEmpresa)
		    VALUES('$nome','$sexo','$apelido','$civil',"
                            . "'$conjuge','$identidade','$cpf','$email','$nacionalidade',"
                            . "'$naturalidade','$senha','$cidade','$uf','$endereco','$bairro',"
                            . "'$cep','$telefone','$telefonecontato','$npiloto','$patrocinio',"
                            . "'$moto','$renavan','$chassi','$cnh','$alergiamedicamento','$dcardiaco',"
                            . "'$eplepsiaconvulsao','$dnervosomental','$dsanguineo','$sangue',"
                            . "'$tcirurgico','$usamedicamento','$medicamento','$emergencia',"
                            . "'$planosaude','$contato','$nascimento','$idade','$celular',"
                            . "'$valida','$empresa','$cargo','$tempodeservico','$endereco2',"
                            . "'$numero2','$bairro2','$cidade2','$estado2','$cep2','$telefonecontato')")or die(mysql_error());






                    echo "<script type='text/javascript'> window.alert('SEJA BEM VINDO');</script>";
                    echo "<meta http-equiv='refresh' content='0;URL=../login'>";
                    exit();
                }
            } else {
                echo "<script type='text/javascript'> window.alert('EMAIL INVALIDO');</script>";
                echo "<script>window.location = 'javascript:history.go(-1);'</script>";
                exit();
            }
        } else {
            echo "<script type='text/javascript'> window.alert('CPF: $cpf INVALIDO, INFORME OS DADOS CORRETAMENTE');</script>";
            echo "<script>window.location = 'javascript:history.go(-1);'</script>";
            exit();
        }
    }
}

//fim do cpf ok
?>
