// Este código roda assim que o site carrega
console.log("Kairós Ventures: Site Carregado com Sucesso.");

/* =====================================================
 ÁREA DE INTEGRAÇÃO - WIDGET BITRIX24
=====================================================
*/

// CÓDIGO DO BITRIX24 CORRIGIDO (SEM AS TAGS <SCRIPT>):

// 1. O NOVO CARREGADOR DO WIDGET (Encapsulado)
function carregarWidgetBitrix() {
    console.log("Kairós OS: Inicializando Widget de Atendimento (Bitrix24)...");
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com.br/b33635459/crm/site_button/loader_2_pdpf96.js');
}

/* Fim da área do Widget */
/* --- Gestão de Cookies LGPD Pro --- */
function aceitarCookies(tipo) {
    localStorage.setItem('cookiesAceitos', tipo);
    const banner = document.getElementById('cookie-banner');
    if (banner) banner.classList.add('d-none');

    // INDEPENDENTE do tipo, o widget de atendimento agora carrega aqui
    carregarWidgetBitrix();

    if (tipo === 'todos') {
        ativarRastreadores();
    }
}

function ativarRastreadores() {
    console.log("Kairós OS: Ativando Inteligência de Marketing...");
    
    // 1. BLOCO GOOGLE ANALYTICS (Mantido Intacto)
    const gaId = 'G-5LTYSX7TJG'; // Substituir pelo ID real da Kairós
    // Injeção dinâmica do Script do Google
    const scriptGA = document.createElement('script');
    scriptGA.async = true;
    scriptGA.src = `https://www.googletagmanager.com/gtag/js?id=${gaId}`;
    document.head.appendChild(scriptGA);
    // Inicialização da camada de dados (Data Layer)
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', gaId);
    console.log("Kairós OS: Sensor GOOGLE ANALYTICS Ativado."); 

    // 2. MICROSOFT CLARITY (ID: vdr742q747)
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "vdr742q747");
    console.log("Kairós OS: Sensor MICROSOFT CLARITY Ativado.");    

    // Aqui o Fabio pode adicionar o Pixel do Facebook, LinkedIn Tag, etc.
    // 2. BLOCO FACEBOOK PIXEL (Ponto de Atualização)
    /* --- Injeção do Facebook Pixel (Kairós OS) --- */
    const fbId = '2910745435924185'; // ID no Gerenciador de Negócios

    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', fbId);
    fbq('track', 'PageView');
    console.log("Kairós OS: Sensor FACEBOOK PIXEL Ativado.");    
    }

// 3. INICIALIZAÇÃO INTELIGENTE (Ao carregar a página)
document.addEventListener("DOMContentLoaded", function() {
    const consentimento = localStorage.getItem('cookiesAceitos');
    const banner = document.getElementById('cookie-banner');
    
    if (!consentimento) {
        // Se é a primeira vez, mostra o banner e MANTÉM o widget oculto
        if (banner) banner.classList.remove('d-none');
    } else {
        // Se já existe consentimento, carrega o widget direto
        carregarWidgetBitrix();
        
        // E se o consentimento foi 'todos', ativa o marketing também
        if (consentimento === 'todos') {
            ativarRastreadores();
        }
    }
});