<?php
    session_start();
    if (!isset($_SESSION["usuario"])){//nao existe a session usuario?
        header('location: login.php?erro=true');//redirecione para pagina de login
    }else{//caso contrario, imprima boas vindas e tema
        echo 'seja bem vindo '.$_SESSION['usuario'];
        echo'</br>';
        echo 'tema escolhido: '.$_COOKIE['tema'];
    }
?>
<html>
    <head>
       <title>logon</title>
    </head>
    <body>
        <div class="botao">
            <a href="alteraTema.php">alterar tema</a><br>
            <a href="logout.php" >sair</a>
        </div>
    </body>
</html>

    