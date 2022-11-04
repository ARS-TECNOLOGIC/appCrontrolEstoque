<?php include_once './query.php'?>
<link rel="stylesheet" href="../common/css/style-estoque.css">
<div class="titulo-list">
    <div class="titulo-list-detalhe">Denominação</div>
    <div class="titulo-list-detalhe">Concentração Composição</div>
    <div class="titulo-list-detalhe">Forma Farmaceutica</div>
    <div class="titulo-list-detalhe">Quantidade</div>
</div>

<?php
            
            // retorna o estoque por status de movimentação.
            $lik = $_POST['lik'];
            $buscaEstoqueDetalhada = buscaEstoqueDetalhado(1,$lik);
            $buscaTotalEstoqueTotal = buscaEstoqueTotal(1,$lik);

            foreach ($buscaTotalEstoqueTotal as $key1 => $value1) {
                $qtd = $value1['COUNT(*)'];
                if ($qtd < 3) {
                    $nivel = "abaixo";
                } else {
                    $nivel = "acima";
                }
            ?>

                <div class="list-med-total">
                    <div class="list-med-detalhe"><?php echo (ucwords($value1['desc_deno'])); ?> </div>
                    <div class="list-med-detalhe"><?php echo (ucwords($value1['desc_conce'])); ?></div>
                    <div class="list-med-detalhe"><?php echo (ucwords($value1['desc_forma'])); ?></div>
                    <div class="list-med-detalhe <?php echo ($nivel); ?>"><?php echo (ucwords($value1['COUNT(*)'])) ?></div>
                </div>

                <div class="box-list-detalhado">
                    <div class="titulo-list">
                        <div class="titulo-list-detalhe">Denominação</div>
                        <div class="titulo-list-detalhe">Concentração Composição</div>
                        <div class="titulo-list-detalhe">Forma Farmaceutica</div>
                        <div class="titulo-list-detalhe">Data Entrada</div>
                        <div class="titulo-list-detalhe">Data Vencimento</div>
                        <div class="titulo-list-detalhe">Saida</div>
                    </div>

    <?php
                foreach ($buscaEstoqueDetalhada as $key => $value) {
                    if ($value1['id_medicamento'] == $value['id_medicamento']) { ?>
                        <div class="list-med-detalhado">
                            <div class="list-med-detalhe"><?php echo(ucwords($value['desc_deno']));?> </div>
                            <div class="list-med-detalhe"><?php echo(ucwords($value['desc_conce']));?> </div>
                            <div class="list-med-detalhe"><?php echo(ucwords($value['desc_forma']));?> </div>
                            <div class="list-med-detalhe"><?php echo(ucwords($value['data_entrada']));?> </div>
                            <div class="list-med-detalhe"><?php echo(ucwords($value['data_vencimento']));?></div>
                            <div class="list-med-detalhe"><input type="checkbox" name="" id=""></div>
                        </div>
            <?php  }
                }
                print_r('</div>');
            }
            echo ($_GET['lik']);
                ?>
    <button class="btn-layout-blue" type="submit">RETIRADA</button>
</div>
