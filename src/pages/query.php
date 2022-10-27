<?php
include_once "./conn/conn.php";


//Busca o estoque por status 1 entrada 2 saida.
function buscaEstoqueDetalhado($acao){

    global $conn;

$query = $conn->prepare('SELECT d.id_deno, d.desc_denominacao, c.desc_conce, f.desc_forma, e.data_entrada, e.data_vencimento FROM estoque e JOIN medicamento m ON e.id_medicamento = m.id_medicamento JOIN med_denominacao d ON m.id_deno= d.id_deno JOIN med_concentracao_composicao c ON m.id_conce = c.id_conce JOIN med_forma_farmaceutica f ON f.id_forma_farm = m.id_forma_farm WHERE e.id_acao = :movimentacao ORDER BY d.desc_denominacao, e.data_vencimento ASC');
$query->bindParam('movimentacao',$acao);
$query->execute();
$query = $query->fetchAll(PDO::FETCH_ASSOC);
return $query;
}

function buscaEstoqueTotal($acao){
    global $conn;

    $query = $conn->prepare('SELECT m.id_medicamento, d.id_deno, d.desc_denominacao, c.desc_conce, e.data_entrada, e.data_vencimento, COUNT(*) FROM estoque e JOIN medicamento m ON e.id_medicamento = m.id_medicamento JOIN med_denominacao d ON m.id_deno= d.id_deno JOIN med_concentracao_composicao c ON m.id_conce = c.id_conce WHERE e.id_acao =:movimentacao GROUP BY m.id_deno ORDER BY d.desc_denominacao, e.data_vencimento ASC ');
    $query->bindParam('movimentacao',$acao);
    $query->execute();
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    return $query;
}


?>