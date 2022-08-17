<?php
    include_once('../conexao.php');

    $nome_usuario = $_POST["txtnome"];
    $login_usuario = $_POST["txtlogin"];
    $senha_usuario = $_POST["txtsenha"];
    $imagem_usuario = $_POST["arquivoimg"];
    $obs_usuario = $_POST["txtobs"];
    $status_usuario = $_POST["selectsts"];


    try
    {
        $dados = $cone->prepare("INSERT INTO usuario(
            nome_usuario,
            login_usuario,
            senha_usuario,
            imagem_usuario,
            obs_usuario,
            status_usuario
        ) VALUES(
            :nome_usuario,
            :login_usuario,
            :senha_usuario,
            :imagem_usuario,
            :obs_usuario,
            :status_usuario
        )");
        $dados->execute(array(
            ':nome_usuario' =>  $nome_usuario,
            ':login_usuario' =>  $login_usuario,
            ':senha_usuario' =>  $senha_usuario,
            ':imagem_usuario' =>  $imagem_usuario,
            ':obs_usuario' =>  $obs_usuario,
            ':status_usuario' =>  $status_usuario
        ));
        if($dados->rowCount() == 1)
        {
            header('location: ../index.html');
        }
    }
    catch(PDOException $erro)
    {
        echo "ERRO: " .$erro->getMessage();
    }
?>