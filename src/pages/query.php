<?php
include_once './conn/conn.php';


//Busca o estoque por status 1 entrada 2 saida.
function buscaEstoque($acao){

    global $conn;

$query = $conn->prepare('SELECT * FROM estoque WHERE id_acao =:movimentacao');
$query->bindParam('movimentacao',$acao);
$query->execute();
$query = $query->fetchAll(PDO::FETCH_ASSOC);
return $query;
}

?>