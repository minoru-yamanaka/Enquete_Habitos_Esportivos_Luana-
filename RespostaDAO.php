<?php
require_once 'Conexao.php';

class RespostaDAO {
    public static function salvar($resposta) {
        $pdo = Conexao::conectar();
        $sql = "INSERT INTO respostas (nome, esporte_favorito, esportes_praticados, email, frequencia)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $resposta['nome'],
            $resposta['esporte'],
            implode(", ", $resposta['pratica']),
            $resposta['email'],
            $resposta['frequencia']
        ]);
    }

    public static function listarTodos() {
        $pdo = Conexao::conectar();
        $sql = "SELECT * FROM respostas ORDER BY data_envio DESC";
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
