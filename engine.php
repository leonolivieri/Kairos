<?php
// ARQUIVO: engine.php
// VERSÃO: 2.2 (Fusão: Estabilidade Original + Hub de Conhecimento)

require_once 'conexao.php';

// =================================================================================
// 1. LEGADO: CARREGAMENTO DE CIDADES (Mantido Original)
// =================================================================================
// Mantemos isso para garantir que o rodapé/menus tenham a lista completa
$cidades_estrategicas = [
    'padrao' => 'São José do Rio Pardo'
];

try {
    $sql = "SELECT slug, nome FROM cidades";
    $stmt = $pdo->query($sql);
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cidades_estrategicas[$linha['slug']] = $linha['nome'];
    }
} catch (PDOException $e) {
    // Falha silenciosa, mantém o padrão
}

// Lógica original de definição da cidade (para header e SEO local)
$slug_url = isset($_GET['cidade']) ? $_GET['cidade'] : 'padrao';

if (array_key_exists($slug_url, $cidades_estrategicas)) {
    $cidade_exibicao = $cidades_estrategicas[$slug_url];
} else {
    $cidade_exibicao = $cidades_estrategicas['padrao'];
}

// =================================================================================
// 2. VARIÁVEIS GLOBAIS OBRIGATÓRIAS (Mantido Original)
// =================================================================================
$ano_atual = date('Y');
$estado_sede = "SP";

// =================================================================================
// 3. NOVIDADE: ROTAS DE CONTEÚDO (Blog/Artigos)
// =================================================================================
// Valores padrão para quando NÃO for um artigo
$tipo_conteudo = 'cidade'; // Por padrão, o site se comporta como site de cidade
$titulo_pagina = "Consultoria Bitrix24 em " . $cidade_exibicao; // Título padrão
$conteudo_view = [];

// Se a URL pedir um ARTIGO, nós sobrescrevemos o comportamento padrão
if (isset($_GET['artigo']) && !empty($_GET['artigo'])) {
    
    $slug_artigo = $_GET['artigo'];
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM kairos_conhecimento WHERE slug = :slug AND status = 'Ativo' LIMIT 1");
        $stmt->execute(['slug' => $slug_artigo]);
        $artigo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($artigo) {
            $tipo_conteudo = 'artigo'; // Avisamos o index.php para mudar o layout
            
            // Sobrescrevemos os dados de exibição
            $titulo_pagina = $artigo['titulo_popular'];
            $meta_descricao = $artigo['meta_descricao']; // Opcional: usar no header
            
            // Dados para o HTML desenhar
            $conteudo_view = $artigo;
        } 
    } catch (PDOException $e) {
        // Se der erro no blog, ele continua mostrando a Home da cidade normalmente
    }
}
?>