<link rel="stylesheet" href="../common/css/style-med-entrada.css">
<?php
include_once './query.php';
?>
<h1>Entrada de Medicamentos</h1>
<div>
    <form action="" method="post" id="form-entrada-med">
    <label for="responsavel-med">    
    Responsavel:
    <input type="text" disabled value="<?php echo ucfirst($_SESSION['login']);?>" id="reponsavel-med">
    </label>    
    <label for="select-med">
        Medicamento:
            <select name="" id="select-med" require>
                <option value="" disabled selected hidden>Digite o nome do medicamento!</option>
                <?php

                $listMed = listaMedicamento();
                foreach ($listMed as $key => $value) {
                    print_r("<option value=" .$value['id_medicamento']. ">" . ucwords($value['desc_deno']) . " " . substr($value['desc_conce'], 0, 80) . "</option>");
                }
                ?>
            </select>
        </label>
        <label for="quantidade-med">
            Quantidade:
            <input type="number" min="0" max="100" name="" id="quantidade-med" value="teste">
        </label>
        <label for="entrada-med">
            Data de Entrada:
            <input type="" name="" disabled id="entrada-med" value="<?php echo date("d/m/Y");?>">
        </label>
        <label for="vencimento-med">
            vencimento:
            <input type="date" name="" id="vencimento-med">
        </label>
        <label for="Unidade-origem-med">
            Unidade de Origem:
            <select name="" id="select-med">
                <option value="" disabled selected hidden>Digite o nome da unidade de origem</option>
                <?php
                ?>
            </select>
        </label>
    </form>
    <button onclick="addLista()"> Adicionar a lista</button>
</div>