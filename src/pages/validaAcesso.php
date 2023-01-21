<?php
session_start();
if(!isset($_SESSION['fun_login'])){
    header('location:http:../../');
}
?>