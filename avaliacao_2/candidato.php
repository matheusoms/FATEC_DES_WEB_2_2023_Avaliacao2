<?php

require_once('conexao.php');

class Candidato{
    private $conn;
    private $nome, $document, $telefone, $formacao;

    public function __construct($servername, $username, $password, $dbname){
        $this->connect = new Conexao($servername, $username, $password, $dbname);
    }

    public function insert($nome, $document, $telefone, $formacao){

        $sql = "SELECT document FROM candidatos WHERE document = '$document'";
        $formacao = $this->connect->getConnection()->query($sql);    
        
         if($formacao->num_rows > 0) {  
             echo "Documento já cadastrado";
         }else{

            if($formacao ==TRUE){

             $insert = "INSERT INTO candidatos (nome, document, telefone, formacao) VALUES('$nome', '$document', '$telefone','TRUE')";
             if($this->connect->getConnection()->query($insert) === TRUE){
                 echo "Dados inseridos com sucesso";
             }else{
                echo "Error: " . $insert . "<br>" . $this->connect->error;
             }
            }else{
                $insert = "INSERT INTO candidatos (nome, document, telefone, formacao) VALUES('$nome', '$document', '$telefone','FALSE')";
             if($this->connect->getConnection()->query($insert) === TRUE){
                 echo "Dados inseridos com sucesso";
             }else{
                echo "Error: " . $insert . "<br>" . $this->connect->error;
             }
            }

            }
        }

        public function insert($nome, $document, $telefone, $formacao){

            $sql = "SELECT document FROM candidatos WHERE document = '$document'";
            $formacao = $this->connect->getConnection()->query($sql);    
            
             if($formacao->num_rows > 0) {  
                 echo "Documento já cadastrado";
             }else{
    
                }
            }
    }

?>