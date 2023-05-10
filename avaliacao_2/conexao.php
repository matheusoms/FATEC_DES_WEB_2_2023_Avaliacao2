<?php
require_once('dados_conexao.php');

class Conexao {
    private $conn;

    function __construct($servername, $username, $password, $dbname){
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        $this->checarConexao();
    }

    public function __destruct() {
        $this->conn->close();
      }

    public function checarConexao(){
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
        echo "Conexão bem sucedida! \n";
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection(){
        $this->conn->close();
    }
}

?>