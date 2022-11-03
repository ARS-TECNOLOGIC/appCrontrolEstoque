<?php
include_once "./conn/conn.php";


//Busca o estoque por status 1 entrada 2 saida.
function buscaEstoqueDetalhado($acao,$like){
    $like = $like.'%';
    global $conn;

$query = $conn->prepare('SELECT m.id_medicamento, d.id_deno, d.desc_deno, c.desc_conce, f.desc_forma, e.data_entrada, e.data_vencimento FROM estoque e JOIN medicamento m ON e.id_medicamento = m.id_medicamento JOIN med_denominacao d ON m.id_deno= d.id_deno JOIN med_concentracao_composicao c ON m.id_conce = c.id_conce JOIN med_forma_farmaceutica f ON f.id_forma_farm = m.id_forma_farm WHERE e.id_acao = :movimentacao AND d.desc_deno LIKE :lik ORDER BY d.desc_deno, e.data_vencimento ASC');
$query->bindParam('movimentacao',$acao);
$query->bindParam('lik',$like);
$query->execute();
$query = $query->fetchAll(PDO::FETCH_ASSOC);
return $query;
}

function buscaEstoqueTotal($acao,$like){
    $like = $like.'%';
    global $conn;

    $query = $conn->prepare('SELECT m.id_medicamento, d.id_deno, d.desc_deno, c.desc_conce,f.desc_forma, e.data_entrada, e.data_vencimento, COUNT(*) FROM estoque e JOIN medicamento m ON e.id_medicamento = m.id_medicamento JOIN med_denominacao d ON m.id_deno= d.id_deno JOIN med_concentracao_composicao c ON m.id_conce = c.id_conce JOIN med_forma_farmaceutica f ON f.id_forma_farm = m.id_forma_farm WHERE e.id_acao =:movimentacao AND d.desc_deno LIKE :lik GROUP BY m.id_medicamento ORDER BY d.desc_deno, e.data_vencimento ASC ');
    $query->bindParam('movimentacao',$acao);
    $query->bindParam('lik',$like);
    $query->execute();
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    return $query;
}

?>