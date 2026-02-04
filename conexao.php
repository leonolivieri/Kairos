<?php
// ARQUIVO: conexao.php
// Protocolo Kairós: Conexão Híbrida (Local + Produção)

// Detecta se estamos rodando no Localhost ou na Hostinger
$ambiente_local = ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8080');

if ($ambiente_local) {
    // --- AMBIENTE DE DESENVOLVIMENTO (Seu PC) ---
    $host = 'localhost';
    $user = 'root';
    $pass = 'Kairos@Admin'; // Sua senha local (vazia ou a que definiu)
    $db   = 'kairos';
} else {
    // --- AMBIENTE DE PRODUÇÃO (Hostinger) ---
    $host = 'localhost';
    $user = 'u818458777_admin'; // <--- COLOQUE O USUÁRIO DA HOSTINGER
    $pass = '100nha@Admin';           // <--- COLOQUE A SENHA DA HOSTINGER
    $db   = 'u818458777_BDKairos';         // <--- JÁ PEGUEI DO SEU PRINT
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Conexão silenciosa. Se der erro, cai no catch.
} catch (PDOException $e) {
    // Em produção, não mostramos o erro técnico para o usuário, apenas um aviso genérico
    if ($ambiente_local) {
        die("Erro Local Kairós: " . $e->getMessage());
    } else {
        die("Kairós System: Falha de conexão. Tente novamente mais tarde.");
    }
}
?>