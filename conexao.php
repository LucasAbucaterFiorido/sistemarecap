<?php
$host = "localhost";
$bd = "bd_rafael";
$user = "root";
$pass = "";

    try
    {
        //Conectando
        $cone = new PDO("mysql:dbname=$bd; host=$host", $user, $pass);

        $cone->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $cone->query("set names utf8");
    }
    catch(PDOException $erro)
    {
        echo "ERRO: " .$erro;
    }
?>