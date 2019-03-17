<?php
include_once('inc_conexao.php');


$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'auth')
{
    $username = $_POST["username"];
    $password = $_POST["password"];
            $bd = new dataBase();
            $conect = $bd->conecta();

            $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $query = mysqli_query($conect, $sql);

            while($data = $query->fetch_assoc())
            {
                if($data > 0)
                {
                    $_SESSION["id"] = $data['id'];
                    $_SESSION["name"] = $data['name'];
                    $result = '../index.php';
                    echo $result;
                }
                else
                {
                    $query = "erro";
                    echo (json_encode($query));
                }                
            }     

}


?>