<?php
    include_once ("../conexao.php");
    
    $cod = $_POST['txtcod'];
    $nome_usuario = $_POST['txtnome'];
    $login_usuario = $_POST['txtlogin'];
    $senha_usuario = $_POST['txtsenha'];
    $imagem_usuario = $_POST['arquivoimg'];
    $obs_usuario = $_POST['txtobs'];
    $status_usuario = $_POST['selectsts'];


    try
    {
        $dados = $cone->prepare("UPDATE usuario SET
        nome_usuario = :nome_usuario,
        login_usuario = :login_usuario,
        senha_usuario = :senha_usuario,
        imagem_usuario = :imagem_usuario,
        obs_usuario = :obs_usuario,
        status_usuario = :status_usuario
        WHERE codigo_usuario = $cod
        ");
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
            echo "<p>Alterado com sucesso!!</p>";
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>