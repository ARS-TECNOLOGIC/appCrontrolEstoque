<?php
include_once './query.php';
?>
<h1>Entrada de Medicamento</h1>
<div>
    <style>
        
        label{
            border:solid;
            padding: 20px;
            display: block;
        }
    </style>
    <form action="" method="post">
        
    <label for="select-med">
        <select name="" id="">
        <?php 
            
            $listMed = listaMedicamento();    
            foreach($listMed as $key => $value){
                print_r("<option>".$value['desc_deno']."</option>");
            }   
      
     ?>
         </select>
        </label>

    </form>
</div>

