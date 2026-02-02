<?php
// Define que este arquivo é um XML, não uma página HTML
header("Content-type: text/xml");

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

</urlset>