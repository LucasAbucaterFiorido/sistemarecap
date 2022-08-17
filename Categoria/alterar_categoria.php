<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];

    $nome_categoria = $_POST['txtnome'];
    $localArmaz_categoria = $_POST['txtlocal'];
    $descricao_categoria = $_POST['txtdesc'];
    $obs_categoria = $_POST['txtobs'];
    $status_categoria = $_POST['selectsts'];

    try
    {
        $dados = $cone->prepare("UPDATE categoria SET
        nome_categoria = :nome_categoria,
        localArmaz_categoria = :localArmaz_categoria,
        descricao_categoria = :descricao_categoria,
        obs_categoria = :obs_categoria,
        status_categoria = :status_categoria
        WHERE codigo_categoria = $cod
        ");
        $dados->execute(array(
            ':nome_categoria' =>  $nome_categoria,
            ':localArmaz_categoria' =>  $localArmaz_categoria,
            ':descricao_categoria' =>  $descricao_categoria,
            ':obs_categoria' =>  $obs_categoria,
            ':status_categoria' =>  $status_categoria
        ));
        if($dados->rowCount() == 1)
        {
            header('location: form_categoria.html');
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>