<?php
    include_once('../conexao.php');
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $nome_categoria = $_POST['txtnome'];
    $localArmaz_categoria = $_POST['txtlocal'];
    $descricao_categoria = $_POST['txtdesc'];
    $obs_categoria = $_POST['txtobs'];
    $status_categoria = $_POST['selectsts'];
 
    try
    {
        $dados = $cone->prepare("INSERT INTO categoria(
            nome_categoria,
            localArmaz_categoria,
            descricao_categoria,
            obs_categoria,
            status_categoria
        ) VALUES(
            :nome_categoria,
            :localArmaz_categoria,
            :descricao_categoria,
            :obs_categoria,
            :status_categoria
        )");
        $dados->execute(array(
            ':nome_categoria' => $nome_categoria,
            ':localArmaz_categoria' => $localArmaz_categoria,
            ':descricao_categoria' => $descricao_categoria,
            ':obs_categoria' => $obs_categoria,
            ':status_categoria' => $status_categoria
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