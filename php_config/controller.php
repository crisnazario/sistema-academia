<?php
require_once 'model.php';
include_once('inc_conexao.php');

    $model = new Model();

    $page = isset($_GET['p'])?$_GET['p']:'';

    switch($page)
    {
        case 'auth':           
            $data = $model->auth($_POST['user'], $_POST["password"]); 
            die(json_encode($data));           
        break;
    }

    



?>