<?php
include_once "./validaAcesso.php";
include_once "./query.php";


// print_r($_SESSION['nivelAcesso']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../common/css/style-home-sidebar.css">

    <title>Home ControlEstoque</title>
</head>
<div class="main-global">
    <div class="sideBar">
        <div class="logo-identificador">
            <?php
            print_r(substr($_SESSION['login'], 0, 1));
            ?>
        </div>
        <nav class="menu-principal">
            <ul>
                <li><a href="?pg=estoque"><img src="../assets/images/icons-menu/estoque.png" class="icon">ESTOQUE </a>
                </li>
                <li><a href="http://"><img src="../assets/images/icons-menu/entrada.png" class="icon">ENTRADA</a></li>
                <li><a href="http://"><img src="../assets/images/icons-menu/saida.png" class="icon">SAIDA</a></li>
                <li><a href="http://"><img src="../assets/images/icons-menu/cadastro.png" class="icon">CADASTRO</a>
                    <ul class="menu-principal-sub">
                        <li><a href="http://"><img src="../assets/images/icons-submenu/add-medicamento.png"
                                    class="iconsub"> Cad. Medicamento</a></li>
                        <li><a href="http://"><img src="../assets/images/icons-submenu/add-funcionario.png"
                                    class="iconsub">Cad. Funcionario</a></li>
                        <li><a href="http://"><img src="../assets/images/icons-submenu/add-unidade-saude.png"
                                    class="iconsub"> Cad. Unidade Saude</a></li>
                        <li><a href="http://"><img src="../assets/images/icons-submenu/add-usuario.png"
                                    class="iconsub">Cad. Usuario</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
    <div class="main">
        <div class="header-main-conteudo">

            <a class="btn" href="http:/appCrontrolEstoque/src/pages/logout.php">SAIR</a>
        </div>
        <div class="main-conteudo">
            <?php 
                if(isset($_GET['pg'])){
                    include_once './'.$_GET['pg'].'.php';
                };
            ?>
        </div>
    </div>

</div>
<div>

</div>
</body>
<script src="../common/js.js"></script>

</html>