
<?php include 'engine.php'; ?>
<?php include 'includes/header.php'; ?>

<?php if ($tipo_conteudo == 'artigo'): ?>

    <article class="py-5 bg-light">
        <div class="container" style="max-width: 800px;">
            <header class="mb-5 text-center">
                <span class="badge bg-primary mb-2"><?php echo $conteudo_view['categoria']; ?></span>
                <h1 class="fw-bold display-5 mb-3"><?php echo $conteudo_view['titulo_popular']; ?></h1>
                <h2 class="h5 text-muted fw-normal mb-4"><?php echo $conteudo_view['titulo_tecnico']; ?></h2>
                <div class="d-flex justify-content-center align-items-center text-muted small">
                    <i class="bi bi-calendar-event me-2"></i>
                    <span>Publicado em: <?php echo date('d/m/Y', strtotime($conteudo_view['data_publicacao'])); ?></span>
                </div>
            </header>

            <div class="artigo-conteudo bg-white p-5 rounded shadow-sm">
                <?php echo $conteudo_view['conteudo']; ?>
            </div>

            <div class="text-center mt-5">
                <a href="/" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Voltar para Home
                </a>
            </div>
        </div>
    </article>

<?php else: ?>

        <header class="hero-section position-relative overflow-hidden hero-bg" id="home">
                
                <div class="position-absolute top-0 end-0 opacity-25 translate-middle-y">
                    <i class="bi bi-grid-3x3-gap-fill" style="font-size: 30rem; color: #B79538;"></i>
                </div>

                <div class="container position-relative z-1">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            
                            <div class="kairos-badge badge-authority">
                                <i class="bi bi-trophy-fill"></i> Bitrix24 Official Bronze Partner
                            </div>
                            <br> <div class="kairos-badge badge-ghost">
                                <i class="bi bi-crosshair"></i> Atendendo empresas de <strong><?php echo $cidade_exibicao; ?></strong>
                            </div>

                            <h1 class="display-4 fw-bold text-white mb-4" style="line-height: 1.1;">
                                Sua Gestão Comercial<br>
                                e Projetos Organizados<br>
                                <span class="text-kairos-gold">em um só lugar.</span>
                            </h1>

                            <p class="lead text-white-50 mb-5" style="max-width: 500px;">
                                Consultoria Especializada em <strong>Bitrix24</strong>. Implementamos o <strong>CRM de vendas</strong>, <strong>Automação de WhatsApp</strong> e <strong>Gestão de Tarefas</strong> para sua empresa parar de depender de processos manuais.
                            </p>
                            <div class="d-flex flex-column flex-sm-row gap-3">
                                <a href="https://kairosventures.bitrix24.com.br/~sN0I6" target="_blank" 
                                class="btn btn-lg px-4 fw-bold shadow-lg d-flex align-items-center justify-content-center btn-kairos-gold">
                                    <i class="bi bi-calendar-check me-2"></i> Agendar Diagnóstico
                                </a>
                                
                                <a href="https://www.bitrix24.com.br/create.php?p=25860059" target="_blank" rel="noindex nofollow"
                                class="btn btn-outline-light btn-lg px-4 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-play-circle me-2"></i> Testar Grátis
                                </a>
                            </div>
                            
                            <p class="small text-white-50 mt-4">
                                <i class="bi bi-shield-lock"></i> Implementação segura certificada pela Kairós Ventures.
                            </p>
                        </div>

                        <div class="col-lg-6 text-center position-relative">
                            
                            <div class="hero-glow-effect"></div>
                            
                            <div class="card border-0 text-start p-4 shadow-lg position-relative mx-auto glass-card-dashboard">
                                
                                <div class="d-flex justify-content-between mb-4 border-bottom border-secondary border-opacity-25 pb-3">
                                    <div class="d-flex gap-2">
                                        <div class="rounded-circle bg-danger" style="width:10px; height:10px;"></div>
                                        <div class="rounded-circle bg-warning" style="width:10px; height:10px;"></div>
                                        <div class="rounded-circle bg-success" style="width:10px; height:10px;"></div>
                                    </div>
                                    <span class="small text-white-50">Kairós OS v.2.0</span>
                                </div>

                                <div class="d-flex align-items-center mb-3 p-2 rounded" style="background: rgba(0,0,0,0.3);">
                                    <div class="bg-primary rounded p-2 me-3"><i class="bi bi-people-fill text-white"></i></div>
                                    <div>
                                        <h6 class="text-white mb-0">CRM & Vendas</h6>
                                        <small class="text-success"><i class="bi bi-arrow-up"></i> +32% Conversão</small>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3 p-2 rounded" style="background: rgba(0,0,0,0.3);">
                                    <div class="bg-warning rounded p-2 me-3"><i class="bi bi-kanban-fill text-dark"></i></div>
                                    <div>
                                        <h6 class="text-white mb-0">Gestão de Projetos</h6>
                                        <small class="text-white-50">Sincronizado via Kairós Infra</small>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center p-2 rounded" style="background: rgba(0,0,0,0.3);">
                                    <div class="bg-success rounded p-2 me-3"><i class="bi bi-whatsapp text-white"></i></div>
                                    <div>
                                        <h6 class="text-white mb-0">Automação WhatsApp</h6>
                                        <small class="text-white-50">Bot Ativo 24/7</small>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="position-absolute bottom-0 end-0 mb-n4 me-5 d-none d-md-block">
                                <div class="bg-white text-dark px-3 py-2 rounded shadow fw-bold">
                                    <i class="bi bi-star-fill text-warning"></i> 12 Milhões de Empresas
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </header>

        <?php if (!empty($lista_insights)): ?>
            <section class="py-5 position-relative" id="insights" style="background-color: #f8f9fa; border-bottom: 1px solid rgba(0,0,0,0.05);">
                <div class="container position-relative z-1">
                    
                    <div class="d-flex justify-content-between align-items-end mb-5">
                        <div>
                            <h6 class="text-uppercase fw-bold mb-2" style="color: #B79538; letter-spacing: 2px;">
                                <i class="bi bi-newspaper me-1"></i> Inteligência de Mercado
                            </h6>
                            <h2 class="fw-bold mb-0 text-dark">Doutrina & Atualizações</h2>
                        </div>
                        <div class="d-none d-md-block">
                            <span class="text-muted small">Acompanhe nossa visão técnica</span>
                        </div>
                    </div>

                    <div class="row g-4">
                        <?php foreach ($lista_insights as $post): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 border-0 shadow-sm hover-card-effect" style="transition: transform 0.3s ease;">
                                <div class="card-body p-4 d-flex flex-column">
                                    
                                    <div class="mb-3 d-flex justify-content-between align-items-start">
                                        <span class="badge bg-light text-dark border fw-normal">
                                            <?php echo $post['categoria']; ?>
                                        </span>
                                        <small class="text-muted" style="font-size: 0.8rem;">
                                            <?php echo date('d/m/Y', strtotime($post['data_publicacao'])); ?>
                                        </small>
                                    </div>

                                    <h5 class="card-title fw-bold mb-3">
                                        <a href="?artigo=<?php echo $post['slug']; ?>" class="text-decoration-none text-dark stretched-link">
                                            <?php echo $post['titulo_popular']; ?>
                                        </a>
                                    </h5>

                                    <p class="card-text text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                                        <?php echo $post['titulo_tecnico']; ?>
                                    </p>

                                    <div class="d-flex align-items-center text-primary mt-auto pt-3 border-top border-light">
                                        <span class="small fw-bold">Ler Análise Completa</span>
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </section>
        <?php endif; ?>        

        <section class="py-5" id="desafios" style="background-color: #f8f9fa;">
            <div class="container py-4">
                    
                <div class="row align-items-center">
                            
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="ps-4 border-start border-4" style="border-color: #B79538 !important;">
                            <h5 class="fw-bold text-uppercase mb-3" style="color: #B79538; letter-spacing: 2px;">
                                Cenário Atual
                            </h5>
                            <h2 class="display-5 fw-bold mb-4" style="color: #001C3E;">
                                O desafio de escalar<br>com organização.
                            </h2>
                            <p class="lead text-secondary mb-4">
                                O crescimento traz complexidade. Em determinado momento, as ferramentas que trouxeram sua empresa até aqui deixam de ser suficientes para o próximo nível.
                            </p>
                            <p class="text-muted">
                                Nossa missão é implementar a estrutura necessária para que você continue crescendo sem perder o controle da operação.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1">
                        
                        <div class="d-flex mb-4 p-4 bg-white rounded shadow-sm border border-light k-list-item">
                            <div class="flex-shrink-0 me-4">
                                <div class="icon-box rounded-circle d-flex align-items-center justify-content-center" 
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-diagram-3-fill fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1"> <h5 class="fw-bold mb-2" style="color: #001C3E;">Ecossistema Conectado</h5>
                                <p class="mb-0 text-muted small">
                                    Seu ERP cuida do fiscal; nós cuidamos do crescimento. Integramos sua gestão comercial e operacional para que a venda no CRM dispare processos sem duplicidade.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mb-4 p-4 bg-white rounded shadow-sm border border-light k-list-item">
                            <div class="flex-shrink-0 me-4">
                                <div class="icon-box rounded-circle d-flex align-items-center justify-content-center" 
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-people-fill fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2" style="color: #001C3E;">Retenção de Capital Intelectual</h5>
                                <p class="mb-0 text-muted small">
                                    Transformamos o relacionamento comercial, muitas vezes restrito ao WhatsApp pessoal, em um ativo da empresa. Histórico e negociações ficam seguros institucionalmente.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex p-4 bg-white rounded shadow-sm border border-light k-list-item">
                            <div class="flex-shrink-0 me-4">
                                <div class="icon-box rounded-circle d-flex align-items-center justify-content-center" 
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-clock-history fs-3"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2" style="color: #001C3E;">Otimização da Liderança</h5>
                                <p class="mb-0 text-muted small">
                                    Criamos processos claros para dar autonomia à sua equipe. O objetivo é liberar a diretoria do microgerenciamento operacional para focar puramente na estratégia.
                                </p>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>
        </section>

        <section class="py-5" id="sobre" style="background-color: #001C3E; color: #ffffff;">
            <div class="container py-5">
                
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h5 class="text-uppercase" style="color: #B79538; letter-spacing: 3px; font-weight: 600;">
                            Nossa Origem
                        </h5>
                        <h2 class="display-4 fw-bold mt-3 mb-4">
                            Segurança de Dados com<br>
                            <span style="border-bottom: 3px solid #B79538;">Inteligência de Vendas.</span>
                        </h2>
                        <p class="lead" style="color: #e0e0e0; font-weight: 300;">
                            A união entre a estabilidade da infraestrutura e a potência da automação comercial.
                        </p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center align-items-stretch">
                    
                    <div class="col-md-5">
                        <div class="p-4 h-100 border rounded-3 shadow-sm" 
                            style="border-color: rgba(183, 149, 56, 0.2) !important; background: rgba(255, 255, 255, 0.03);">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-shield-lock-fill fs-3 me-3" style="color: #B79538;"></i>
                                <h4 class="fw-bold mb-0">Talk Consulting</h4>
                            </div>
                            <p class="small text-white-50 mb-3">Estabilidade e Proteção</p>
                            <p class="fw-light">
                                Garantimos que a base da sua empresa seja inabalável. Especialistas em segurança de dados e ambientes de missão crítica, cuidamos para que sua operação nunca pare e suas informações estejam blindadas.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-auto d-none d-md-flex align-items-center justify-content-center">
                        <i class="bi bi-plus-lg fs-2" style="color: #B79538; opacity: 0.5;"></i>
                    </div>

                    <div class="col-md-5">
                        <div class="p-4 h-100 border rounded-3 shadow" 
                            style="border-color: #B79538 !important; background: linear-gradient(135deg, rgba(183, 149, 56, 0.1) 0%, rgba(0, 28, 62, 0.5) 100%);">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-graph-up-arrow fs-3 me-3" style="color: #B79538;"></i>
                                <h4 class="fw-bold mb-0 text-white">Kairós Ventures</h4>
                            </div>
                            <p class="small mb-3" style="color: #B79538;">Eficiência e Lucratividade</p>
                            <p class="fw-light">
                                Transformamos sua tecnologia em motor de lucro. Implementamos o Bitrix24 como um sistema de governança, automatizando processos de vendas e gestão para que você recupere o controle estratégico do seu negócio.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row mt-5 text-center">
                    <div class="col-12">
                        <p class="fst-italic mb-4" style="color: #B79538; font-family: serif;">
                            "A infraestrutura protege o que você já conquistou. A Kairós constrói o que você ainda vai alcançar."
                        </p>
                        
                        <a href="https://www.talkconsulting.com.br" target="_blank" 
                        class="btn btn-outline-light px-5 py-2 rounded-pill"
                        style="border-color: #B79538; color: #fff;"
                        onmouseover="this.style.backgroundColor='#B79538'; this.style.borderColor='#B79538';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#B79538';">
                            Conhecer a Base Técnica (Talk)
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-5" id="manifesto">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3">Nossa Abordagem</h2>
                        <p class="text-muted">A Kairós Ventures não é uma agência de marketing, nem apenas uma consultoria de TI. Somos arquitetos de negócios.</p>
                        <p>Nascemos da solidez da <strong>Talk Consulting</strong> para entregar a camada de inteligência e processos que faltava no mercado.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-primary"></i> Especialistas em Bitrix24</li>
                            <li><i class="bi bi-check-circle-fill text-primary"></i> Foco em Automação de Processos</li>
                            <li><i class="bi bi-check-circle-fill text-primary"></i> Metodologia Própria (Códice Kairós)</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="p-5 bg-light rounded border">
                            <h3><i class="bi bi-buildings display-1 text-secondary"></i></h3>
                            <p class="small text-muted">Estrutura Talk Consulting & Kairós</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 position-relative overflow-hidden diferenciais-bg" id="diferenciais">
                
                <div class="diferenciais-spotlight"></div>

                <div class="container py-4 position-relative z-1">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-5 mb-5 mb-lg-0">
                            <div class="d-inline-block border border-secondary rounded-pill px-3 py-1 mb-3 glass-badge">
                                <small class="text-uppercase fw-bold text-white-50" style="letter-spacing: 2px;">Por que Kairós?</small>
                            </div>
                            
                            <h2 class="display-5 fw-bold mb-4">
                                Além das licenças.<br>
                                <span class="text-kairos-gold">Vendemos Também Arquitetura.</span>
                            </h2>
                            
                            <p class="lead text-white-50 mb-4">
                                Muitos implantam software. Poucos desenham o futuro. Nossa abordagem une a precisão da engenharia com a visão de negócios.
                            </p>
                            
                            <div class="d-flex align-items-center text-white-50 mb-4">
                                <i class="bi bi-quote fs-1 me-3 text-kairos-gold opacity-50"></i>
                                <p class="mb-0 fst-italic small">
                                    "Um CRM de vendas mal configurado é apenas uma agenda cara. Nós entregamos um motor de vendas."
                                </p>
                            </div>

                            <a href="https://kairosventures.bitrix24.com.br/~sN0I6" target="_blank"
                            class="btn btn-outline-light rounded-pill px-4 mt-2 btn-kairos-outline">
                                Agendar Consultoria Técnica
                            </a>
                        </div>

                        <div class="col-lg-6 offset-lg-1">
                            
                            <div class="diff-card p-4 rounded-3 mb-3 d-flex align-items-center">
                                <div class="icon-wrapper rounded-3 d-flex align-items-center justify-content-center me-4" 
                                    style="width: 60px; height: 60px; background: rgba(255,255,255,0.05); color: #B79538; transition: all 0.3s;">
                                    <i class="bi bi-shield-lock-fill fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">DNA de Infraestrutura</h5>
                                    <p class="small text-white-50 mb-0">
                                        Herança da <strong>Talk Consulting</strong>. Sabemos que um sistema bonito sem segurança e estabilidade não sustenta o crescimento.
                                    </p>
                                </div>
                            </div>

                            <div class="diff-card p-4 rounded-3 mb-3 d-flex align-items-center">
                                <div class="icon-wrapper rounded-3 d-flex align-items-center justify-content-center me-4" 
                                    style="width: 60px; height: 60px; background: rgba(255,255,255,0.05); color: #B79538; transition: all 0.3s;">
                                    <i class="bi bi-code-square fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Metodologia "Códice Kairós"</h5>
                                    <p class="small text-white-50 mb-0">
                                        Não usamos templates prontos. Mapeamos seu processo e desenhamos o fluxo ideal para o seu nicho específico.
                                    </p>
                                </div>
                            </div>

                            <div class="diff-card p-4 rounded-3 d-flex align-items-center">
                                <div class="icon-wrapper rounded-3 d-flex align-items-center justify-content-center me-4" 
                                    style="width: 60px; height: 60px; background: rgba(255,255,255,0.05); color: #B79538; transition: all 0.3s;">
                                    <i class="bi bi-person-badge-fill fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Atendimento Senior-Level</h5>
                                    <p class="small text-white-50 mb-0">
                                        Aqui você não fala com robôs ou estagiários. O atendimento é consultivo, feito por especialistas de carreira.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>  
            
        <section class="py-5 bg-light" id="solucoes">
            <div class="container">
                
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-2">Soluções para sua Operação</h2>
                    <p class="text-muted">Implementação e consultoria especializada para quem busca resultados reais.</p>
                </div>
                
                <div class="row g-4">
                    
                    <div class="col-md-4">
                        <div class="card card-servico h-100 p-3 shadow-sm border-0">
                            <div class="card-body text-center d-flex flex-column">
                                <i class="bi bi-search display-4 text-primary mb-3"></i>
                                <h4 class="card-title fw-bold">Auditoria de CRM de vendas e Processos</h4>
                                <p class="card-text flex-grow-1 text-muted">
                                    Um <strong>Diagnóstico de 10 dias</strong> para encontrar gargalos no seu fluxo de vendas. Entregamos o plano de ação para sua empresa parar de perder leads.
                                </p>
                                
                                <a href="https://wa.me/5511912885989?text=Olá,%20vi%20o%20site%20e%20quero%20saber%20mais%20sobre%20a%20Auditoria%20de%20CRM" 
                                class="btn btn-outline-primary mt-3 rounded-pill fw-bold">
                                Solicitar Diagnóstico
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-servico h-100 p-3 border border-2 border-primary shadow">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="badge bg-primary mb-3 mx-auto px-3 py-2 rounded-pill">Aceleração Digital</div>
                                
                                <i class="bi bi-lightning-charge display-4 text-primary mb-3"></i>
                                <h4 class="card-title fw-bold">Implementação Bitrix24 (CRM de vendas e Projetos)</h4>
                                <p class="card-text flex-grow-1 text-muted">
                                    Configuração profissional do seu <strong>CRM de vendas, Gestão de Tarefas e WhatsApp</strong>. Colocamos sua empresa para rodar de forma automática e organizada.
                                </p>
                                
                                <a href="https://kairosventures.bitrix24.com.br/~sN0I6" target="_blank"
                                class="btn btn-primary mt-3 rounded-pill fw-bold py-2">
                                Agendar Apresentação
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-servico h-100 p-3 shadow-sm border-0">
                            <div class="card-body text-center d-flex flex-column">
                                <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                                <h4 class="card-title fw-bold">Governança Digital (CPO as a Service)</h4>
                                <p class="card-text flex-grow-1 text-muted">
                                    Sua <strong>Diretoria de Processos</strong> terceirizada. Garantimos que o Bitrix24 continue evoluindo junto com seu lucro, com suporte sênior mensal.
                                </p>
                                
                                <a href="https://wa.me/5511912885989?text=Olá,%20tenho%20interesse%20na%20Governança%20Digital%20(CPO)" 
                                class="btn btn-outline-primary mt-3 rounded-pill fw-bold">
                                Consultar Especialista
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5 text-center position-relative" id="ultimato"
                    style="background: linear-gradient(180deg, #001C3E 0%, #002a5c 100%); border-y: 1px solid rgba(183, 149, 56, 0.3);">
                
                <div class="position-absolute top-0 start-50 translate-middle-x" 
                    style="width: 60%; height: 100%; background: radial-gradient(ellipse at top, rgba(183, 149, 56, 0.15) 0%, transparent 70%); pointer-events: none;"></div>

                <div class="container position-relative z-1 py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            
                            <div class="d-inline-block mb-3">
                                <i class="bi bi-hourglass-split fs-1" style="color: #B79538;"></i>
                            </div>

                            <h2 class="display-5 fw-bold mb-4 text-white">
                                Chega de perder tempo com<br>
                                <span style="color: #B79538; border-bottom: 2px solid #B79538;">processos manuais.</span>
                            </h2>
                            
                            <p class="lead mb-5 text-white-50" style="font-weight: 300;">
                                A tecnologia para organizar sua empresa já existe e está ao seu alcance.<br>
                                O que falta é a estratégia certa para conectá-la.
                            </p>
                            
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center align-items-center">
                                
                                <a href="https://kairosventures.bitrix24.com.br/~sN0I6" target="_blank" 
                                class="btn btn-lg px-5 py-3 fw-bold shadow-lg rounded-pill"
                                style="background-color: #B79538; color: #ffffff; border: none; letter-spacing: 0.5px;"
                                onmouseover="this.style.backgroundColor='#d4ac40'; this.style.transform='translateY(-2px)';"
                                onmouseout="this.style.backgroundColor='#B79538'; this.style.transform='translateY(0)';">
                                    <i class="bi bi-calendar-check-fill me-2"></i> Agendar Diagnóstico Gratuito
                                </a>
                                
                                <a href="https://wa.me/5511912885989" 
                                class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill"
                                style="border-color: rgba(255,255,255,0.3);">
                                    <i class="bi bi-whatsapp me-2"></i> Falar no WhatsApp
                                </a>
                            </div>
                            
                            <div class="mt-5 pt-4 border-top border-secondary border-opacity-25 d-inline-block px-5">
                                <p class="small text-white-50 mb-0">
                                    <i class="bi bi-lock-fill me-1" style="color: #B79538;"></i> 
                                    Seus dados estão protegidos sob governança da Talk Consulting.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
        </section>

        <section class="py-5 bg-white" id="faq">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">Perguntas Frequentes</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="accordionFAQ">
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        <strong>O Bitrix24 serve para minha empresa?</strong>
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Sim. O Bitrix24 é modular. Atendemos desde pequenas equipes de 3 pessoas até grandes corporações. Adaptamos a ferramenta ao seu tamanho.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        <strong>Preciso pagar licença em dólar?</strong>
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Não. A Kairós Ventures facilita tudo para você com planos em Reais (BRL) e nota fiscal brasileira, garantindo previsibilidade no seu fluxo de caixa.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        <strong>Como funciona o Diagnóstico Express?</strong>
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        É uma consultoria rápida de 10 dias. Mapeamos seus processos atuais, identificamos gargalos e entregamos um plano de ação prático para implementação, sem compromisso de longo prazo.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>    

<?php endif; ?>
<?php include 'includes/footer.php'; ?>        
