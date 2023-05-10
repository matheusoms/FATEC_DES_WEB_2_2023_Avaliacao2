    <?php

    require_once('candidato.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $document = $_POST['document'];
        $telefone = $_POST['telefone'];
        $formacao = $_POST['checkbox'];

        $candidato = new Candidato($servername, $username, $password, $dbname); 
        $candidato->insert($nome, $document, $telefone, $formacao);

    }

    ?>  
    