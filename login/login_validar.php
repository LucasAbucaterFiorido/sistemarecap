<?php

session_start();

if($_SESSION)
{
    if(isset($_SESSION['cod_sessao']) && isset($_SESSION['nome_sessao']) && isset($_SESSION['login_sessao']))
    {
        $cod_sessao = $_SESSION['cod_sessao'];
        $nome_sessao = $_SESSION['nome_sessao'];
        $login_sessao = $_SESSION['login_sessao'];

        // testes
        // $teste = "eu sei la porra";
        // $GLOBALS ['0'] = $teste;
    }
    else
    {
        header("location: login/login.php");
    }
}
else
{
    header("location: login/login.php");
}


?>
<div class="container bg-dark text-light">
    <div class="row">
        <div class="col-sm-12 p-3">
            <a href="login/log_off.php" class="btn btn-danger">Sair</a>
        </div>
    </div>
</div>