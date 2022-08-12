<?php
    include_once ("../conexao.php");
    
    $cod = $_POST['txtcod'];

    try
    {
        $consulta = $cone->query("SELECT * FROM usuario WHERE codigo_usuario = $cod");

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