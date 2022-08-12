<?php
    include_once('../conexao.php');

    $cod = $_POST['txtcod'];

    try
    {
        $consulta = $cone->query("SELECT * FROM categoria WHERE codigo_categoria = $cod");
        
        if($consulta->rowCount() == 1)
        {
            foreach ($consulta as $linha) 
            {
                echo "<pre>";
                print_r($linha);
                echo "</pre>";
            }

        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>