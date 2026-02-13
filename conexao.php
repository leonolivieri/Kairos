<?php
// ARQUIVO: conexao.php
// Protocolo Kairós: Conexão Híbrida (Local + Produção)

// 1. Carrega as variáveis do arquivo .env (se ele existir)
$env_path = __DIR__ . '/.env';
$env = [];

if (file_exists($env_path)) {
    // Lê o arquivo .env e guarda as chaves num array
    $env = parse_ini_file($env_path);
} else {
    // Se não achar o arquivo (segurança), para tudo.
    die("Erro Crítico Kairós: Arquivo de configuração (.env) não encontrado.");
}

// 2. Detecta se estamos rodando no Localhost ou na Hostinger
$ambiente_local = ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8080');

if ($ambiente_local) {
    // --- AMBIENTE DE DESENVOLVIMENTO (Seu PC) ---
    $host = $env['DB_HOST_LOCAL'];
    $user = $env['DB_USER_LOCAL'];
    $pass = $env['DB_PASS_LOCAL']; // Sua senha local (vazia ou a que definiu)
    $db   = $env['DB_NAME_LOCAL'];
} else {
    // --- AMBIENTE DE PRODUÇÃO (Hostinger) ---
    $host = $env['DB_HOST_PROD'];
    $user = $env['DB_USER_PROD']; // <--- COLOQUE O USUÁRIO DA HOSTINGER
    $pass = $env['DB_PASS_PROD']; // <--- COLOQUE A SENHA DA HOSTINGER
    $db   = $env['DB_NAME_PROD']; // <--- JÁ PEGUEI DO SEU PRINT
}

// 3. Conexão PDO (Mantida igual)
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