<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "senailivre";
    $dsn = "mysql:host=$host;dbname=$banco;charset=utf8mb4";

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        die();
    }
?>
