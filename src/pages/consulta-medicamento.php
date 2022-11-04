<?php
include_once './query.php';

$like = "";
print_r("<select>");
foreach(listaMedicamento() as $key => $value){
    print_r("<option>".$value['desc_deno']."</option></br>");
}
print_r("</select>");
?>