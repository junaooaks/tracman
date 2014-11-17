<?php
$host = "localhost";
$user = "root";
$senha = "sgw258789";
$dbname = "tracman";

//conectar ao banco de dados

mysql_connect($host, $user, $senha) or die (mysql_error());
mysql_select_db ($dbname) or die (mysql_error());
?>
