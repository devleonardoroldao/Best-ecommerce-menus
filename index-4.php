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
            --ali-orange: linear-gradient(90deg, #ff4e00 0%, #ec008c 100%);
            --ali-dark: #191919;
            --ali-gray: #f2f2f2;
            --ali-border: rgba(0,0,0,0.08);
        }

        body { 
            background-color: var(--ali-gray); 
            font-family: 'Inter', sans-serif;
            color: var(--ali-dark);
            padding-top: 140px;
            padding-bottom: 80px;
        }

        /* PREMIUM HEADER */
        .ali-header {
            background: white;
            position: fixed; top: 0; width: 100%; z-index: 1100;
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .ali-container { max-width: 1300px; margin: 0 auto; padding: 0 20px; }

        .header-main {
            display: flex; align-items: center; justify-content: space-between; gap: 30px;
        }

        .ali-logo { font-size: 28px; font-weight: 800; color: #ff4e00; letter-spacing: -1px; cursor: pointer; }

        /* BUSCA AVANÇADA 2026 */
        .search-bar-2026 {
            flex: 1; max-width: 700px; display: flex;
            background: #fff; border: 2px solid #ff4e00;
            border-radius: 50px; padding: 4px;
        }

        .search-bar-2026 input {
            border: none; outline: none; padding: 8px 25px;
            width: 100%; border-radius: 50px; font-size: 15px;
        }

        .btn-ali-search {
            background: var(--ali-orange);
            color: white; border: none; padding: 10px 30px;
            border-radius: 50px; font-weight: 600; transition: 0.3s;
        }

        /* USER ACTIONS */
        .ali-actions { display: flex; align-items: center; gap: 25px; }
        .action-item {
            text-align: center; color: var(--ali-dark); text-decoration: none;
            position: relative; font-size: 12px; font-weight: 500; cursor: pointer;
        }
        .action-item i { font-size: 24px; display: block; margin-bottom: 2px; }

        .cart-badge {
            position: absolute; top: -5px; right: 0;
            background: var(--ali-orange); color: white;
            border-radius: 50%; width: 18px; height: 18px;
            font-size: 11px; display: flex; align-items: center; justify-content: center;
        }

        /* NAV BOTTOM */
        .ali-nav-bottom { margin-top: 15px; display: flex; gap: 25px; align-items: center; }
        .category-trigger {
            background: var(--ali-dark); color: white; padding: 8px 20px;
            border-radius: 50px; font-size: 14px; font-weight: 600; cursor: pointer;
        }
        .nav-links-ali a { text-decoration: none; color: #666; font-size: 14px; font-weight: 500; margin-right: 20px; }

        /* MODAIS SOBREPONDO TUDO */
        .offcanvas { z-index: 2000 !important; border: none !important; }
        .offcanvas-backdrop { z-index: 1999 !important; }
        
        .offcanvas-2026 { border-radius: 24px 0 0 24px !important; }
        .offcanvas-start.offcanvas-2026 { border-radius: 0 24px 24px 0 !important; }
        .sub-link-item { padding-left: 3.5rem !important; background-color: #fafafa; font-size: 0.9rem; color: #666 !important; }

        /* MOBILE OVERRIDE */
        @media (max-width: 991px) {
            body { padding-top: 135px; } /* Ajuste do padding pelo novo tamanho da header */
            .ali-header { padding: 12px 0; }
            .ali-nav-bottom, .action-item span { display: none; }
            
            .header-main { 
                flex-wrap: wrap; /* Permite que os itens quebrem linha */
                gap: 10px;
            }
            .ali-logo { order: 1; font-size: 22px; }
            .ali-actions { order: 2; gap: 15px; }
            
            .search-bar-2026 { 
                order: 3; /* Força a busca a ser o terceiro elemento */
                width: 100%; 
                max-width: 100%;
                margin-top: 5px;
                border-width: 1px;
            }
            .btn-ali-search { padding: 8px 15px; font-size: 14px; }
        }

        /* LUXURY CARDS */
        .luxury-card {
            background: white; border-radius: 24px; padding: 20px;
            border: 1px solid var(--ali-border); transition: 0.4s;
        }
    </style>
</head>
<body>

<header class="ali-header">
    <div class="ali-container">
        <div class="header-main">
            <div class="ali-logo">AliExpress<span style="color: #333">.SaaS</span></div>
            
            <div class="search-bar-2026">
                <input type="text" placeholder="I'm shopping for...">
                <button class="btn-ali-search">Search</button>
            </div>

            <div class="ali-actions">
                <div class="action-item d-none d-lg-block">
                    <i class="bi bi-qr-code-scan"></i><span>App</span>
                </div>
                <div class="action-item" data-bs-toggle="offcanvas" data-bs-target="#modalUser">
                    <i class="bi bi-person"></i><span>Account</span>
                </div>
                <div class="action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-cart3"></i><span>Cart</span>
                    <span class="cart-badge">0</span>
                </div>
            </div>
        </div>

        <div class="ali-nav-bottom">
            <div class="category-trigger" data-bs-toggle="offcanvas" data-bs-target="#modalMenu">
                <i class="bi bi-list me-2"></i> All Categories
            </div>
            <nav class="nav-links-ali">
                <a href="#">SuperDeals</a>
                <a href="#">Plus</a>
                <a href="#">New Arrivals</a>
            </nav>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-start offcanvas-2026" id="modalMenu">
    <div class="offcanvas-header border-bottom py-4">
        <h5 class="fw-bold m-0">Explore Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="list-group list-group-flush">
            <a href="#sub-tec" class="list-group-item py-3 px-4 d-flex justify-content-between align-items-center" data-bs-toggle="collapse">
                <span class="fw-medium"><i class="bi bi-cpu me-3"></i>Tecnologia</span>
                <i class="bi bi-chevron-down small"></i>
            </a>
            <div class="collapse" id="sub-tec">
                <a href="#" class="list-group-item sub-link-item">Smartphones</a>
                <a href="#" class="list-group-item sub-link-item">Laptops & PC</a>
            </div>
            <a href="#" class="list-group-item py-3 px-4 fw-medium"><i class="bi bi-watch me-3"></i>Relógios</a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-2026" id="modalCarrinho">
    <div class="offcanvas-header border-bottom py-4">
        <h5 class="fw-bold m-0">Shopping Cart (0)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body text-center pt-5">
        <i class="bi bi-bag-x display-1 text-light mb-4"></i>
        <h4 class="fw-bold">Your cart is empty</h4>
        <button class="btn btn-dark w-100 py-3 rounded-pill mt-4 fw-bold">Start Shopping</button>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-2026" id="modalUser">
    <div class="offcanvas-header border-bottom py-4">
        <h5 class="fw-bold m-0">Welcome Back</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <button class="btn btn-primary w-100 py-3 rounded-pill fw-bold" style="background: var(--ali-orange); border: none;">Sign In / Register</button>
    </div>
</div>

<nav class="d-lg-none fixed-bottom bg-white border-top d-flex justify-content-around py-3 shadow-lg" style="z-index: 1050;">
    <a href="#" class="text-danger"><i class="bi bi-house-door-fill fs-4"></i></a>
    <button class="border-0 bg-transparent text-secondary" data-bs-toggle="offcanvas" data-bs-target="#modalMenu"><i class="bi bi-list fs-4"></i></button>
    <button class="border-0 bg-transparent text-secondary" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho"><i class="bi bi-cart3 fs-4"></i></button>
    <button class="border-0 bg-transparent text-secondary" data-bs-toggle="offcanvas" data-bs-target="#modalUser"><i class="bi bi-person fs-4"></i></button>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>