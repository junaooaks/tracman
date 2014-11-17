<?php
require_once('class/db.class.php');
require_once('class/valida.class.php'); 
require_once('class/usuario.class.php');

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $usuario = new usuario();
    $usuario->validaLogin($_POST);
    if(@$_SESSION['logado']){
        header ('Location: index.php');
    }
    else
        $erro = "Login inválido!";
}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>MW Login v2 - Login</title>
        <link rel="stylesheet" href="css/pure-min.css">
    </head>

    <body>

        <form class="pure-form pure-form-stacked" method="post">
            <fieldset>
                <legend style="margin-left: 10%"> <h2>MW Login v2 - Login</h2> </legend>
                <div style="margin-left: 40%; margin-right: 40%;">
                    <p style="color: red"><b><?php echo @$erro; ?></b></p>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email" value="<?= @$_POST['email'] ?>">

                    <label for="password">Senha</label>
                    <input id="senha" name="senha" type="password" placeholder="Senha">

                    <label for="remember" class="pure-checkbox">
                        <input id="cookies" name="cookies" type="checkbox"> Mantenha-me conectado
                    </label>

                    <button type="submit" class="pure-button pure-button-primary">Entrar</button>
                </div>
            </fieldset>
        </form>
        
        <hr> </hr>

        <style>p{margin-left: 10px;}</style>
        <p><b>Autor:</b> Lucas Viana Dias Carvalho</p>
        <p><b>Email:</b> masterdaweb@hotmail.com</p>
        <p> <b> Website:</b> <a href="http://blog.masterdaweb.com">http://blog.masterdaweb.com</a></p>

    </body>
</html>
