<?php
include_once './validaAcesso.php';

try{
$username='root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=controlmedsc',$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Erro'.$e->getMessage();
}
?>