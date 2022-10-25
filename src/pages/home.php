<?php
include_once './validaAcesso.php';
include_once './query.php';

// print_r($_SESSION['nivelAcesso']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../common/style.css">
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
        <li><a href="http://">ESTOQUE</a></li>
        <li><a href="http://">ENTRADA</a></li>
        <li><a href="http://">SAIDA</a></li>
        <li><a href="http://">CADASTRO</a></li>
      </ul>
    </nav>  

    </div>
  <div class="main">
    <div class="header-main-conteudo">
      
      <a class="btn" href="http://localhost/appCrontrolEstoque/src/pages/logout.php">SAIR</a>
    </div>
    <div class="main-conteudo">

      <div class="titulo-list">
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">Denominação</div>
        <div class="titulo-list-detalhe">Concentração Composição</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
        <div class="titulo-list-detalhe">ID</div>
      </div>
      <?php
      // retorna o estoque por status de movimentação.
      foreach (buscaEstoque(1) as $key => $value) {
        print_r('<div class="list-med">');
        foreach ($value as $val) {
          print_r('<div class="list-med-detalhe">' . $val . '</div>');
        }
        print_r('</div>');
      }
      ?>
    </div>
  </div>
</div>
</div>

</body>

</html>