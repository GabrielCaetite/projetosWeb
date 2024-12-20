<?php
    session_start();
    if (isset($_POST['usuario'])){//verifica se foi inserido valor no array
        if ($_POST['usuario'] == 'gabriel' && $_POST['senha'] == '123'){//validacao de acesso
            $_SESSION['usuario'] = $_POST['usuario'];//atribuicao
            header('location: welcome.php');
        }
    }

    if (isset($_POST['tema'])){
        setcookie('tema',$_POST['tema'], time() +3600,"/");
        $_COOKIE['tema'] = $_POST['tema'];
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao sistema</title>
</head>
<body>  
    
    <section class="login">
        <div class="form">
            <form action="" method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" id="" placeholder="Senha">
                <select name="tema" id="">
                    <option value="">tema</option>
                    <option value="claro">claro</option>
                    <option value="escuro">escuro</option>
                </select>
                <input type="submit" value="Login">
            </form>
        </div>
    </section>

</body>
</html>

