<?php
// ARQUIVO: conexao.php
// Protocolo Kairós: Conexão Híbrida (Local + Produção)

// 1. Carrega as variáveis do arquivo .env (se ele existir)
$env_path = __DIR__ . '/.env';
$env = file_exists($env_path) ? parse_ini_file($env_path) : [];



if (file_exists($env_path)) {
    // Lê o arquivo .env e guarda as chaves num array
    $env = parse_ini_file($env_path);
} else {
    // Se não achar o arquivo (segurança), para tudo.
    die("Erro Crítico Kairós: Arquivo de configuração (.env) não encontrado.");
}

// 2. INTELIGÊNCIA DE AMBIENTE: Identifica Localhost e Portas Dinamicamente
$host_acesso = $_SERVER['HTTP_HOST'] ?? 'localhost';
$porta_servidor = $_SERVER['SERVER_PORT'] ?? '80';

// 3. Detecta se estamos rodando no Localhost ou na Hostinger
$ambiente_local = (
    strpos($host_acesso, 'localhost') !== false || 
    strpos($host_acesso, '127.0.0.1') !== false ||
    strpos($host_acesso, '192.168') !== false
);

if ($ambiente_local) {
    // --- AMBIENTE DE DESENVOLVIMENTO (Seu PC) ---
    // Tenta o cofre, se falhar usa o padrão XAMPP (root/vazio)
    $host = $env['DB_HOST_LOCAL'] ?? 'localhost';
    $user = $env['DB_USER_LOCAL'] ?? 'root';
    $pass = $env['DB_PASS_LOCAL'] ?? 'Kairos@Admin'; 
    $db   = $env['DB_NAME_LOCAL'] ?? 'kairos';
} else {
    // --- AMBIENTE DE PRODUÇÃO (Hostinger) ---
    // Tenta o cofre, se falhar pode buscar variáveis globais do servidor
    $host = $env['DB_HOST_PROD'] ?? 'localhost';
    $user = $env['DB_USER_PROD'] ?? ''; 
    $pass = $env['DB_PASS_PROD'] ?? ''; 
    $db   = $env['DB_NAME_PROD'] ?? '';
}

// 3. Conexão PDO (Mantida igual)
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Log silencioso para depuração do Arquiteto
    if ($ambiente_local) { echo ""; }    

    // Conexão silenciosa. Se der erro, cai no catch.
} catch (PDOException $e) {
    // Em produção, não mostramos o erro técnico para o usuário, apenas um aviso genérico
if ($ambiente_local) {
        die("Erro Local Kairós (Porta $porta_servidor): " . $e->getMessage());
    } else {
        die("Kairós System: Falha de conexão. Tente novamente mais tarde.");
    }}
?>