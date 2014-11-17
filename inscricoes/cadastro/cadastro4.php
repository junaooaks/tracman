<?php
include ("../mysql/conexao_mysql.php");

//receber dados do formulario
$nome         = $_REQUEST['nome'];
$identidade   = $_REQUEST['identidade'];
$cpf          = $_REQUEST['cpf'];
$email        = $_REQUEST['email'];
$senha        = $_REQUEST['senha'];
$cidade       = $_REQUEST['cidade'];
$uf	          = $_REQUEST['estado'];
$endereco     = $_REQUEST['endereco'];
$bairro	      = $_REQUEST['bairro'];
$cep          = $_REQUEST['cep'];
$telefone	  = $_REQUEST['telefone'];
$npiloto	  = $_REQUEST['npiloto'];
$cod		  = $_REQUEST['cod'];
//limpar caracters




$cpf = preg_replace( "@[./,:+-]@", "", $cpf );

//validar cpf
if( ($cpf == '11111111111') || ($cpf == '22222222222') ||
   ($cpf == '33333333333') || ($cpf == '44444444444') ||
   ($cpf == '55555555555') || ($cpf == '66666666666') ||
   ($cpf == '77777777777') || ($cpf == '88888888888') ||
   ($cpf == '99999999999') || ($cpf == '00000000000') ) {
   $status = false;
  }

  else {
   //PEGA O DIGITO VERIFIACADOR
   $dv_informado = substr($cpf, 9,2);

   for($i=0; $i<=8; $i++) {
    $digito[$i] = substr($cpf, $i,1);
   }

   //CALCULA O VALOR DO 10º DIGITO DE VERIFICAÇÂO
   $posicao = 10;
   $soma = 0;

   for($i=0; $i<=8; $i++) {
    $soma = $soma + $digito[$i] * $posicao;
    $posicao = $posicao - 1;
   }

   $digito[9] = $soma % 11;

   if($digito[9] < 2) {
    $digito[9] = 0;
   }
   else {
    $digito[9] = 11 - $digito[9];
   }

   //CALCULA O VALOR DO 11º DIGITO DE VERIFICAÇÃO
   $posicao = 11;
   $soma = 0;

   for ($i=0; $i<=9; $i++) {
    $soma = $soma + $digito[$i] * $posicao;
    $posicao = $posicao - 1;
   }

   $digito[10] = $soma % 11;

   if ($digito[10] < 2) {
    $digito[10] = 0; 
   }
   else {
    $digito[10] = 11 - $digito[10];
   }

  //VERIFICA SE O DV CALCULADO É IGUAL AO INFORMADO
  $dv = $digito[9] * 10 + $digito[10];
  if ($dv != $dv_informado) {
   $status = false;
  }
  else{
   $status = true;
  }//FECHA ELSE
  }
  
   if(($status == false)||($dv ==''))
   {
 
   echo "<script type='text/javascript'> window.alert('CPF: $cpf INVALIDO, INFORME OS DADOS CORRETAMENTE');</script>";
   echo "<script>window.location = 'javascript:history.go(-1);'</script>";
   exit();
 
 }


   //verificar se cpf ja existe no sistema
   $sq = mysql_query("SELECT cpf FROM piloto WHERE cpf='$cpf'") or die (mysql_error());
   
   //pegar numero de retorno de linha
   $row = mysql_num_rows($sq);
  
   //verificar a quantidade de linha de retorno
   if (($row >= 1) and ($cod =='')){
		echo "<script type='text/javascript'> window.alert('ESTE CPF JA ESTA CADASTRADO');</script>";
        echo "<script>window.location = 'javascript:history.go(-1);'</script>";	   
		exit();
	   }
  
//VALIDAR EMAIL 
  if (preg_match ("/^[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*@[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*\\.[A-Za-z0-9]{2,4}$/", $email)) {

//validar sernha 
if (($senha=='')or($senha<>$senhac))
	{ 
	echo "<script type='text/javascript'> window.alert('Preencha a SENHA corretamente');</script>";
	echo "<script>window.location = 'javascript:history.go(-1);'</script>";
	exit();
	}

	if ($cod!=''){
$up = mysql_query("UPDATE piloto SET nomePiloto='$nome', identidade='$identidade', cpf='$cpf', email='$email', senha='$senha', cidade='$cidade', estado='$uf', endereco='$endereco', bairro='$bairro', cep = '$cep', telefone='$telefone', numero='$npiloto', patrocinio='$patrocinio', moto='$moto', alergiamedicamento = '$alergiamedicamento', dcardiaco = '$dcardiaco', eplepsiaconvulsao = '$eplepsiaconvulsao', dnervosomental = '$dnervosomental', dsanguineo = '$dsanguineo', tcirurgico ='$tcirurgico', usamedicamento = '$usamedicamento',medicamento='$medicamento', emergencia = '$emergencia', planosaude ='$planosaude', nascimento = '$nascimento', idade='$idade', celular='$celular' WHERE id='$cod'")or die (mysql_error());		
//$up = mysql_query("UPDATE piloto SET nomePiloto='$nome', identidade='$identidade', cpf='$cpf', email='$email', senha='$senha', cidade='$cidade', estado='$uf', endereco='$endereco', bairro='$bairro', cep = '$cep', telefone='$telefone', numero='$npiloto' WHERE id='$cod'")or die (mysql_error());
	 echo "<script type='text/javascript'> window.alert('ALTERADO COM SUCESSO');</script>";
 echo "<script>window.location = 'javascript:history.go(-2);'</script>";
/*echo "<meta http-equiv='refresh' content='0;URL=../login'>";	*/
exit();
	}else{
	//cadastro na tabela sql
	/*$sql = mysql_query("INSERT INTO piloto (nomePiloto, identidade, cpf, email, senha, cidade, estado, endereco, bairro, cep, telefone, numero)
		                          VALUES('$nome','$identidade','$cpf','$email','$senha','$cidade','$uf','$endereco','$bairro','$cep','$telefone','$npiloto')")or die (mysql_error());	
	*/
$sql = mysql_query("INSERT INTO piloto (nomePiloto, identidade, cpf, email, senha, cidade, estado, endereco, bairro, cep, telefone, numero, patrocinio, moto, alergiamedicamento,dcardiaco, eplepsiaconvulsao, dnervosomental, dsanguineo, tcirurgico, usamedicamento,
medicamento, emergencia, planosaude, nascimento, idade, celular)
		                          VALUES('$nome','$identidade','$cpf','$email','$senha','$cidade','$uf','$endereco','$bairro','$cep','$telefone','$npiloto','$patrocinio','$moto','$alergiamedicamento','$dcardiaco','$eplepsiaconvulsao','$dnervosomental','$dsanguineo','$tcirurgico','$usamedicamento','
$medicamento','$emergencia','$planosaude','$nascimento','$idade','$celular')")or die (mysql_error());	
	

		
		echo "<script type='text/javascript'> window.alert('SEJA BEM VINDO');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=../login'>";
	}
	}
	else{
		echo "<script type='text/javascript'> window.alert('EMAIL INVALIDO');</script>";
 		echo "<script>window.location = 'javascript:history.go(-1);'</script>";
	}
?>
