<?php
// --- KAIRÓS ENGINE v2.0 (Database Driven) ---

// 1. Injeção da Conexão (Trazendo o arquivo que criamos)
require_once 'conexao.php'; 

// 2. Definição do Padrão (Fallback de Segurança)
// Começamos o array com o valor padrão para caso o banco falhe ou não tenha dados.
$cidades_estrategicas = [
    'padrao' => 'São José do Rio Pardo'
];

try {
    // 3. Mineração de Dados (Buscando do MySQL)
    // O PDO ($pdo) veio lá do arquivo conexao.php
    $sql = "SELECT slug, nome FROM cidades";
    $stmt = $pdo->query($sql);
    
    // 4. Hidratação do Array
    // Transformamos as linhas do banco no formato que seu site já entende
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Ex: $cidades_estrategicas['mococa'] = 'Mococa';
        $cidades_estrategicas[$linha['slug']] = $linha['nome'];
    }

} catch (PDOException $e) {
    // Se o banco falhar, o site não cai. Ele apenas usa o padrão.
    // Opcional: registrar erro em log silencioso.
}

// 5. Captura Segura do Parâmetro (Igual ao anterior)
$slug_url = isset($_GET['cidade']) ? $_GET['cidade'] : 'padrao';

// 6. Validação e Definição da Exibição
if (array_key_exists($slug_url, $cidades_estrategicas)) {
    $cidade_exibicao = $cidades_estrategicas[$slug_url];
} else {
    $cidade_exibicao = $cidades_estrategicas['padrao'];
}

// 7. Variáveis Globais
$ano_atual = date('Y');
$estado_sede = "SP";
?>