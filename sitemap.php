<?php
// sitemap.php versão 2.70 - Atualizado em 2024-06-15
// Define que este arquivo é um XML, não uma página HTML
header("Content-type: text/xml");
//Usa o seu protocolo de conexão local/produção para definir a URL base do site, garantindo que o sitemap funcione corretamente em ambos os ambientes.
require_once 'conexao.php';

// Base URL do seu site (ajuste se mudar de domínio)
$base_url = "https://kairosventures.com.br";

// A MESMA Matriz de Estratégia do index.php
// (No futuro, colocaremos isso num arquivo único para não ter que atualizar em 2 lugares)
$cidades_estrategicas = [
    'padrao'         => 'São José do Rio Pardo',
    'rio-pardo'      => 'São José do Rio Pardo',
    'mococa'         => 'Mococa',
    'sao-joao'       => 'São João da Boa Vista',
    'vargem'         => 'Vargem Grande do Sul',
    'pinhal'         => 'Espírito Santo do Pinhal',
    'casa-branca'    => 'Casa Branca',
    'aguai'          => 'Aguaí',
    'caconde'        => 'Caconde',
    'tambau'         => 'Tambaú',
    'divinolandia'   => 'Divinolândia',
    'tapiratiba'     => 'Tapiratiba',
    'itobi'          => 'Itobi',
    'aguas-da-prata' => 'Águas da Prata',
    'pocos'          => 'Poços de Caldas',
    'guaxupe'        => 'Guaxupé',
    'juruaia'        => 'Juruaia (Polo Têxtil)',
    'pirassununga'   => 'Pirassununga'
];

// 2. Busca de Artigos Ativos (Hub de Conhecimento)
$artigos = [];
try {
    $stmt = $pdo->query("SELECT slug, data_publicacao FROM kairos_conhecimento WHERE status = 'Ativo'");
    $artigos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) { /* Falha silenciosa para não quebrar o XML */ }

// Início do XML
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc><?php echo $base_url; ?>/</loc>
        <lastmod><?php echo date("Y-m-d"); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <?php foreach($cidades_estrategicas as $slug => $nome): ?>
        <?php if($slug == 'padrao') continue; ?>
    <url>
        <loc><?php echo $base_url; ?>/?cidade=<?php echo $slug; ?></loc>
        <lastmod><?php echo date("Y-m-d"); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php endforeach; ?>

    <?php foreach($artigos as $art): ?>
    <url>
        <loc><?php echo $base_url; ?>/?artigo=<?php echo $art['slug']; ?></loc>
        <lastmod><?php echo date("Y-m-d", strtotime($art['data_publicacao'])); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>    

    <?php endforeach; ?>

</urlset>