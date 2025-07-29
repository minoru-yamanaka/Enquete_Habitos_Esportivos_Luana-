<?php
require_once 'RespostaDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $resposta = [
        'nome' => $_POST['nome'],
        'esporte' => $_POST['esporte'],
        // alterar essa linha para add mais 
        // trata os checkboxes como array
        // pratica' => isset($_POST['pratica']) ? (array) $_POST['pratica'] : [],
        'pratica' => isset($_POST['pratica']) ? $_POST['pratica'] : [],
        'email' => $_POST['email'],
        'frequencia' => $_POST['frequencia']
    ];

    RespostaDAO::salvar($resposta);

    echo "Enquete salva com sucesso!";
}
?>
