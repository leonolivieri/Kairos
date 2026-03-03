<?php
/**
 * KAIRÓS VENTURES - ARTEFATO DE ENGENHARIA
 * -----------------------------------------------------------------------------
 * @arquivo    : engine.php
 * @descricao  : Motor de decisão de conteúdo e regras de negócio.
 * @versao     : 2.5
 * @autor      : Leon (Arquiteto) & IA
 * @data_mod   : 19/02/2026
 * -----------------------------------------------------------------------------
 * HISTÓRICO DE MUDANÇAS:
 * [v2.0] - Lógica de Cidades (Legado).
 * [v2.1] - Correção de Variáveis Globais.
 * [v2.2] - Implementação do Hub de Conhecimento (Single Article).
 * [v2.3] - Implementação do Feed de Insights (Lista Home).
 * [v2.4] - Cofre de Senhas (.env) e Segurança de Credenciais (Local/Hostinger).
 * [v2.5] - Desacoplamento de configurações e Matriz Geo-Core Lusófona.
 * -----------------------------------------------------------------------------
 */

require_once 'conexao.php';
/// =================================================================================
// 1. NÚCLEO GEO-ESTRATÉGICO: INTELIGÊNCIA DE AUTOPREENCHIMENTO
// =================================================================================

// A. Fallbacks de Emergência (Nível de Segurança Máximo)
$sigla_pais_padrao = 'BR'; 
$pais_exibicao = "Brasil";

try {
    // B. BUSCA CONFIGURAÇÃO: Qual o país sede?
    $stmt_sede = $pdo->prepare("SELECT valor FROM kairos_configuracoes WHERE chave = 'pais_sede_sigla' LIMIT 1");
    $stmt_sede->execute();
    $row_sede = $stmt_sede->fetch(PDO::FETCH_ASSOC);

    if ($row_sede) {
        $sigla_pais_padrao = strtoupper($row_sede['valor']);
    } else {
        // C. INTELIGÊNCIA DE AUTOPREENCHIMENTO: Se não existe, a Kairós cria!
        $sql_insert = "INSERT INTO kairos_configuracoes (chave, valor, descricao, categoria) 
                       VALUES ('pais_sede_sigla', 'BR', 'País Sede Padrão do Sistema (Provisionado Automaticamente)', 'Sistema')";
        $pdo->exec($sql_insert);
    }

    // D. NAVEGAÇÃO DINÂMICA: URL (?pais=) sobrepõe o Banco
    $sigla_atual = isset($_GET['pais']) ? strtoupper(substr($_GET['pais'], 0, 2)) : $sigla_pais_padrao;

    // E. BUSCA O NOME DO PAÍS ATUAL NO BANCO
    $stmt_nome = $pdo->prepare("SELECT nome FROM paises WHERE sigla = :sigla LIMIT 1");
    $stmt_nome->execute(['sigla' => $sigla_atual]);
    if ($row_nome = $stmt_nome->fetch(PDO::FETCH_ASSOC)) {
        $pais_exibicao = $row_nome['nome'];
    }

    // F. DEFINIÇÃO DO TEXTO PADRÃO
    $texto_padrao = "Todo o " . $pais_exibicao;
    
    // Sobrescrita final (se houver a chave antiga 'texto_padrao_home', ela ainda manda)
    $stmt_conf = $pdo->query("SELECT valor FROM kairos_configuracoes WHERE chave = 'texto_padrao_home' LIMIT 1");
    if ($row_conf = $stmt_conf->fetch(PDO::FETCH_ASSOC)) {
        $texto_padrao = $row_conf['valor'];
    }
} catch (PDOException $e) { /* Falha silenciosa para estabilidade */ }

// G. MATRIZ DE CIDADES: Alimenta a estrutura herdando o contexto do país
$cidades_estrategicas = ['padrao' => $texto_padrao];

try {
    $sql = "SELECT slug, nome FROM cidades";
    $stmt = $pdo->query($sql);
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $cidades_estrategicas[$linha['slug']] = $linha['nome'];
    }
} catch (PDOException $e) { /* Mantém cidades vazias se houver erro */ }

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
