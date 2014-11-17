<?php
require_once('class/db.class.php');
require_once('class/valida.class.php'); 
require_once('class/usuario.class.php');

// Somente usuários logados podem acessar esta página

// Protege a página
require_once('protege.php');
///////////////////

$usuario = new usuario();
$dados = $usuario->usuarioInfo($_SESSION['idusuario']);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>MW Login v2 - Página Protegida</title>
        <link rel="stylesheet" href="css/pure-min.css">
    </head>

    <body>

        <form class="pure-form pure-form-stacked" method="post">
            <fieldset>
                <legend style="margin-left: 10%; margin-bottom: 100px;"> <h2>MW Login v2 - Página Protegida</h2> </legend>
                <div style="margin-left: 40%; margin-right: 40%;">
                    <h3>Nome: <?= $dados['nome'] ?></h3>
                    <h3>Sobrenome: <?= $dados['sobrenome'] ?></h3>
                    <h3>Cidade: <?= $dados['cidade'] ?></h3>
                    <h3>Estado: <?= $dados['estado'] ?></h3>
                </div>
            </fieldset>
        </form>
        
        <hr> </hr>
        <style>p{margin-left: 10px;}</style>
        <p> <b> Autor:</b> Lucas Viana Dias Carvalho</p>
        <p> <b> Email:</b> masterdaweb@hotmail.com</p>
        <p> <b> Website:</b> <a href="http://blog.masterdaweb.com">http://blog.masterdaweb.com</a></p>

    </body>
</html>