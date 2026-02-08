<?php
/**
 * KAIRÓS VENTURES - ARTEFATO DE ENGENHARIA
 * -----------------------------------------------------------------------------
 * @arquivo    : engine.php
 * @descricao  : Motor de decisão de conteúdo e regras de negócio.
 * @versao     : 2.3
 * @autor      : Leon (Arquiteto) & IA
 * @data_mod   : 06/02/2026
 * -----------------------------------------------------------------------------
 * HISTÓRICO DE MUDANÇAS:
 * [v2.0] - Lógica de Cidades (Legado).
 * [v2.1] - Correção de Variáveis Globais.
 * [v2.2] - Implementação do Hub de Conhecimento (Single Article).
 * [v2.3] - Implementação do Feed de Insights (Lista Home).
 * -----------------------------------------------------------------------------
 */

require_once 'conexao.php';

// =================================================================================
// 1. LEGADO: CARREGAMENTO DE CIDADES
// =================================================================================
$cidades_estrategicas = ['padrao' => 'São José do Rio Pardo'];

try {
    $sql = "SELECT slug, nome FROM cidades";
    $stmt = $pdo->query($sql);
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cidades_estrategicas[$linha['slug']] = $linha['nome'];
    }
} catch (PDOException $e) {
    // Falha silenciosa
}

// Definição da cidade de exibição
$slug_url = isset($_GET['cidade']) ? $_GET['cidade'] : 'padrao';
if (array_key_exists($slug_url, $cidades_estrategicas)) {
    $cidade_exibicao = $cidades_estrategicas[$slug_url];
} else {
    $cidade_exibicao = $cidades_estrategicas['padrao'];
}

// =================================================================================
// 2. VARIÁVEIS GLOBAIS OBRIGATÓRIAS
// =================================================================================
$ano_atual = date('Y');
$estado_sede = "SP";

// =================================================================================
// 3. ROTAS DE CONTEÚDO (Visualização de Artigo Único)
// =================================================================================
$tipo_conteudo = 'cidade'; // Padrão
$titulo_pagina = "Consultoria Bitrix24 em " . $cidade_exibicao;
$conteudo_view = [];

if (isset($_GET['artigo']) && !empty($_GET['artigo'])) {
    $slug_artigo = $_GET['artigo'];
    try {
        $stmt = $pdo->prepare("SELECT * FROM kairos_conhecimento WHERE slug = :slug AND status = 'Ativo' LIMIT 1");
        $stmt->execute(['slug' => $slug_artigo]);
        $artigo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($artigo) {
            $tipo_conteudo = 'artigo';
            $conteudo_view = $artigo;

            // LÓGICA KAIRÓS: Injeta a cidade no título apenas se não for o padrão
            if ($slug_url !== 'padrao') {
                $titulo_pagina = $artigo['titulo_popular'] . " em " . $cidade_exibicao;
            } else {
                $titulo_pagina = $artigo['titulo_popular'];
            }
        }
    } catch (PDOException $e) {}
}

// =================================================================================
// 4. FEED DE INSIGHTS (Para a Home) -- NOVIDADE v2.3
// =================================================================================
// Busca os 3 últimos artigos ativos para exibir na vitrine da Home
$lista_insights = [];

try {
    // Pegamos titulo, slug, categoria e data dos 3 ultimos
    $sql_feed = "SELECT titulo_popular, titulo_tecnico, slug, categoria, data_publicacao 
                 FROM kairos_conhecimento 
                 WHERE status = 'Ativo' 
                 ORDER BY data_publicacao DESC 
                 LIMIT 3";
    
    $stmt_feed = $pdo->query($sql_feed);
    $lista_insights = $stmt_feed->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Se der erro, a lista fica vazia e a seção não aparece (segurança)
}
?>