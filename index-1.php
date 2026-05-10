<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto SaaS High-End 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --p-orange: #ff6a00;
            --p-dark: #121212;
            --p-surface: #1e1e1e;
            --p-white: #ffffff;
            --glass: rgba(255, 255, 255, 0.95);
        }

        body { 
            margin: 0; padding-top: 160px; background: #f8f9fa; 
            font-family: 'Inter', sans-serif; color: var(--p-dark); 
            padding-bottom: 85px; 
        }

        /* HEADER PREMIUM */
        .ponto-header {
            position: fixed; top: 0; width: 100%; z-index: 1040;
            background: var(--p-dark); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .ponto-container { max-width: 1200px; margin: 0 auto; width: 100%; padding: 0 20px; }

        .ponto-middle-bar {
            display: flex; align-items: center; justify-content: space-between;
            padding: 16px 0; gap: 30px;
        }

        .ponto-logo img { height: 38px; filter: brightness(1.1); transition: 0.3s; }

        /* BUSCA HIGH-END */
        .ponto-search-wrapper {
            flex-grow: 1; max-width: 640px; position: relative;
            transition: all 0.4s ease;
        }
        .ponto-search-container {
            background: var(--p-white); border-radius: 12px;
            display: flex; align-items: center; height: 48px;
            padding: 0 4px 0 16px; border: 1px solid transparent;
            transition: 0.3s;
        }
        .ponto-search-container:focus-within {
            box-shadow: 0 0 0 4px rgba(255, 106, 0, 0.15);
            border-color: var(--p-orange);
        }
        .ponto-search-container input {
            border: none; outline: none; flex: 1; font-size: 15px; font-weight: 500;
        }
        .ponto-btn-ok {
            background: var(--p-orange); color: var(--p-white); border: none;
            border-radius: 8px; height: 40px; padding: 0 20px;
            font-weight: 600; transition: 0.2s;
        }
        .ponto-btn-ok:hover { background: #e55f00; transform: scale(1.02); }

        /* AÇÕES DESKTOP */
        .ponto-actions { display: flex; align-items: center; gap: 24px; }
        .ponto-action-item { 
            display: flex; align-items: center; gap: 12px; 
            color: var(--p-white); text-decoration: none; cursor: pointer;
            opacity: 0.9; transition: 0.2s;
        }
        .ponto-action-item:hover { opacity: 1; color: var(--p-orange); }
        .ponto-action-item i { font-size: 26px; }
        .ponto-action-text { font-size: 12px; line-height: 1.3; }
        .ponto-action-text b { font-size: 14px; display: block; font-weight: 600; }

        /* MENU INFERIOR ALINHADO */
        .ponto-bottom-nav { 
            background: var(--p-dark); border-top: 1px solid rgba(255,255,255,0.08); 
            border-bottom: 4px solid var(--p-orange);
        }
        .ponto-nav-content { display: flex; align-items: center; height: 50px; }
        .ponto-btn-all { 
            color: var(--p-white); font-weight: 600; font-size: 14px; 
            display: flex; align-items: center; gap: 8px; cursor: pointer;
            padding-right: 20px; border-right: 1px solid rgba(255,255,255,0.1);
        }
        .ponto-links-wrap { display: flex; gap: 25px; padding-left: 25px; }
        .ponto-links-wrap a { 
            color: rgba(255,255,255,0.7); text-decoration: none; 
            font-size: 14px; font-weight: 500; transition: 0.2s;
        }
        .ponto-links-wrap a:hover { color: var(--p-white); }

        /* BOTTOM BAR MOBILE (MODERN TOUCH) */
        .ponto-mobile-nav {
            position: fixed; bottom: 0; left: 0; width: 100%;
            background: var(--glass); backdrop-filter: blur(15px);
            display: none; justify-content: space-around; padding: 12px 0;
            z-index: 1050; border-top: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px 20px 0 0; box-shadow: 0 -5px 20px rgba(0,0,0,0.05);
        }
        .mobile-nav-item { 
            display: flex; flex-direction: column; align-items: center; 
            background: none; border: none; color: #777; font-size: 11px; font-weight: 600;
        }
        .mobile-nav-item i { font-size: 24px; color: var(--p-dark); transition: 0.2s; }
        .mobile-nav-item:active i { transform: scale(0.8); color: var(--p-orange); }

        /* OVERLAYS GOOGLE STYLE (WHITE) */
        .offcanvas { border: none !important; box-shadow: -10px 0 30px rgba(0,0,0,0.1); }
        .offcanvas-header { padding: 24px; border-bottom: 1px solid #f0f0f0; }
        .offcanvas-title { font-weight: 700; color: var(--p-dark); }
        
        /* MODAL LISTA DE PRESENTES (CENTERED) */
        .modal-content { border-radius: 24px; border: none; padding: 10px; }
        .modal-header { border: none; padding: 20px 20px 0; }

        /* Estilo do Badge SaaS High-End */
.badge-ponto {
    position: absolute;
    top: -5px;
    right: -5px;
    background: var(--p-orange);
    color: white;
    font-size: 10px;
    font-weight: 700;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid var(--p-dark); /* Borda para destacar no fundo escuro */
    animation: pulseBadge 2s infinite;
}

/* No mobile, o badge precisa de um ajuste de posição e borda branca */
.mobile-nav-item .badge-ponto {
    top: 0px;
    right: 25%;
    border: 2px solid var(--p-white);
}

@keyframes pulseBadge {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Ajuste de posição para o container do ícone */
.ponto-action-item, .mobile-nav-item {
    position: relative;
}

        /* SHRINK DESKTOP */
        @media (min-width: 992px) {
            .shrink .ponto-middle-bar { padding: 8px 0; }
            .shrink .ponto-search-wrapper { max-width: 420px; }
            .shrink .ponto-action-text { display: none; }
        }

        /* MOBILE FIXES */
        @media (max-width: 991px) {
            body { padding-top: 135px; }
            .ponto-middle-bar { flex-direction: column; align-items: flex-start; padding: 12px 0; gap: 12px; }
            .ponto-search-wrapper { width: 100%; max-width: 100%; }
            .ponto-search-container { height: 48px !important; }
            .ponto-actions, .ponto-bottom-nav { display: none; }
            .ponto-mobile-nav { display: flex; }
        }
    </style>
</head>
<body>

<header class="ponto-header" id="headerPrincipal">
    <div class="ponto-container">
        <div class="ponto-middle-bar">
            <div class="ponto-logo">
                <img src="https://logodownload.org/wp-content/uploads/2021/04/ponto-logo.png" alt="Logo Ponto">
            </div>

            <div class="ponto-search-wrapper">
                <div class="ponto-search-container">
                    <i class="bi bi-search me-2 text-muted"></i>
                    <input type="text" placeholder="Pesquise por produtos, marcas...">
                    <button class="ponto-btn-ok">Buscar</button>
                </div>
            </div>

            <div class="ponto-actions">
                <div class="ponto-action-item" data-bs-toggle="modal" data-bs-target="#modalLista">
                    <i class="bi bi-gift"></i>
                    <span class="ponto-action-text">Crie sua<br><b>Lista de Presentes</b></span>
                </div>
                <div class="ponto-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalConta">
                    <i class="bi bi-person-circle"></i>
                    <span class="ponto-action-text">Bem-vindo<br><b>Minha Conta</b></span>
                </div>
                <div class="ponto-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
    <div style="position: relative;">
        <i class="bi bi-bag-heart"></i>
        <span class="badge-ponto">3</span> </div>
</div>
            </div>
        </div>
    </div>

    <nav class="ponto-bottom-nav">
        <div class="ponto-container ponto-nav-content">
            <div class="ponto-btn-all" data-bs-toggle="offcanvas" data-bs-target="#modalDepartamentos">
                <i class="bi bi-grid-3x3-gap-fill"></i> DEPARTAMENTOS
            </div>
            <div class="ponto-links-wrap">
                <a href="#">Ofertas</a>
                <a href="#">iPhone 15</a>
                <a href="#">Smart TVs</a>
                <a href="#">Cozinha</a>
                <a href="#">Gaming</a>
            </div>
        </div>
    </nav>
</header>

<nav class="ponto-mobile-nav">
    <button class="mobile-nav-item" data-bs-toggle="offcanvas" data-bs-target="#modalDepartamentos">
        <i class="bi bi-grid"></i>Menu
    </button>
    <button class="mobile-nav-item" data-bs-toggle="modal" data-bs-target="#modalLista">
        <i class="bi bi-gift"></i>Presentes
    </button>
    <button class="mobile-nav-item"><i class="bi bi-house-door-fill" style="color: var(--p-orange);"></i>Home</button>
    <button class="mobile-nav-item" data-bs-toggle="offcanvas" data-bs-target="#modalConta">
        <i class="bi bi-person"></i>Perfil
    </button>
   <button class="mobile-nav-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
    <div style="position: relative; width: 100%; display: flex; justify-content: center;">
        <i class="bi bi-cart3"></i>
        <span class="badge-ponto">3</span>
    </div>
    Carrinho
</button>
</nav>

<div class="modal fade" id="modalLista" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h5 class="fw-bold">Lista de Presentes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center p-4">
                <div class="mb-4"><i class="bi bi-box2-heart text-warning display-4"></i></div>
                <p class="text-muted">Torne seus momentos especiais inesquecíveis.</p>
                <button class="btn btn-dark w-100 py-3 rounded-4 fw-bold mb-2">CRIAR NOVA LISTA</button>
                <button class="btn btn-outline-secondary w-100 py-3 rounded-4 fw-bold">PROCURAR LISTA</button>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="modalDepartamentos">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Departamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="accordion accordion-flush" id="accMenu">
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-600" data-bs-toggle="collapse" data-bs-target="#sub1">Eletrodomésticos</button>
                </h2>
                <div id="sub1" class="accordion-collapse collapse" data-bs-parent="#accMenu">
                    <div class="list-group list-group-flush ps-4">
                        <a href="#" class="list-group-item border-0 py-3 text-muted">Geladeiras</a>
                        <a href="#" class="list-group-item border-0 py-3 text-muted">Lava e Seca</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="modalCarrinho">
    <div class="offcanvas-header"><h5 class="offcanvas-title">Meu Carrinho</h5><button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button></div>
    <div class="offcanvas-body">
        <div class="text-center mt-5">
            <i class="bi bi-cart-x display-1 text-light"></i>
            <p class="mt-4 fw-bold">Nenhum produto por aqui.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.onscroll = function() {
        const header = document.getElementById("headerPrincipal");
        if (window.scrollY > 50) header.classList.add("shrink");
        else header.classList.remove("shrink");
    };
</script>
</body>
</html>