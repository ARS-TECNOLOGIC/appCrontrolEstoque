<?php
include_once './conn/conn.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (isset($_POST['login']) && $_POST['login'] <> '' && $_POST['password'] <> '') {

    $query = $conn->prepare("SELECT * FROM usuario WHERE login=:nome AND password = :senha");
    $query->bindParam('nome', $login);
    $query->bindParam('senha', $password);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($query->rowCount()) {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['nivelAcesso'] = $result[0]['nivel'];

        header('location:home.php');
    } else {
        header('location:http://localhost/appCrontrolEstoque/');
    }
} else {
    unset($_POST['login'], $_POST['passowrd']);
    header('location:http://localhost/appCrontrolEstoque/');
}
