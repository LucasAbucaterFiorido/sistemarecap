<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body>
    <?php
        include_once('../conexao.php');
        if ($_POST) 
        {
            $login = $_POST['txtlogin'];
            $senha = $_POST['txtsenha'];

            try 
            {
                $consulta = $cone->query("SELECT * FROM usuario WHERE login_usuario = $login senha_usuario = $senha");

                if($consulta->rowCount() == 1)
                {
                    session_start();

                    foreach ($consulta as $linha) 
                    {   
                        $_SESSION['cod_sessao'] = $linha[0];
                        $_SESSION['nome_sessao'] = $linha[1];
                        $_SESSION['login_sessao'] = $linha[2];
                        header('location: ../index.html');
                    }
                }

            } 
            catch (\Throwable $th) 
            {
                //throw $th;
            }
        }
        

        
    ?>
    <form action="" method="">
        <label for="txtlogin">Login</label>
        <input type="text" id="txtlogin" name="txtlogin">
        <label for="txtsenha">Senha</label>
        <input type="text" id="txtsenha" name="txtsenha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>