<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Livre SaaS High-End 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Proxima+Nova:wght@300;400;600;700&display=swap');

        :root {
            --ml-yellow: #fff159;
            --ml-blue: #3483fa;
            --ml-dark: #333333;
            --ml-text-light: #666666;
            --ml-bg: #ebebeb;
        }

        body { 
            margin: 0; padding-top: 100px; background: var(--ml-bg); 
            font-family: 'Proxima Nova', -apple-system, sans-serif; 
            padding-bottom: 70px;
        }

        /* HEADER ESTRUTURA ML */
        .ml-header {
            position: fixed; top: 0; width: 100%; z-index: 1040;
            background: var(--ml-yellow); padding-top: 8px;
            box-shadow: 0 1px 0 0 rgba(0,0,0,0.1);
        }

        .ml-container { max-width: 1200px; margin: 0 auto; width: 100%; padding: 0 15px; }

        .ml-top-row {
            display: flex; align-items: center; gap: 40px; padding-bottom: 12px;
        }

        .ml-logo img { height: 34px; }

        /* ÍCONES MOBILE NO TOPO */
        .ml-mobile-top-actions { display: none; gap: 15px; font-size: 22px; color: var(--ml-dark); }

        .ml-search-wrapper {
            flex-grow: 1; position: relative;
        }
        .ml-search-container {
            background: white; border-radius: 2px; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);
            display: flex; align-items: center; height: 40px; padding: 0 15px;
        }
        .ml-search-container input {
            border: none; outline: none; flex: 1; font-size: 16px; color: var(--ml-dark);
        }
        .ml-search-container input::placeholder { color: #bbb; font-weight: 300; }
        .ml-search-divider { width: 1px; height: 20px; background: #ddd; margin: 0 10px; }
        .ml-btn-search { background: none; border: none; color: var(--ml-text-light); font-size: 18px; }

        .ml-top-ad { height: 38px; display: flex; align-items: center; }

        .ml-bottom-row {
            display: flex; align-items: center; justify-content: space-between; padding-bottom: 8px;
        }

        .ml-location {
            display: flex; align-items: center; gap: 4px; font-size: 13px; color: var(--ml-dark);
            max-width: 150px; cursor: pointer;
        }
        .ml-location i { font-size: 20px; opacity: 0.7; }
        .ml-location span { line-height: 1.1; }

        .ml-nav-links { display: flex; gap: 20px; flex: 1; padding-left: 30px; }
        .ml-nav-links a { 
            color: rgba(51,51,51,0.6); text-decoration: none; font-size: 14px; 
            transition: 0.2s;
        }
        .ml-nav-links a:hover { color: var(--ml-dark); }

        /* --- AJUSTE SUBMENU DESKTOP --- */
        .nav-item-categorias { position: relative; }
        .submenu-desktop {
            display: none; position: absolute; top: 100%; left: 0;
            background: #333; width: 240px; border-radius: 4px;
            padding: 10px 0; box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            z-index: 2000;
        }
        .nav-item-categorias:hover .submenu-desktop { display: block; }
        .submenu-desktop a {
            color: #fff !important; padding: 10px 20px; display: block;
            font-size: 14px; transition: 0.2s;
        }
        .submenu-desktop a:hover { background: var(--ml-blue); }

        .ml-user-actions { display: flex; align-items: center; gap: 20px; }
        .ml-user-item { 
            color: var(--ml-dark); text-decoration: none; font-size: 14px; 
            display: flex; align-items: center; gap: 5px; cursor: pointer;
        }
        .ml-user-item i { font-size: 18px; }

        .ml-badge {
            font-size: 10px; background: none; color: var(--ml-dark);
            position: absolute; top: -5px; right: -8px; font-weight: 600;
        }

        /* MOBILE BOTTOM BAR */
        .ml-mobile-nav {
            position: fixed; bottom: 0; left: 0; width: 100%;
            background: white; display: none; justify-content: space-around;
            padding: 8px 0; border-top: 1px solid #ddd; z-index: 1050;
        }
        .ml-mobile-item { 
            border: none; background: none; color: #666; 
            display: flex; flex-direction: column; align-items: center; font-size: 10px;
        }
        .ml-mobile-item i { font-size: 22px; margin-bottom: 2px; }
        .ml-mobile-item.active { color: var(--ml-blue); }

        /* MODAL CARRINHO STYLE */
        .offcanvas-ml { width: 400px !important; border: none !important; background: var(--ml-bg) !important; }
        .ml-cesta-header {
            background: white !important; border-bottom: 1px solid #ddd;
            padding: 20px !important; color: var(--ml-dark) !important;
        }
        .ml-cesta-body { display: flex; flex-direction: column; align-items: center; padding-top: 60px; }
        .ml-cesta-icon { width: 80px; height: 80px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .ml-cesta-icon i { font-size: 40px; color: #ccc; }
        .ml-cesta-title { font-size: 20px; font-weight: 600; color: #333; margin-bottom: 8px; }
        .ml-cesta-text { font-size: 14px; color: #999; text-align: center; padding: 0 40px; }
        .ml-btn-blue { background: var(--ml-blue); color: white; border: none; border-radius: 6px; padding: 12px 30px; font-weight: 600; margin-top: 25px; width: 80%; }

        /* AJUSTE PARA SUB-LINKS NO MENU LATERAL MOBILE */
        .sub-link-item { padding-left: 3rem !important; background-color: #f8f9fa; font-size: 0.9rem; }

        @media (max-width: 991px) {
            body { padding-top: 108px; }
            .ml-header { padding-bottom: 10px; }
            .ml-bottom-row, .ml-top-ad { display: none; }
            .ml-top-row { flex-direction: row; flex-wrap: wrap; justify-content: space-between; gap: 8px; padding-bottom: 5px; }
            .ml-logo { order: 1; }
            .ml-mobile-top-actions { display: flex; order: 2; align-items: center; }
            .ml-search-wrapper { width: 100%; order: 3; }
            .ml-logo img { height: 28px; }
            .ml-search-container { height: 36px; box-shadow: none; border: 1px solid rgba(0,0,0,0.1); }
            .ml-mobile-nav { display: flex; }
        }
    </style>
</head>
<body>

<header class="ml-header">
    <div class="ml-container">
        <div class="ml-top-row">
            <div class="ml-logo">
                <img src="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/6.6.73/mercadolibre/logo__large_plus@2x.png" alt="Mercado Livre">
            </div>

            <div class="ml-mobile-top-actions">
                <i class="bi bi-shop"></i>
                <i class="bi bi-person"></i>
            </div>

            <div class="ml-search-wrapper">
                <div class="ml-search-container">
                    <input type="text" placeholder="Buscar produtos, marcas e muito mais…">
                    <div class="ml-search-divider"></div>
                    <button class="ml-btn-search"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="ml-top-ad">
                <img src="https://http2.mlstatic.com/storage/mshops-appearance-api/images/15/225330315/logo-20210331165516.png" style="height: 25px; filter: grayscale(1); opacity: 0.6;">
            </div>
        </div>

        <div class="ml-bottom-row">
            <div class="ml-location">
                <i class="bi bi-geo-alt"></i>
                <span>Enviar para<br><b>São Paulo 01001</b></span>
            </div>

            <nav class="ml-nav-links">
                <div class="nav-item-categorias">
                    <a href="#">Categorias <i class="bi bi-chevron-down ms-1"></i></a>
                    <div class="submenu-desktop">
                        <a href="#">Tecnologia</a>
                        <a href="#">Casa e Móveis</a>
                        <a href="#">Eletrodomésticos</a>
                        <a href="#">Esportes</a>
                        <a href="#">Moda</a>
                    </div>
                </div>
                <a href="#">Ofertas</a>
                <a href="#">Histórico</a>
                <a href="#">Supermercado</a>
                <a href="#">Moda</a>
                <a href="#">Vender</a>
                <a href="#">Contato</a>
            </nav>

            <div class="ml-user-actions">
                <div class="ml-user-item">Crie a sua conta</div>
                <div class="ml-user-item">Entre</div>
                <div class="ml-user-item">Compras</div>
                <div class="ml-user-item" style="position: relative;" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-cart2"></i>
                    <span class="ml-badge">0</span>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="ml-mobile-nav">
    <button class="ml-mobile-item active"><i class="bi bi-house-door"></i>Início</button>
    <button class="ml-mobile-item" data-bs-toggle="offcanvas" data-bs-target="#modalDept"><i class="bi bi-list"></i>Categorias</button>
    <button class="ml-mobile-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho"><i class="bi bi-cart2"></i>Carrinho</button>
    <button class="ml-mobile-item"><i class="bi bi-heart"></i>Favoritos</button>
    <button class="ml-mobile-item"><i class="bi bi-person-circle"></i>Login</button>
</nav>

<div class="offcanvas offcanvas-end offcanvas-ml" id="modalCarrinho">
    <div class="offcanvas-header ml-cesta-header">
        <h5 class="m-0 fw-bold">Carrinho</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body ml-cesta-body">
        <div class="ml-cesta-icon"><i class="bi bi-cart-x"></i></div>
        <h2 class="ml-cesta-title">Seu carrinho está vazio</h2>
        <p class="ml-cesta-text">Temos milhões de produtos esperando por você!</p>
        <button class="btn ml-btn-blue">Descobrir ofertas</button>
    </div>
</div>

<div class="offcanvas offcanvas-start" id="modalDept">
    <div class="offcanvas-header bg-dark text-white">
        <h5 class="m-0">Menu e Categorias</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item py-3 px-4"><b>Minha Conta</b></a>
            <a href="#" class="list-group-item py-3 px-4"><b>Minhas Compras</b></a>
            <hr class="m-0">
            <a href="#sub-tec" class="list-group-item py-3 px-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse">
                Tecnologia <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="sub-tec">
                <a href="#" class="list-group-item sub-link-item py-2">Smartphones</a>
                <a href="#" class="list-group-item sub-link-item py-2">Informática</a>
            </div>
            <a href="#sub-casa" class="list-group-item py-3 px-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse">
                Casa e Móveis <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="sub-casa">
                <a href="#" class="list-group-item sub-link-item py-2">Móveis</a>
                <a href="#" class="list-group-item sub-link-item py-2">Decoração</a>
            </div>
            <a href="#" class="list-group-item py-3 px-4">Eletrodomésticos</a>
            <a href="#" class="list-group-item py-3 px-4">Esportes</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>