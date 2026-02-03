<?php
// --- KAIRÓS ENGINE v1.1 (Dynamic Routing) ---

// 1. Matriz de Atuação Estratégica (Dicionário Completo para SEO)
// Lado Esquerdo: O código na URL (slug) | Lado Direito: O texto que vai aparecer na tela
$cidades_estrategicas = [
    'padrao'         => 'São José do Rio Pardo', // Fallback
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
    'pirassununga'   => 'Pirassununga',
    'guaranesia'     => 'Guaranésia',
];

// 2. Captura Segura do Parâmetro (Sanitização Básica)
// Verifica se existe ?cidade=X na URL. Se não, assume 'padrao'.
$slug_url = isset($_GET['cidade']) ? $_GET['cidade'] : 'padrao';

// 3. Validação e Definição da Exibição
// Se o slug existir na matriz, usa o nome bonito. Se não, usa o padrão.
if (array_key_exists($slug_url, $cidades_estrategicas)) {
    $cidade_exibicao = $cidades_estrategicas[$slug_url];
} else {
    $cidade_exibicao = $cidades_estrategicas['padrao'];
}

// 4. Variáveis de Ambiente (Globais)
$ano_atual = date('Y');
$estado_sede = "SP"; 
?>
