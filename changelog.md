# CHANGELOG - Kairós Ventures Ecosystem

Todas as mudanças notáveis neste projeto serão documentadas neste arquivo.
O formato é baseado em [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [v2.8] - 03-03-2026
### Inteligência de Infraestrutura e Autoprovisionamento (Self-Healing)
- **Infraestrutura:** Transição do servidor terminal (8080) para Apache/XAMPP (8081) com suporte a arquivos de configuração distribuídos [cite: 2026-03-03].
- **Smart Connect v3.2:** `conexao.php` agora possui detecção de porta dinâmica via `$_SERVER['SERVER_PORT']` e sistema de *fallback* (contingência) caso o arquivo `.env` esteja ausente [cite: 2026-03-03].
- **.htaccess Inteligente:** Implementação de regras de redirecionamento HTTPS condicionais (latentes em Localhost, ativas em Produção) para evitar erros de protocolo SSL em ambiente de desenvolvimento [cite: 2026-03-03].
- **Auto-Provisioning:** Motor de banco de dados agora cria automaticamente chaves de configuração críticas (ex: `pais_sede_sigla`) caso não sejam encontradas no primeiro acesso [cite: 2026-03-03].
- **Engine v2.8 (Soberania Geo):** Implementação da hierarquia de país via URL (`?pais=`) com prioridade sobre configurações estáticas, permitindo alternância instantânea entre mercados (Brasil, Portugal, Angola, Moçambique) [cite: 2026-03-03].
- **Bug Fix:** Correção de conflito de cache e hierarquia de variáveis que causava o vazamento de strings globais (títulos longos) em contextos regionais específicos [cite: 2026-03-03].

## [v2.5] - 19-02-2026
### Arquitetura Glocal e Desacoplamento (Geo-Core)
- **Banco de Dados:** Criação do cofre `kairos_configuracoes` e hierarquia de `paises`.
- **Integridade Referencial:** Conexão lógica entre estados e os países do eixo lusófono.
- **Motor Kairós:** Refatoração do `engine.php` para ler o escopo global de atuação diretamente do banco, eliminando textos fixos (*hardcoded*).

## [v2.4] - 13-02-2026
### Segurança (Security Hardening)
- **Cofre de Senhas (.env):** Implementação de variáveis de ambiente para ocultar credenciais de banco de dados.
- **Proteção de Acesso:** Bloqueio de leitura do arquivo .env via `.htaccess`.
- **Refatoração:** Atualização do `conexao.php` para leitura dinâmica de ambiente (Local vs Produção).
## [Não Publicado] - Em Desenvolvimento (Localhost)

## [v2.3] - 06-02-2026
### Adicionado
- **Vitrine de Insights:** Nova seção na Home (`index.php`) para listar os 3 últimos artigos ativos.
- **Engine v2.3:** Lógica de busca (`$lista_insights`) implementada no `engine.php`.
- **DocBlocks:** Padronização de cabeçalhos de arquivo para rastreabilidade técnica.

## [v2.2] - 06-02-2026
### Adicionado
- **Hub de Conhecimento:** Sistema de renderização de artigos via URL (`?artigo=slug`).
- **View de Leitura:** Layout condicional no `index.php` para exibir conteúdo textual longo.
- **Engine v2.2:** Suporte híbrido para rotas de Cidades e Artigos.

## [v2.0] - 05-02-2026
### Adicionado
- **Smart Connect:** Arquivo `conexao.php` com detecção automática de ambiente (Local/Prod).
- **Lógica de Cidades:** Engine capaz de alterar o conteúdo da Home baseado no parâmetro `?cidade=`.
- **Infraestrutura:** Deploy inicial na Hostinger e configuração de banco de dados.

---
*Mantido pela Equipe de Engenharia Kairós.*