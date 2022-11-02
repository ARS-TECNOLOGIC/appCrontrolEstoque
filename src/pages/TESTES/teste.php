<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once "./query.php";

$queryDetalhado= buscaEstoqueDetalhado(1);
// echo '<pre>';
// print_r($queryDetalhado[0]['desc_denominacao']);
// echo '</pre>';

$queryTotal= buscaEstoqueTotal(1);
// echo '<pre>';
// print_r($queryTotal[0]['desc_denominacao']);

//  print_r($queryTotal[0]['COUNT(*)']);
// echo '</pre>';


foreach($queryTotal as $key => $value){
    
    print_r("<label>".$value['desc_denominacao']."--".$value['COUNT(*)']."<br/>");

    foreach($queryDetalhado as $key2 =>$value2){

        if($value['id_deno']==$value2['id_deno']){
            print_r($value2['desc_denominacao'].$value2['desc_conce']."--".$value2['data_vencimento']."--".$value2['desc_forma']."<br/>");
        }
    }
    print_r("</label>");
}
?>
</body>
</html>

