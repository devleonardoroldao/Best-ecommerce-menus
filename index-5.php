<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renner SaaS Exclusive 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');

        :root {
            --renner-red: #e20613;
            --renner-black: #000000;
            --renner-gray: #f8f8f8;
            --renner-text: #212529;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body { 
            background-color: #ffffff; 
            font-family: 'Montserrat', sans-serif;
            color: var(--renner-text);
            padding-top: 160px;
        }

        /* HEADER EDITORIAL */
        .renner-header {
            background: #ffffff;
            position: fixed; top: 0; width: 100%; z-index: 1200;
            padding: 0;
            border-bottom: 1px solid #eee;
        }

        .renner-top-bar {
            background: var(--renner-black);
            color: white; font-size: 11px; text-transform: uppercase;
            letter-spacing: 1px; text-align: center; padding: 8px 0;
        }

        .renner-container { max-width: 1400px; margin: 0 auto; padding: 0 25px; }

        .header-main {
            display: flex; align-items: center; justify-content: space-between;
            height: 80px; transition: var(--transition);
        }

        /* LOGO RENNER ESTILO 2026 */
        .renner-logo { 
            font-family: 'Playfair Display', serif;
            font-size: 32px; font-weight: 700; color: var(--renner-black);
            text-decoration: none; letter-spacing: -1px;
        }
        .renner-logo span { color: var(--renner-red); }

        /* BUSCA MINIMALISTA */
        .search-renner {
            flex: 1; max-width: 500px; position: relative;
        }
        .search-renner input {
            width: 100%; border: none; border-bottom: 1px solid #ccc;
            padding: 10px 40px 10px 0; font-size: 14px; outline: none;
            transition: var(--transition); font-weight: 300;
        }
        .search-renner input:focus { border-bottom-color: var(--renner-black); }
        .btn-renner-search {
            position: absolute; right: 0; top: 50%; transform: translateY(-50%);
            background: none; border: none; font-size: 18px;
        }

        /* ACTIONS & CART BADGE */
        .renner-actions { display: flex; align-items: center; gap: 30px; }
        .renner-action-item {
            color: var(--renner-black); text-decoration: none;
            font-size: 13px; font-weight: 500; display: flex; align-items: center; gap: 8px;
            cursor: pointer;
        }
        .renner-action-item i { font-size: 22px; }

        .cart-wrapper {
            position: relative;
            display: inline-block;
        }

        .renner-cart-badge {
            position: absolute;
            top: -5px; right: -8px;
            background-color: var(--renner-red);
            color: white; font-size: 10px; font-weight: 700;
            width: 18px; height: 18px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            border: 2px solid #fff;
        }

        /* NAV SUB */
        .renner-nav-bottom {
            display: flex; justify-content: center; gap: 40px; padding-bottom: 15px;
        }
        .renner-nav-bottom a {
            text-decoration: none; color: var(--renner-black);
            font-size: 13px; font-weight: 600; text-transform: uppercase;
            letter-spacing: 0.5px; position: relative;
        }
        .renner-nav-bottom a::after {
            content: ''; position: absolute; bottom: -5px; left: 0; width: 0;
            height: 2px; background: var(--renner-red); transition: 0.3s;
        }
        .renner-nav-bottom a:hover::after { width: 100%; }

        /* MODAIS SOBREPONDO TUDO */
        .offcanvas { z-index: 2500 !important; border: none !important; }
        .offcanvas-backdrop { z-index: 2499 !important; }
        .offcanvas-header { padding: 30px; border-bottom: 1px solid #eee; }
        
        .sub-link-item { 
            padding-left: 3rem !important; font-size: 0.85rem; 
            text-transform: uppercase; letter-spacing: 0.5px; color: #777 !important;
        }

        @media (max-width: 991px) {
            body { padding-top: 190px; }
            .renner-nav-bottom, .renner-action-item span { display: none; }
            
            .header-main { 
                flex-wrap: wrap; 
                height: auto; 
                padding: 15px 0; 
                justify-content: space-between;
            }
            
            .renner-logo { order: 1; font-size: 26px; flex: 0 1 auto; }
            .renner-actions { order: 2; gap: 20px; flex: 0 1 auto; }
            
            .search-renner { 
                order: 3; 
                width: 100%; 
                max-width: 100%; 
                margin-top: 15px; 
                flex: 0 0 100%; 
            }
            
            .search-renner input { 
                border: 1px solid #eee; 
                padding: 10px 15px; 
                border-radius: 4px; 
                background: #fdfdfd;
            }
            .btn-renner-search { right: 10px; }

            .renner-cart-badge {
                top: -2px; right: -5px;
                width: 16px; height: 16px; font-size: 9px;
            }
        }
    </style>
</head>
<body>

<header class="renner-header">
    <div class="renner-top-bar">Frete Grátis em compras acima de R$ 199</div>
    <div class="renner-container">
        <div class="header-main">
            <a href="#" class="renner-logo">RENNER<span>.</span></a>
            
            <div class="search-renner">
                <input type="text" placeholder="O que você está procurando?">
                <button class="btn-renner-search"><i class="bi bi-search"></i></button>
            </div>

            <div class="renner-actions">
                <div class="renner-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalUser">
                    <i class="bi bi-person"></i><span>Entrar</span>
                </div>
                <div class="renner-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <div class="cart-wrapper">
                        <i class="bi bi-bag"></i>
                        <span class="renner-cart-badge">0</span>
                    </div>
                    <span>Sacola</span>
                </div>
            </div>
        </div>

        <nav class="renner-nav-bottom">
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#modalMenu">Feminino</a>
            <a href="#">Masculino</a>
            <a href="#">Infantil</a>
            <a href="#">Beleza</a>
            <a href="#" class="text-danger">Ofertas</a>
        </nav>
    </div>
</header>

<div class="offcanvas offcanvas-start" id="modalMenu">
    <div class="offcanvas-header">
        <h5 class="fw-bold m-0 uppercase" style="letter-spacing: 2px;">Categorias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group list-group-flush">
            <a href="#sub-fem" class="list-group-item py-4 px-4 d-flex justify-content-between align-items-center border-0" data-bs-toggle="collapse">
                <span class="fw-bold">FEMININO</span>
                <i class="bi bi-plus-lg"></i>
            </a>
            <div class="collapse" id="sub-fem">
                <a href="#" class="list-group-item sub-link-item border-0">Blusas e Camisetas</a>
                <a href="#" class="list-group-item sub-link-item border-0">Calças e Jeans</a>
                <a href="#" class="list-group-item sub-link-item border-0">Vestidos</a>
            </div>
            <a href="#" class="list-group-item py-4 px-4 fw-bold border-0">MASCULINO</a>
            <a href="#" class="list-group-item py-4 px-4 fw-bold border-0">CALÇADOS</a>
            <a href="#" class="list-group-item py-4 px-4 fw-bold border-0">ACESSÓRIOS</a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalCarrinho">
    <div class="offcanvas-header">
        <h5 class="fw-bold m-0">Minha Sacola</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body text-center pt-5">
        <p class="text-muted mb-4">Sua sacola ainda está vazia.</p>
        <button class="btn btn-dark w-100 py-3 rounded-0 fw-bold shadow-sm">ESCOLHER PRODUTOS</button>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalUser">
    <div class="offcanvas-header">
        <h5 class="fw-bold m-0">Olá!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <p class="small text-muted mb-4">Acesse sua conta para ver seus pedidos e favoritos.</p>
        <button class="btn btn-dark w-100 py-3 rounded-0 fw-bold mb-3">ENTRAR</button>
        <button class="btn btn-outline-dark w-100 py-3 rounded-0 fw-bold">CRIAR CONTA</button>
    </div>
</div>

<nav class="d-lg-none fixed-bottom bg-white border-top d-flex justify-content-around py-3 shadow-lg" style="z-index: 1050;">
    <a href="#" class="text-dark"><i class="bi bi-house fs-4"></i></a>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalMenu"><i class="bi bi-list fs-4"></i></button>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
        <div class="cart-wrapper">
            <i class="bi bi-bag fs-4"></i>
            <span class="renner-cart-badge">0</span>
        </div>
    </button>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person fs-4"></i></button>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>