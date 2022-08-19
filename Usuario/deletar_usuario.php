<?php
    include_once ("../conexao.php");
    
    $cod = $_POST['txtcod'];

    try
    {
        $dados = $cone->prepare("DELETE FROM usuario WHERE codigo_usuario = $cod");

        $dados->execute();

        if($dados->rowCount() == 1)
        {
            // <p onload="limpar()">Deletado com sucesso!!</p>
            echo "<p>Deletado com sucesso!!</p>";
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>