<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natura SaaS High-End 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Playfair+Display:ital@0;1&display=swap');

        :root {
            --natura-green: #4a5d4e;
            --natura-orange: #f48024;
            --natura-beige: #f9f7f2;
            --natura-dark: #2d2d2d;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        body { 
            background-color: #ffffff; 
            font-family: 'Outfit', sans-serif;
            color: var(--natura-dark);
            padding-top: 170px;
        }

        /* HEADER ORGÂNICA */
        .natura-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed; top: 0; width: 100%; z-index: 1200;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .natura-top-bar {
            background: var(--natura-beige);
            color: var(--natura-green); font-size: 11px; text-transform: uppercase;
            letter-spacing: 1.5px; text-align: center; padding: 10px 0;
            font-weight: 500;
        }

        .natura-container { max-width: 1400px; margin: 0 auto; padding: 0 30px; }

        .header-main {
            display: grid;
            grid-template-columns: 1fr auto 1fr; /* LOGO NO MEIO EXATAMENTE */
            align-items: center;
            height: 90px;
        }

        /* LOGO CENTRALIZADA */
        .natura-logo { 
            font-family: 'Playfair Display', serif;
            font-size: 38px; font-weight: 400; color: var(--natura-green);
            text-decoration: none; letter-spacing: -1px;
            font-style: italic;
        }
        .natura-logo span { color: var(--natura-orange); font-size: 45px; line-height: 0; }

        /* BUSCA CLEAN */
        .search-wrapper { position: relative; max-width: 350px; }
        .search-natura {
            width: 100%; border: 1px solid #e0e0e0; border-radius: 50px;
            padding: 10px 20px 10px 45px; font-size: 14px; outline: none;
            background: #fdfdfd; transition: var(--transition);
        }
        .search-natura:focus { border-color: var(--natura-green); box-shadow: 0 5px 15px rgba(0,0,0,0.03); }
        .search-icon { position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: #999; }

        /* ACTIONS */
        .natura-actions { display: flex; align-items: center; justify-content: flex-end; gap: 25px; }
        .natura-action-item {
            color: var(--natura-green); text-decoration: none;
            font-size: 12px; font-weight: 500; text-transform: uppercase;
            letter-spacing: 0.5px; cursor: pointer; transition: 0.3s;
        }
        .natura-action-item:hover { opacity: 0.7; }
        .natura-action-item i { font-size: 20px; vertical-align: middle; margin-right: 5px; }

        /* BADGE */
        .cart-count {
            background: var(--natura-orange); color: white;
            font-size: 10px; padding: 2px 6px; border-radius: 20px;
            position: relative; top: -10px; margin-left: -5px;
        }

        /* NAV */
        .natura-nav-bottom {
            display: flex; justify-content: center; gap: 35px; padding: 15px 0;
        }
        .natura-nav-bottom a {
            text-decoration: none; color: var(--natura-dark);
            font-size: 13px; font-weight: 400; text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* MODAIS SOBREPOSTOS */
        .offcanvas { z-index: 2500 !important; background-color: var(--natura-beige) !important; }
        .offcanvas-backdrop { z-index: 2499 !important; }

        @media (max-width: 991px) {
            body { padding-top: 180px; }
            .natura-nav-bottom, .natura-action-item span, .header-left { display: none; }
            
            .header-main { 
                display: flex; justify-content: space-between; 
                flex-wrap: wrap; height: auto; padding: 20px 0; 
            }
            
            .natura-logo { order: 1; font-size: 30px; margin: 0 auto; } /* Logo continua centrada no mobile */
            .natura-actions { order: 2; position: absolute; right: 20px; top: 75px; }
            
            .search-wrapper { 
                order: 3; width: 100%; max-width: 100%; 
                margin-top: 20px; 
            }
            .search-natura { background: white; border: 1px solid #eee; }
        }
    </style>
</head>
<body>

<header class="natura-header">
    <div class="natura-top-bar">O Bem Estar Bem • Consultoria Digital Ativa</div>
    <div class="natura-container">
        <div class="header-main">
            <div class="header-left">
                <div class="search-wrapper">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" class="search-natura" placeholder="Buscar fragrância...">
                </div>
            </div>

            <a href="#" class="natura-logo">natura<span>.</span></a>
            
            <div class="natura-actions">
                <div class="natura-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalUser">
                    <i class="bi bi-person"></i><span>Entrar</span>
                </div>
                <div class="natura-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-handbag"></i><span>Sacola</span>
                    <span class="cart-count">0</span>
                </div>
            </div>

            <div class="search-wrapper d-lg-none">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="search-natura" placeholder="O que você busca hoje?">
            </div>
        </div>

        <nav class="natura-nav-bottom">
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#modalMenu">Categorias</a>
            <a href="#">Presentes</a>
            <a href="#">Perfumaria</a>
            <a href="#">Corpo e Banho</a>
            <a href="#">Promoções</a>
        </nav>
    </div>
</header>

<div class="offcanvas offcanvas-start" id="modalMenu">
    <div class="offcanvas-header py-4 border-bottom">
        <h5 class="fw-light m-0" style="letter-spacing: 3px;">MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group list-group-flush bg-transparent">
            <a href="#sub-corpo" class="list-group-item list-group-item-action py-4 px-4 bg-transparent d-flex justify-content-between border-0" data-bs-toggle="collapse">
                <span>CORPO E BANHO</span>
                <i class="bi bi-chevron-right"></i>
            </a>
            <div class="collapse" id="sub-corpo">
                <a href="#" class="list-group-item ps-5 py-2 border-0 bg-transparent text-muted">Hidratantes</a>
                <a href="#" class="list-group-item ps-5 py-2 border-0 bg-transparent text-muted">Sabonetes</a>
            </div>
            <a href="#" class="list-group-item py-4 px-4 bg-transparent border-0">PERFUMARIA</a>
            <a href="#" class="list-group-item py-4 px-4 bg-transparent border-0">MAQUIAGEM</a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalCarrinho">
    <div class="offcanvas-header py-4 border-bottom">
        <h5 class="fw-light m-0">MINHA SACOLA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body text-center pt-5">
        <p class="text-muted fw-light">Sua sacola está vazia.</p>
        <button class="btn btn-dark w-100 py-3 rounded-pill mt-4" style="background: var(--natura-green); border: none;">VER PRODUTOS</button>
    </div>
</div>

<div class="offcanvas offcanvas-end" id="modalUser">
    <div class="offcanvas-header py-4 border-bottom">
        <h5 class="fw-light m-0">MINHA CONTA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <button class="btn btn-dark w-100 py-3 rounded-pill mb-3" style="background: var(--natura-green); border: none;">ENTRAR</button>
        <button class="btn btn-outline-secondary w-100 py-3 rounded-pill">CADASTRAR</button>
    </div>
</div>

<nav class="d-lg-none fixed-bottom bg-white border-top d-flex justify-content-around py-3" style="z-index: 1050; border-radius: 20px 20px 0 0; shadow: 0 -5px 20px rgba(0,0,0,0.05);">
    <a href="#" class="text-dark"><i class="bi bi-house-door fs-4"></i></a>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalMenu"><i class="bi bi-grid fs-4"></i></button>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho"><i class="bi bi-handbag fs-4"></i></button>
    <button class="border-0 bg-transparent text-dark" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person fs-4"></i></button>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>