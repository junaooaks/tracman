<?php
include ("../mysql/conexao_mysql.php");

$codigo= $_REQUEST['Codigo'];
$ex    = $_REQUEST['codExcluir'];

// alterar dados do formulario
if(($codigo<>'')and ($ex=='')){
	
	//selecionar informação no banco de dados
	$sel = mysql_query("SELECT * FROM piloto WHERE id='$codigo'")or die (mysql_error());
	
	while ($row = mysql_fetch_array($sel))
		{
		$piloto      = $row['nomePiloto'];
		$sexo        = $row['sexo'];
                $apelido     = $row['apelido'];
                $civil       = $row['civil'];
                $conjuge     = $row['conjuge'];
                $cpf         = $row['cpf'];
		$identidade  = $row['identidade'];
		$senhas      = $row['senha'];
		$endereco    = $row['endereco'];
		$cidade      = $row['cidade'];
		$telefone    = $row['telefone'];
                $telefonecontato = $row['telefoneContato'];
                $nacionalidade = $row['nacionalidade'];
                $saudeContato   = $row['saudeContato'];
                $naturalidade = $row['naturalidade'];
                $renavan      = $row['renavan'];
                $chassi      = $row['chassi'];
                $sangue      = $row['sangue'];
                $empresa     = $row['empresa'];
                $cargo       = $row['cargoEmpresa'];
                $tempodeservico = $row['tempoServico'];
                $endereco2   = $row['enderecoEmpresa'];
                $numero2     = $row['numeroEmpresa'];
                $bairro2     = $row['bairroEmpresa'];
                $cidade2     = $row['cidadeEmpresa'];
                $uf2         = $row['estadoEmpresa'];
                $cep2        = $row['cepEmpresa'];
                $telefoneEmpresa = $row['telefoneEmpresa'];
                $valida      = $row['valida'];
                $cnh         = $row['cnh'];
		$numero      = $row['numero'];
		$id          = $row['id'];
		$email       = $row['email'];
		$cep         = $row['cep'];
		$bairro      = $row['bairro'];
		$uf 	     = $row['estado'];
		$cod	     = $row['id'];
		$patrocinio  = $row['patrocinio'];
		$moto        = $row['moto'];
		$celular     = $row['celular'];
		$idade       = $row['idade'];
		$nascimento  = $row['nascimento'];
		$alergiamedicamento = $row['alergiamedicamento'];
		$dcardiac   = $row['dcardiaco'];
		$eplepsiaconvulsa = $row['eplepsiaconvulsao'];
		$dnervosomenta = $row['dnervosomental'];
		$dsanguineo = $row['dsanguineo'];
		$tcirurgico = $row['tcirurgico'];
		$usamedicamento = $row['usamedicamento'];
		$medicamento = $row['medicamento'];
		$emergencia = $row['emergencia'];
		$planosaude = $row['planosaude'];
		$nascimento = $row['nascimento'];
		$idade = $row['idade'];
		
		$data = explode('a ', $data);
		}
		
}
//excluir dados da tabela
if ($ex!=''){
	
	mysql_query("DELETE FROM piloto WHERE id = '$ex'")or die (mysql_error);
	
	echo "<meta http-equiv='refresh' content='0;URL=consulta.php'>";
	}
?>