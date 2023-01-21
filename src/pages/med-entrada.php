<link rel="stylesheet" href="../common/css/style-med-entrada.css">
<?php
include_once './query.php';
echo date_default_timezone_get();
date_default_timezone_set('America/Sao_Paulo');
?>
<h1>Entrada de Medicamentos</h1>
<div>
    <form action="" method="post" id="form-entrada-med">
        <label for="responsavel-med">
            Responsavel:
            <input type="text" disabled value="<?php echo ucfirst($_SESSION['fun_nome']); ?>" id="reponsavel-med">
        </label>
        <label for="select-med">
            Medicamento:
            <select name="" id="select-med" require>
                <option value="" disabled selected hidden>Digite o nome do medicamento!</option>
                <?php

                $listMed = listaMedicamento();
                foreach ($listMed as $key => $value) {
                    print_r("<option value=" . $value['id_medicamento'] . ">" . ucwords($value['desc_deno']) . " " . substr($value['desc_conce'], 0, 80) . "</option>");
                }
                ?>
            </select>
        </label>
        <label for="quantidade-med">
            Quantidade:
            <input type="number" min="0" max="100" name="" id="quantidade-med" value="teste">
        </label>
        <label for="data-entrada-med">
            Data de Entrada:
            <input type="" name="" disabled id="data-entrada-med" value="<?php echo date("d/m/Y"); ?>">
        </label>
        <label for="vencimento-med">
            vencimento:
            <input type="date" name="" id="vencimento-med">
        </label>
        <label for="Unidade-origem-med">
            Unidade de Origem:
            <select name="" id="select-med">
                <option value="11" disabled selected hidden>Digite o nome da unidade de origem</option>
                <option value="55"> teste</option>
                <?php
                ?>
            </select>
        </label>
    </form>
    <button onclick="addLista()"> Adicionar a lista</button>
</div>
<div id="lista-entrada-med">
    Lista: <style>

    </style>
    <div id="lista">
        <div id="lista-cabecalho">
            <div>CODIGO</div>
            <div>MEDICAMENTO</div>
            <div>QUANTIDADE</div>
            <div>DATA ENTRADA</div>
            <div>VENCIMENTO</div>
            <div>UNIDADE DE ORIGEM</div>
            <div>RESPONSAVEL</div>


        </div>
        <div id="lista-med">




        </div>
    </div>