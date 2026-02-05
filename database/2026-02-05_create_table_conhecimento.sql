-- PROTOCOLO KAIRÓS: CRIAÇÃO DO HUB DE CONHECIMENTO
-- Destino: Produção (Hostinger)
-- Base: u818458777_BDKairos

-- 1. Criação da Tabela (DDL)
CREATE TABLE IF NOT EXISTS `kairos_conhecimento` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `titulo_popular` VARCHAR(255) NOT NULL,
  `titulo_tecnico` VARCHAR(255),
  `slug` VARCHAR(255) UNIQUE NOT NULL,
  `resumo_home` VARCHAR(500),
  `conteudo` TEXT NOT NULL,
  `categoria` ENUM('Analise de Mercado', 'Doutrina Tecnica', 'Manual de Ferramenta') DEFAULT 'Analise de Mercado',
  `escopo` ENUM('Local', 'Regional', 'Estadual', 'Nacional') DEFAULT 'Nacional',
  `setor_alvo` VARCHAR(100), -- Ex: Comercio, Industria, Agronegocio
  `status` ENUM('Rascunho', 'Ativo', 'Arquivado') DEFAULT 'Rascunho',
  `is_destaque` BOOLEAN DEFAULT FALSE,
  `data_criacao` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `data_publicacao` DATETIME,
  `data_revisao` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  `meta_descricao` VARCHAR(160)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Inserção do Artigo Piloto: Natal de Rio Pardo (DML)
INSERT INTO `kairos_conhecimento` (
  `titulo_popular`, 
  `titulo_tecnico`, 
  `slug`, 
  `resumo_home`, 
  `conteudo`, 
  `categoria`, 
  `escopo`, 
  `setor_alvo`, 
  `status`, 
  `is_destaque`, 
  `data_publicacao`, 
  `meta_descricao`
) VALUES (
  'Vender muito é bom, mas o que sobra no bolso é o que manda',
  'Engenharia de Eficiência e Estrutura de Sustentação Operacional',
  'venda-vs-lucro-natal-rio-pardo',
  'O que o balanço do Natal de Rio Pardo revela sobre a real saúde da sua empresa? Descubra por que faturamento alto nem sempre significa lucro no bolso.',
  '<h3>O que a gente aprendeu com o Natal de 2025</h3><p>Recentemente, o jornal mostrou que o comércio aqui da região deu uma respirada no final do ano. O pessoal vendeu, mas o que salvou mesmo o Natal de muita gente foi saber segurar a margem, cuidar de cada centavo. No fim do dia, não adianta nada a loja ou a fábrica estar cheia se, na hora de fechar o caixa, a conta não bate porque os custos engoliram tudo.</p><h3>A hora de ter um alicerce firme</h3><p>Sabe quando a gente sente que o negócio virou um "filho grande"? Ele não para de pedir atenção e parece que a gente vive apagando incêndio. Chega uma hora que não dá mais para levar tudo no improviso. É o momento de dar um passo à frente e montar um alicerce firme (o que chamamos tecnicamente de estrutura de sustentação), para você não ser mais o escravo da sua própria empresa, mas o verdadeiro dono dela.</p><h3>Dinheiro escorrendo pelo ralo</h3><p>O empresário aqui na nossa região é um herói, trabalha dobrado. Mas tem uma coisa que desanima: ver o dinheiro indo embora em bobeira, em tarefa que se repete, em coisa que a gente perde o controle. É o famoso "dinheiro que escorre pelo ralo". É aí que o <strong>Bitrix24</strong> entra. Não é para complicar, é para ser seu braço direito, cuidando do que é chato e repetitivo para você focar no que traz dinheiro.</p><h3>A Roda Quadrada</h3><p>Às vezes, o que você precisa não é trabalhar mais, é trabalhar de um jeito mais esperto. Tentar tocar uma empresa sem processos organizados é como empurrar uma carroça de roda quadrada: haja força para pouco movimento. Vamos arredondar essa roda e blindar o seu lucro?</p>',
  'Analise de Mercado', 
  'Regional', 
  'Comercio', 
  'Ativo', 
  TRUE, 
  NOW(),
  'Entenda como a eficiência operacional salvou as margens de lucro no Natal de Rio Pardo e como aplicar isso na sua empresa.'
);