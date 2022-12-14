<?php include_once("../sistemarecap/login/login_validar.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <title id="titulo_head"></title>  -->
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="aba_usuario">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="aba_fornecedor">Fornecedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="aba_categoria">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="aba_produto">Produto</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div id="teste"></div>
            </div>
        </div>
    </div>
    <script src="jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="card-config.js"></script>
    <!-- <script src="script_ajax.js"></script> -->
    <script src="script_imagem.js"></script> 
</body>
</html>