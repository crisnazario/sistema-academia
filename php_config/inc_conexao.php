<?php 

class dataBase
{
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = "";
    private $database = "academia";


    public function conecta()
    {
        $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($conexao, 'utf-8');

        if(mysqli_connect_errno())
        {
            echo "Erro ao tentar conectar".mysqli_connect_erro();
        }
        return $conexao;

    }

}

?>