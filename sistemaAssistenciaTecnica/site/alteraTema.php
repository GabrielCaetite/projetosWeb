<?php
    if (isset($_POST['tema'])){
        setcookie('tema',$_POST['tema'], time() +3600,"/");
        $_COOKIE['tema'] = $_POST['tema'];
        header('location: welcome.php');

    }
?>

<html>
    <title>altera tema</title>
    <body>
        <form action="" method="post">
            <select name="tema" id="">
                <option value="">tema</option>
                <option value="claro">claro</option>
                <option value="escuro">escuro</option>
            </select>
            <input type="submit" value="confirmar">
        </form>
       
    </body>
</html>