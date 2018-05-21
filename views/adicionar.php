<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            include("../controller/config.php");

            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO users (use_nome, use_log, use_senha) VALUES ('".$nome."', '".$login."', '".$senha."')";
            
            $pdo->query($sql) or die("Erro");
            
            session_start();
            
            echo "<script>alert('Usuário adicionado.');";
            echo "javascript:window.location='../index.php';</script>";
        ?>
    </body>
</html>