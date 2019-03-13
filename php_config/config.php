<?php
include_once('inc_conexao.php');

$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'auth')
{
    $login = $_POST['logon'];
    echo "Olá ".$login;
}




?>