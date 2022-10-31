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
                <li><a href="http://"><img src="../assets/images/icons-menu/estoque.png" class="icon">ESTOQUE </a></li>
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

            <div class="titulo-list">
                <div class="titulo-list-detalhe">Denominação</div>
                <div class="titulo-list-detalhe">Concentração Composição</div>
                <div class="titulo-list-detalhe">Forma Farmaceutica</div>
                <div class="titulo-list-detalhe">Quantidade</div>
            </div>


            <?php
      // retorna o estoque por status de movimentação.
      $buscaEstoqueDetalhada = buscaEstoqueDetalhado(1);
      $buscaTotalEstoqueTotal = buscaEstoqueTotal(1);

      foreach ($buscaTotalEstoqueTotal as $key1 => $value1) { 
           $qtd = $value1['COUNT(*)'];
          if($qtd <3){
            $qtd = "red"; 
          };
        print_r('
        <div class="list-med-total">
        <div class="list-med-detalhe">'.ucwords($value1['desc_deno']).'</div>
        <div class="list-med-detalhe">'.ucwords($value1['desc_conce']).'</div>
        <div class="list-med-detalhe">'.ucwords($value1['desc_forma']).'</div>');
        print_r('<div class="list-med-detal" id='.$qtd.'">'.ucwords($value1['COUNT(*)']).'</div>
        </div>

        <div class="box-list-detalhado">
        <div class="titulo-list">
        <div class="titulo-list-detalhe">Denominação</div>
        <div class="titulo-list-detalhe">Concentração Composição</div>
        <div class="titulo-list-detalhe">Forma Farmaceutica</div>
        <div class="titulo-list-detalhe">Data Entrada</div>
        <div class="titulo-list-detalhe">Data Vencimento</div>
        <div class="titulo-list-detalhe">Saida</div>       
    </div>');

        foreach ($buscaEstoqueDetalhada as $key => $value){
          if($value1['id_medicamento'] == $value['id_medicamento']){
        print_r('<div class="list-med-detalhado">');
        print_r('<div class="list-med-detalhe">' .ucwords($value['desc_deno']). '</div>');
        print_r('<div class="list-med-detalhe">' .ucwords($value['desc_conce']) . '</div>');
        print_r('<div class="list-med-detalhe">' .ucwords($value['desc_forma']) . '</div>');
        print_r('<div class="list-med-detalhe">' .ucwords($value['data_entrada']) . '</div>');
        print_r('<div class="list-med-detalhe">' .ucwords($value['data_vencimento']) . '</div>');
        print_r('<div class="list-med-detalhe"><input type="checkbox" name="" id=""></div>');
        print_r('</div>');
      }
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