<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natura SaaS - Identical 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

        :root {
            --natura-orange: #f48024;
            --natura-top-gray: #414141;
            --natura-text: #333333;
            --natura-light-gray: #f2f2f2;
        }

        body { 
            background-color: #ffffff; 
            font-family: 'Roboto', sans-serif;
            color: var(--natura-text);
            padding-top: 155px;
        }

        /* CORREÇÃO MODAL: Header com z-index menor que os modais (1050+) */
        .natura-header {
            position: fixed; top: 0; width: 100%; z-index: 1000;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .natura-top-bar {
            background: var(--natura-top-gray);
            color: #fff; padding: 8px 0; font-size: 13px;
        }
        .natura-top-bar a { color: #fff; text-decoration: none; margin-right: 20px; font-weight: 300; }
        .natura-container { max-width: 1280px; margin: 0 auto; padding: 0 15px; }

        .header-main { display: flex; align-items: center; justify-content: space-between; padding: 20px 0; }
        .natura-logo img { height: 45px; }

        .search-container { flex: 1; max-width: 600px; margin: 0 40px; position: relative; }
        .search-box {
            width: 100%; background: var(--natura-light-gray); border: none;
            border-radius: 50px; padding: 12px 60px 12px 25px; font-size: 15px; color: #666; outline: none;
        }
        .btn-search-orange {
            position: absolute; right: 5px; top: 50%; transform: translateY(-50%);
            background: var(--natura-orange); border: none; width: 50px; height: 38px;
            border-radius: 25px; color: white; display: flex; align-items: center; justify-content: center;
        }

        /* ACTIONS */
        .header-actions { display: flex; align-items: center; gap: 25px; }
        .action-item { text-decoration: none; color: var(--natura-text); font-size: 14px; display: flex; align-items: center; gap: 8px; position: relative; cursor: pointer; }
        .action-item i { font-size: 22px; font-weight: 300; }
        
        /* Badges */
        .cart-badge {
            position: absolute; top: -5px; right: -8px; background: var(--natura-orange);
            color: white; font-size: 10px; font-weight: bold; width: 16px; height: 16px;
            border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid white;
        }

        .login-alert { position: relative; }
        .login-alert::after {
            content: '!'; position: absolute; top: -2px; right: -2px; background: var(--natura-orange);
            color: white; font-size: 9px; font-weight: bold; width: 14px; height: 14px;
            border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid white;
        }

        /* NAV SUB & DROPBOWN */
        .natura-nav-sub { border-top: 1px solid #f2f2f2; padding: 12px 0; display: flex; justify-content: space-between; }
        .natura-nav-sub .nav-group { position: relative; }
        .natura-nav-sub a { text-decoration: none; color: var(--natura-text); font-size: 13px; font-weight: 700; text-transform: lowercase; }
        
        .dropdown-content {
            display: none; position: absolute; background-color: white; min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.1); z-index: 10; border-radius: 4px; top: 100%;
        }
        .dropdown-content a { padding: 10px 15px; display: block; font-weight: 400; border-bottom: 1px solid #eee; }
        .nav-group:hover .dropdown-content { display: block; }

        /* BOTTOM NAV MOBILE */
        .bottom-nav {
            position: fixed; bottom: 0; width: 100%; background: #fff;
            display: flex; justify-content: space-around; padding: 12px 0;
            border-top: 1px solid #eee; z-index: 1000;
        }
        .bottom-nav a { color: var(--natura-text); font-size: 24px; position: relative; }

        @media (max-width: 991px) {
            body { padding-top: 140px; padding-bottom: 70px; }
            .natura-top-bar, .action-item span, .natura-nav-sub { display: none; }
            .header-main { flex-wrap: wrap; padding: 10px 0; }
            .natura-logo { flex: 1; }
            .search-container { order: 3; margin: 10px 0 0 0; max-width: 100%; flex: 0 0 100%; }
            .natura-logo img { height: 35px; }
        }

        @media (min-width: 992px) { .bottom-nav { display: none; } }
    </style>
</head>
<body>

<header class="natura-header">
    <div class="natura-top-bar d-none d-lg-block">
        <div class="natura-container d-flex justify-content-between">
            <div>
                <a href="#">natura <i class="bi bi-chevron-down" style="font-size: 10px;"></i></a>
                <a href="#">consultora <i class="bi bi-chevron-down" style="font-size: 10px;"></i></a>
                <a href="#">perfis <i class="bi bi-chevron-down" style="font-size: 10px;"></i></a>
                <a href="#">baixe o app</a>
                <a href="#">blog</a>
            </div>
            <div>
                <a href="#"><i class="bi bi-shop"></i> encontre a natura</a>
                <a href="#" style="border-bottom: 1px solid #fff;">inserir cep</a>
            </div>
        </div>
    </div>

    <div class="natura-container">
        <div class="header-main">
            <a href="#" class="natura-logo">
                <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/b/be/Natura_Logo.png/800px-Natura_Logo.png" alt="Natura">
            </a>

            <div class="search-container">
                <input type="text" class="search-box" placeholder="o que está buscando hoje?">
                <button class="btn-search-orange"><i class="bi bi-search"></i></button>
            </div>

            <div class="header-actions">
                <a href="#" class="action-item d-none d-lg-flex">
                    <i class="bi bi-question-circle"></i> <span>ajuda</span>
                </a>
                <a href="#" class="action-item d-none d-lg-flex">
                    <i class="bi bi-heart"></i> <span>favoritos</span>
                </a>
                <a href="#" class="action-item" data-bs-toggle="offcanvas" data-bs-target="#modalUser">
                    <div class="login-alert"><i class="bi bi-person"></i></div> <span>entrar</span>
                </a>
                <a href="#" class="action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-bag"></i>
                    <span class="cart-badge">0</span>
                </a>
            </div>
        </div>

        <nav class="natura-nav-sub">
            <div class="nav-group">
                <a href="#">perfumaria <i class="bi bi-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="#">perfumaria feminina</a>
                    <a href="#">perfumaria masculina</a>
                    <a href="#">presentes de perfumaria</a>
                </div>
            </div>
            <a href="#">promoções</a>
            <a href="#">presentes</a>
            <a href="#">corpo e banho</a>
            <a href="#">cabelos</a>
            <a href="#">maquiagem</a>
            <a href="#">rosto</a>
            <a href="#">casa</a>
            <a href="#">infantil</a>
            <a href="#">homens</a>
            <a href="#">marcas</a>
        </nav>
    </div>
</header>

<div class="bottom-nav">
    <a href="#"><i class="bi bi-house"></i></a>
    <a href="#"><i class="bi bi-search"></i></a>
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
        <i class="bi bi-bag"></i>
        <span class="cart-badge">0</span>
    </a>
    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person"></i></a>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="modalCarrinho">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">minha sacola</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <p class="text-center text-muted mt-5">Sua sacola está vazia.</p>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="modalUser">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">entrar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <button class="btn w-100 py-3 rounded-pill mb-3" style="background: var(--natura-orange); color: white;">entrar</button>
        <p class="text-center small">Não tem conta? <a href="#" style="color: var(--natura-orange);">Cadastre-se</a></p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>