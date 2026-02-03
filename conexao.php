<?php
// ARQUIVO: conexao.php
// Protocolo Kairós: Conexão Local (Desenvolvimento)

$host = 'localhost';
$user = 'root';
$pass = 'Kairos@Admin'; // <--- Insira sua senha do MySQL aqui (se não colocou senha na instalação, deixe vazio)
$db   = 'kairos';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão Local Kairós: OK"; // Descomente esta linha se quiser testar na tela
} catch (PDOException $e) {
    die("Erro Crítico de Conexão: " . $e->getMessage());
}
?>