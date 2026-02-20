-- =====================================================================
-- 1. CRIAÇÃO DO COFRE DE CONFIGURAÇÕES
-- =====================================================================
CREATE TABLE IF NOT EXISTS kairos_configuracoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chave VARCHAR(100) NOT NULL UNIQUE,
    valor TEXT NOT NULL,
    descricao VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO kairos_configuracoes (chave, valor, descricao) 
VALUES ('texto_padrao_home', 'Atendimento em todo o Brasil, Portugal, Angola e Moçambique', 'Frase padrão exibida na ausência de cidade na URL');

-- =====================================================================
-- 2. CRIAÇÃO DA TABELA DE PAÍSES (O Topo da Hierarquia)
-- =====================================================================
CREATE TABLE IF NOT EXISTS paises (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sigla CHAR(2) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO paises (nome, sigla) VALUES
('Brasil', 'BR'),
('Portugal', 'PT'),
('Angola', 'AO'),
('Moçambique', 'MZ');

-- =====================================================================
-- 3. CONECTANDO ESTADOS AOS PAÍSES
-- (Atenção: Rode este bloco apenas UMA vez para não duplicar a coluna)
-- =====================================================================
ALTER TABLE estados ADD COLUMN pais_id INT DEFAULT 1;

ALTER TABLE estados ADD CONSTRAINT fk_estado_pais FOREIGN KEY (pais_id) REFERENCES paises(id);