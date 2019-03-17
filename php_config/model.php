<?php
include_once('inc_conexao.php');
session_start();

class Model
{
    function auth($username, $password)
    {
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
                    $result = 'tela_principal.php';
                    echo $result;
                }
                else
                {
                    $query = "erro";
                    echo (json_encode($query));
                }                
            }     
    }

}



?>