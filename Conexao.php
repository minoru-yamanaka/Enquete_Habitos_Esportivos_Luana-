<?php
class Conexao {
    private static $host = "localhost";
    private static $dbname = "enquete";
    private static $usuario = "root";
    private static $senha = "";

    public static function conectar() {
        try {
            return new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$usuario, self::$senha, [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
?>
