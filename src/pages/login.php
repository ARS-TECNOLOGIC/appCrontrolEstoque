<?php

include_once './conn/conn.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (isset($_POST['login']) && $_POST['login'] <> '' && $_POST['password'] <> '') {

    $query = $conn->prepare("SELECT * FROM funcionario WHERE fun_login=:login AND fun_password =md5(:password)");
    $query->bindParam('login', $login);
    $query->bindParam('password', $password);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount()) {
        session_start();
        $_SESSION['fun_login'] = $result['fun_login'];
        $_SESSION['fun_nivel_acesso'] = $result['fun_nivel_acesso'];
        $_SESSION['fun_nome']=$result['fun_nome'];

        header('location:home.php');
    } else {
        header('location:http:../../');
    }
} else {
    unset($_POST['login'], $_POST['passowrd']);
    header('location:http:../../');
}
