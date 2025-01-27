<?php
// Caminho para o arquivo do banco de dados SQLite
$database_path = 'meu_db.db';

try {
    // Criando uma conexão PDO com SQLite
    $pdo = new PDO("sqlite:$database_path");

    // Configurando o PDO para gerar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida com o banco de dados!";
} catch (PDOException $e) {
    // Caso haja erro na conexão, exibirá a mensagem de erro
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
