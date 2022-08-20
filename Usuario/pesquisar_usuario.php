<?php
    include_once ("../conexao.php");
    
    $cod = $_POST['txtcod'];

    try
    {
        $consulta = $cone->query("SELECT * FROM usuario WHERE codigo_usuario = $cod");  //PDO::FETCH_ASSOC

        if($consulta->rowCount() == 1)
        {
            foreach ($consulta as $linha) 
            {   
                echo "<pre>";
                // print_r($linha[2]);
                // print_r($linha['login_usuario']);
                print_r("<p id='cod_pesquisa'>".$linha['codigo_usuario']."</p>");
                print_r("<p id='nome_pesquisa'>".$linha['nome_usuario']."</p>");
                print_r("<p id='login_pesquisa'>".$linha['login_usuario']."</p>");
                print_r("<p id='senha_pesquisa'>".$linha['senha_usuario']."</p>");
                print_r("<p id='imagem_pesquisa'>".$linha['imagem_usuario']."</p>");
                print_r("<p id='cadastro_pesquisa'>".$linha['cadastro_usuario']."</p>");
                print_r("<p id='obs_pesquisa'>".$linha['obs_usuario']."</p>");
                print_r("<p id='status_pesquisa'>".$linha['status_usuario']."</p>");


                echo "</pre>";
            }
        }
        else
        {
            echo "Erro!";
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: " .$erro->getMessage();
    }
?>