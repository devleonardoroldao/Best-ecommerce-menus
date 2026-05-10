<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliExpress SaaS Global 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --ali-orange: #ff4e00;
            --ali-dark-header: #1a1a1a;
            --ali-gray: #f2f2f2;
        }

        body { 
            background-color: var(--ali-gray); 
            font-family: 'Inter', sans-serif;
            padding-top: 145px;
        }

        /* HEADER DARK PREMIUM */
        .ali-header {
            background: var(--ali-dark-header);
            position: fixed; top: 0; width: 100%; 
            z-index: 1040; padding: 12px 0 0 0;
            color: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .ali-container { max-width: 1080px; margin: 0 auto; padding: 0 20px; }

        .header-top {
            display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;
        }

        .ali-logo { 
            font-size: 26px; font-weight: 800; color: white; 
            text-decoration: none; letter-spacing: -1px;
        }

        /* BUSCA E AÇÕES */
        .search-row {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center; gap: 30px; margin-bottom: 15px;
        }

        .search-bar-wrap {
            display: flex; background: white; 
            border-radius: 50px; overflow: hidden; height: 43px; align-items: center;
        }
        .search-bar-wrap i.bi-search { color: var(--ali-orange); padding-left: 18px; font-size: 18px; }
        .search-bar-wrap input {
            border: none; outline: none; padding: 0 15px; width: 100%;
            font-size: 14px; color: #333;
        }
        .btn-ok {
            background: var(--ali-orange); color: white; border: none;
            font-weight: 800; padding: 0 25px; height: 100%; transition: 0.3s;
        }

        .desktop-actions { display: flex; gap: 15px; align-items: center; }
        .action-btn-dk {
            background: transparent; border: none; color: #ccc;
            display: flex; flex-direction: column; align-items: center;
            font-size: 10px; font-weight: 500; min-width: 55px; transition: 0.2s;
        }
        .action-btn-dk i { font-size: 20px; color: white; margin-bottom: 2px; }
        .action-btn-dk:hover { color: var(--ali-orange); }

        /* MENU INFERIOR */
        .nav-bar-bottom { background: #262626; border-top: 1px solid #333; }
        .category-dropdown-btn {
            background: #333; color: white; padding: 12px 25px;
            font-weight: 600; font-size: 13px; display: inline-flex; align-items: center;
            gap: 10px; cursor: pointer; border-bottom: 3px solid var(--ali-orange);
        }

        /* BOTTOM NAV MOBILE - Z-INDEX REDUZIDO PARA FICAR ATRÁS DO MODAL */
        .bottom-nav {
            position: fixed; bottom: 20px; left: 20px; right: 20px;
            background: rgba(30, 30, 30, 0.98); backdrop-filter: blur(15px);
            border-radius: 25px; display: none; justify-content: space-around;
            padding: 12px; z-index: 1030; border: 1px solid rgba(255,255,255,0.05);
        }
        .nav-tab { color: #888; text-decoration: none; display: flex; flex-direction: column; align-items: center; font-size: 10px; border: none; background: none; }
        .nav-tab.active { color: var(--ali-orange); }
        .nav-tab i { font-size: 18px; margin-bottom: 3px; }

        /* MODAIS - Z-INDEX ELEVADO */
        .offcanvas { z-index: 1060 !important; }
        .offcanvas-backdrop { z-index: 1050 !important; }

        /* ESTILO SUBMENU */
        .menu-link-main { display: flex; justify-content: space-between; align-items: center; padding: 12px 15px; color: #333; text-decoration: none; font-weight: 600; border-bottom: 1px solid #eee; }
        .submenu-item { padding: 10px 40px; display: block; color: #666; text-decoration: none; font-size: 14px; background: #f9f9f9; }
        .submenu-item:hover { color: var(--ali-orange); }

        @media (max-width: 991px) {
            body { padding-top: 135px; }
            .desktop-actions, .nav-bar-bottom, .header-top .top-aux-links { display: none; }
            .bottom-nav { display: flex; }
            .header-top { margin-bottom: 10px; }
            .mobile-top-icons { display: flex; gap: 15px; }
            .mobile-top-icons i { font-size: 20px; color: white; }
            .search-row { grid-template-columns: 1fr; gap: 0; }
            .search-bar-wrap { height: 45px; }
        }

        .badge-ali {
            position: absolute; top: -2px; right: -5px;
            background: var(--ali-orange); font-size: 9px;
            padding: 2px 5px; border-radius: 50px; border: 2px solid var(--ali-dark-header);
        }
    </style>
</head>
<body>

<header class="ali-header">
    <div class="ali-container">
        <div class="header-top">
            <a href="#" class="ali-logo">AliExpress<span style="font-weight:300">.SaaS</span></a>
            
            <div class="mobile-top-icons d-lg-none">
                <i class="bi bi-heart"></i>
                <div class="position-relative">
                    <i class="bi bi-bell"></i>
                    <span class="badge-ali">3</span>
                </div>
            </div>

            <div class="top-aux-links d-none d-lg-flex">
                <a href="#" class="aux-link text-white-50 text-decoration-none small me-4"><i class="bi bi-gift me-1"></i> Lista de Presentes</a>
                <a href="#" class="aux-link text-white-50 text-decoration-none small"><i class="bi bi-headset me-1"></i> Atendimento</a>
            </div>
        </div>

        <div class="search-row">
            <div class="search-bar-wrap">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="O que você está procurando hoje?">
                <button class="btn-ok"><i class="bi bi-chevron-right fs-4"></i></button>
            </div>

            <div class="desktop-actions">
                <button class="action-btn-dk"><i class="bi bi-lightning-charge"></i>Ofertas</button>
                <button class="action-btn-dk" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person"></i>Minha Conta</button>
                <button class="action-btn-dk"><i class="bi bi-heart"></i>Favoritos</button>
                <button class="action-btn-dk"><i class="bi bi-box-seam"></i>Pedidos</button>
                <button class="action-btn-dk position-relative" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-cart3"></i>Carrinho
                    <span class="badge-ali">2</span>
                </button>
            </div>
        </div>
    </div>

    <div class="nav-bar-bottom d-none d-lg-block" >
        <div class="ali-container">
            <div class="category-dropdown-btn" data-bs-toggle="offcanvas" data-bs-target="#modalMenu">
                <i class="bi bi-list"></i> COMPRE POR TODA LOJA
            </div>
            <span class="ms-4 small text-white-50">Marketplace</span>
            <span class="ms-4 small text-white-50">Anunciadas na TV</span>
            <span class="ms-4 small text-white-50">Cupons</span>
        </div>
    </div>
</header>

<nav class="bottom-nav" >
    <button class="nav-tab active"><i class="bi bi-house-door"></i>Home</button>
    <button class="nav-tab" data-bs-toggle="offcanvas" data-bs-target="#modalMenu"><i class="bi bi-grid"></i>Categorias</button>
    <button class="nav-tab position-relative" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
        <i class="bi bi-cart3"></i>Carrinho
        <span class="badge-ali">2</span>
    </button>
    <button class="nav-tab"><i class="bi bi-lightning-charge"></i>Ofertas</button>
    <button class="nav-tab" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person"></i>Conta</button>
</nav>

<div class="offcanvas offcanvas-start" id="modalMenu" style="width: 320px;">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-bold m-0">Departamentos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <a href="#subSmartphones" class="menu-link-main" data-bs-toggle="collapse">
            <span><i class="bi bi-phone me-2"></i> Smartphones</span>
            <i class="bi bi-chevron-down small"></i>
        </a>
        <div class="collapse" id="subSmartphones">
            <a href="#" class="submenu-item">iPhone</a>
            <a href="#" class="submenu-item">Samsung Galaxy</a>
            <a href="#" class="submenu-item">Xiaomi</a>
        </div>

        <a href="#" class="menu-link-main"><span><i class="bi bi-tv me-2"></i> TV e Vídeo</span></a>
        <a href="#" class="menu-link-main"><span><i class="bi bi-laptop me-2"></i> Informática</span></a>
        <a href="#" class="menu-link-main"><span><i class="bi bi-controller me-2"></i> Games</span></a>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalCarrinho" style="width: 350px;">
    <div class="offcanvas-header border-bottom text-white" style="background: var(--ali-dark-header);">
        <h5 class="fw-bold m-0">Meu Carrinho (2)</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex gap-3 mb-3 p-2 bg-light rounded shadow-sm">
            <div style="width:70px; height:70px; background:#ccc; border-radius:8px"></div>
            <div>
                <p class="m-0 small fw-bold">Smartwatch SaaS Ultra 2026</p>
                <p class="m-0 text-danger fw-bold">R$ 299,90</p>
            </div>
        </div>
        <button class="btn btn-warning w-100 py-3 fw-bold mt-4" style="background: var(--ali-orange); border:none; color:white">FINALIZAR COMPRA</button>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalUser" style="width: 320px;">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-bold m-0">Sua Conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-4 text-center">
        <i class="bi bi-person-circle display-1 text-light mb-4"></i>
        <button class="btn btn-warning w-100 fw-bold py-3 mb-3" style="background: var(--ali-orange); color: white; border: none;">FAZER LOGIN</button>
        <p class="small text-muted">Ainda não tem conta? <a href="#" class="text-danger">Cadastre-se</a></p>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>