<?php
require_once 'RespostaDAO.php';
$respostas = RespostaDAO::listarTodos();
?>

<h2>Respostas Recebidas</h2>
<table border="1">
    <tr>
        <th>Nome</th><th>Esporte Favorito</th><th>Praticados</th><th>Email</th><th>Frequência</th><th>Data</th>
    </tr>
    <?php foreach($respostas as $resp): ?>
    <tr>
        <td><?= htmlspecialchars($resp['nome']) ?></td>
        <td><?= htmlspecialchars($resp['esporte_favorito']) ?></td>
        <td><?= htmlspecialchars($resp['esportes_praticados']) ?></td>
        <td><?= htmlspecialchars($resp['email']) ?></td>
        <td><?= htmlspecialchars($resp['frequencia']) ?></td>
        <td><?= $resp['data_envio'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
