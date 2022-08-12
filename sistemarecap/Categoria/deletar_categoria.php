<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];
    
    try
    {
        $dados = $cone->prepare("DELETE FROM categoria WHERE codigo_categoria = $cod");

        $dados->execute();

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