        <footer class="text-white py-5 footer-kairos" id="contato" style="background-color: #001C3E; border-top: 4px solid #B79538;">
            <div class="container text-center">
                
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="fw-bold mb-4">Pronto para assumir o controle?</h3>
                        <p class="mb-4 text-white-50">
                            A transformação da sua empresa começa com uma conversa.
                        </p>
                        
                        <a href="https://wa.me/5511912885989" 
                        class="btn btn-success btn-lg mb-4 px-5 shadow-lg fw-bold"
                        style="border-radius: 50px;">
                            <i class="bi bi-whatsapp me-2"></i> Iniciar Conversa
                        </a>

                        <div class="row mt-4 border-top border-secondary pt-4 opacity-75 w-100 mx-auto">
                            <div class="col-12">
                                <p class="small mb-2 text-white">
                                    <i class="bi bi-geo-alt-fill text-warning me-1"></i> 
                                    <strong>Sede Operacional:</strong> 
                                    <?php echo $cidade_exibicao; ?>, <?php echo $estado_sede; ?>
                                </p>

                                
                                <div class="d-flex flex-column align-items-center">

                                    <div class="mt-4">
                                        <h6 class="text-white-50 text-uppercase fw-bold mb-3" style="font-size: 0.75rem; letter-spacing: 1px;">
                                            <i class="bi bi-geo-alt-fill me-1 text-kairos-gold"></i> Atuação Regional & SEO
                                        </h6>
                                        
                                        <div class="d-flex flex-wrap gap-2">
                                            <?php 
                                            // Verifica se a variável existe antes de rodar (Segurança)
                                            if(isset($cidades_estrategicas)): 
                                                foreach($cidades_estrategicas as $slug => $nome): 
                                                    // Pula o item 'padrao' para não gerar link repetido
                                                    if($slug == 'padrao') continue; 
                                            ?>
                                                <a href="?cidade=<?php echo $slug; ?>" 
                                                class="badge text-decoration-none"
                                                style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: #ccc; font-weight: 400; transition: all 0.3s;">
                                                <?php echo $nome; ?>
                                                </a>
                                            <?php 
                                                endforeach; 
                                            endif; 
                                            ?>
                                        </div>
                                        
                                        <p class="small text-white-50 mt-3 fst-italic">
                                            * Atendimento presencial e remoto conforme disponibilidade técnica da unidade Talk Consulting regional.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="small text-white-50 mb-4 mt-4">
                            <p class="mb-1">
                                    &copy; <?php echo $ano_atual; ?> <strong>Kairós Ventures</strong> - Todos os direitos reservados.
                            </p>
                            <p class="mb-0" style="font-size: 0.85rem;">
                                Uma unidade de negócios estratégica do grupo <strong>Talk Consulting</strong>.<br>
                                CNPJ e Faturamento operados por Talk Consulting And Training LTDA.
                            </p>
                        </div>

                        <div class="mb-4">
                            <span class="text-white-50 small text-uppercase d-block mb-2" style="letter-spacing: 1px; font-size: 0.7rem;">Siga-nos</span>
                            
                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                
                                <a href="https://www.facebook.com/kairosventures" 
                                    target="_blank" 
                                    class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold d-flex align-items-center"
                                    style="border-color: rgba(255,255,255,0.3); transition: all 0.3s;">
                                    <i class="bi bi-facebook me-2"></i> Facebook
                                </a>

                                <a href="https://www.instagram.com/kairos.ventures/" 
                                    target="_blank" 
                                    class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold d-flex align-items-center"
                                    style="border-color: rgba(255,255,255,0.3); transition: all 0.3s;">
                                    <i class="bi bi-instagram me-2"></i> Instagram
                                </a>

                                <a href="https://www.linkedin.com/company/kair%C3%B3s-ventures" 
                                    target="_blank" 
                                    class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold d-flex align-items-center"
                                    style="border-color: rgba(255,255,255,0.3); transition: all 0.3s;">
                                    <i class="bi bi-linkedin me-2"></i> Linkedin
                                </a>

                                <a href="https://www.youtube.com/@Kair%C3%B3sVentures" 
                                    target="_blank" 
                                    class="btn btn-outline-light btn-sm rounded-pill px-3 fw-bold d-flex align-items-center"
                                    style="border-color: rgba(255,255,255,0.3); transition: all 0.3s;">
                                    <i class="bi bi-youtube me-2"></i> Youtube
                                </a>

                            </div>
                        </div>
                        
                    </div>
                        
                    <div class="mt-5">
                        <p class="text-white-50 small mb-2 text-uppercase" style="letter-spacing: 1px;  font-size: 0.7rem;">Tecnologia
                            Oficial
                        </p>
                        
                        <a href="https://www.bitrix24.com.br/create.php?p=25860059" rel="noindex nofollow" target="_blank"
                            class="d-inline-flex align-items-center px-4 py-2 rounded-pill text-decoration-none partner-link-hover"
                            title="Clique para criar sua conta gratuita no Bitrix24">
                        
                            <i class="bi bi-lightning-charge-fill text-warning me-2"></i>
                            <span class="fw-bold text-white me-2">BITRIX24</span>
                        
                            <div class="vr bg-secondary mx-2" style="height: 15px;"></div>
                        
                            <span class="small partner-cta-text ms-1">
                                Crie sua conta grátis <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="script.js"></script>

        <div id="cookie-banner" class="p-4 text-white shadow-lg d-none" 
            style="position: fixed; bottom: 30px; left: 30px; z-index: 9999; 
                    background-color: rgba(0, 28, 62, 0.98) !important; 
                    border: 1px solid #B79538; border-radius: 15px; 
                    width: 380px; max-width: 90vw;">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h6 class="fw-bold mb-2" style="color: #B79538;">Privacidade e Dados</h6>
                        <p class="small mb-0" style="line-height: 1.5; font-size: 0.85rem;">
                            A <strong>Política de Privacidade</strong> descreve como coletamos, usamos e protegemos suas informações pessoais. Usamos cookies para otimizar sua experiência. Você pode aceitar todos, ou continuar apenas com os essenciais.
                        </p>
                    </div>
                    <div class="col-12 d-flex gap-2">
                        <button onclick="aceitarCookies('todos')" class="btn btn-primary btn-sm flex-grow-1 rounded-pill fw-bold" 
                                style="background-color: #B79538; border: none; padding: 10px;">
                            Aceitar Tudo
                        </button>
                        <button onclick="aceitarCookies('essenciais')" class="btn btn-outline-light btn-sm flex-grow-1 rounded-pill fw-bold" 
                                style="padding: 10px; font-size: 0.75rem;">
                            Apenas Essenciais
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>