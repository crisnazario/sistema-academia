<?php
include_once('inc_conexao.php');
session_start();

class Model
{
    //Realiza login
    function auth($username, $password)
    {
            $bd = new dataBase();
            $conect = $bd->conecta();

            $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $query = mysqli_query($conect, $sql);

            $return_value = '';
            while($data = $query->fetch_assoc())
            {
                if($data > 0)
                {
                    $_SESSION["id"] = $data['id'];
                    $_SESSION["name"] = $data['name'];
                    $return_value = 'tela_principal.php';
                }
                else
                {
                    $query = "erro";                   
                }                
            } 
            return $return_value;            
    }

}



?>