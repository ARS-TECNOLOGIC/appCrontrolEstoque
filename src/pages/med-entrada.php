<link rel="stylesheet" href="../common/css/style-med-entrada.css">
<?php
include_once './query.php';
?>
<h1>Entrada de Medicamentos</h1>
<div>
    <form action="" method="post">

        <label for="select-med">
            <select name="" id="select-med">
            <option value="" disabled selected hidden>Digite o nome do medicamento!</option>
                <?php

                $listMed = listaMedicamento();
                foreach ($listMed as $key => $value) {
                    print_r("<option>" . ucwords($value['desc_deno']) . " " . substr($value['desc_conce'], 0, 80) . "</option>");
                }
                ?>
            </select>
        </label>
        
    </form>
</div>