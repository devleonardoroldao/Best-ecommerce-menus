<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Americanas Style 2026 - Final Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap');

        :root {
            --brand-red: #e60014;
            --brand-red-dark: #c10011;
            --bg-light: #f4f4f4;
            --text-main: #333333;
        }

        body { 
            margin: 0; padding-top: 155px; background: var(--bg-light); 
            font-family: 'Montserrat', sans-serif; 
            padding-bottom: 80px;
        }

        .ame-header {
            position: fixed; top: 0; width: 100%; z-index: 1040;
            background: var(--brand-red); box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .ame-container { max-width: 1200px; margin: 0 auto; width: 100%; padding: 0 15px; }

        /* HEADER GRID: ESQUERDA (Dept) | CENTRO (Logo) | DIREITA (Ícones) */
        .ame-top-row {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            padding: 15px 0;
        }

        /* 1. ESQUERDA: DEPARTAMENTOS */
        .ame-left-side { display: flex; align-items: center; }
        .btn-dept-desktop {
            color: white; text-decoration: none; font-weight: 700;
            font-size: 13px; text-transform: uppercase;
            display: flex; align-items: center; gap: 8px; cursor: pointer;
        }

        /* 2. CENTRO: LOGO */
        .ame-logo { display: flex; justify-content: center; }
        .ame-logo img { height: 35px; filter: brightness(0) invert(1); }

        /* 3. DIREITA: ÍCONES TOTALMENTE À DIREITA */
        .ame-actions-group {
            display: flex; align-items: center; justify-content: flex-end; /* Alinhado à direita */
            gap: 25px;
        }
        .ame-action-item { 
            color: white; text-decoration: none; font-size: 24px; 
            position: relative; cursor: pointer; text-align: center;
        }
        .ame-action-label { font-size: 10px; font-weight: 700; display: block; text-transform: uppercase; margin-top: -2px; }

        /* BUSCA ABAIXO */
        .ame-search-row { padding-bottom: 15px; }
        .ame-search-bar {
            background: white; border-radius: 8px; display: flex;
            height: 48px; align-items: center; padding: 0 5px 0 15px;
        }
        .ame-search-bar input { border: none; outline: none; flex: 1; font-size: 14px; font-weight: 600; }
        .ame-btn-search { background: transparent; border: none; color: var(--brand-red); font-size: 20px; padding: 0 15px; }

        /* BADGE */
        .ame-badge {
            position: absolute; top: -5px; right: -8px;
            background: #fff; color: var(--brand-red);
            font-size: 10px; font-weight: 800;
            width: 18px; height: 18px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
        }

        /* BOTTOM BAR MOBILE */
        .ame-mobile-nav {
            position: fixed; bottom: 0; left: 0; width: 100%;
            background: white; display: none; justify-content: space-around;
            padding: 10px 0; border-top: 1px solid #eee; z-index: 1050;
        }
        .ame-mobile-item { border: none; background: none; color: #666; font-size: 10px; font-weight: 700; display: flex; flex-direction: column; align-items: center; }

        /* SUBMENU / ACCORDION NO OFF-CANVAS */
        .offcanvas-body .accordion-button:not(.collapsed) {
            background-color: #fff1f2; color: var(--brand-red); font-weight: 700;
        }
        .offcanvas-header { background: var(--brand-red); color: white; }
        .list-subitem { padding: 12px 20px; text-decoration: none; color: #555; display: block; font-size: 14px; border-bottom: 1px solid #f8f8f8; }

        @media (max-width: 991px) {
            body { padding-top: 130px; }
            .ame-top-row { grid-template-columns: 1fr 1fr; }
            .ame-left-side, .ame-actions-group { display: none; }
            .ame-mobile-nav { display: flex; }
        }
    </style>
</head>
<body>

<header class="ame-header" id="headerPrincipal">
    <div class="ame-container">
        <div class="ame-top-row">
            <div class="ame-left-side">
                <div class="btn-dept-desktop" data-bs-toggle="offcanvas" data-bs-target="#modalDepartamentos">
                    <i class="bi bi-list fs-4"></i>
                    <span>Departamentos</span>
                </div>
            </div>

            <div class="ame-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Lojas_Americanas_logo.svg/2560px-Lojas_Americanas_logo.svg.png" alt="Americanas">
            </div>

            <div class="ame-actions-group">
                <div class="ame-action-item" data-bs-toggle="modal" data-bs-target="#modalLista">
                    <i class="bi bi-heart"></i>
                    <span class="ame-action-label">Favoritos</span>
                </div>
                <div class="ame-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalConta">
                    <i class="bi bi-person"></i>
                    <span class="ame-action-label">Minha Conta</span>
                </div>
                <div class="ame-action-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
                    <i class="bi bi-cart3"></i>
                    <span class="ame-badge">3</span>
                    <span class="ame-action-label">Carrinho</span>
                </div>
            </div>
        </div>

        <div class="ame-search-row">
            <div class="ame-search-bar">
                <input type="text" placeholder="o que você está buscando hoje?">
                <button class="ame-btn-search"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-start" id="modalDepartamentos">
    <div class="offcanvas-header">
        <h5 class="fw-bold m-0 text-white">Departamentos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="accordion accordion-flush" id="accDept">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#subEletro">
                        Eletrodomésticos
                    </button>
                </h2>
                <div id="subEletro" class="accordion-collapse collapse" data-bs-parent="#accDept">
                    <div class="accordion-body p-0">
                        <a href="#" class="list-subitem">Geladeiras e Refrigeradores</a>
                        <a href="#" class="list-subitem">Máquinas de Lavar</a>
                        <a href="#" class="list-subitem">Fogões</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#subCel">
                        Celulares e Smartphones
                    </button>
                </h2>
                <div id="subCel" class="accordion-collapse collapse" data-bs-parent="#accDept">
                    <div class="accordion-body p-0">
                        <a href="#" class="list-subitem">iPhone</a>
                        <a href="#" class="list-subitem">Samsung Galaxy</a>
                        <a href="#" class="list-subitem">Motorola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="ame-mobile-nav">
    <button class="ame-mobile-item"><i class="bi bi-house"></i>Início</button>
    <button class="ame-mobile-item" data-bs-toggle="offcanvas" data-bs-target="#modalDepartamentos"><i class="bi bi-grid"></i>Categorias</button>
    <button class="ame-mobile-item" data-bs-toggle="offcanvas" data-bs-target="#modalCarrinho">
        <div style="position: relative;"><i class="bi bi-cart3"></i><span class="ame-badge" style="background: var(--brand-red); color: white; top: -8px; right: -10px;">3</span></div>
        Carrinho
    </button>
    <button class="ame-mobile-item" data-bs-toggle="offcanvas" data-bs-target="#modalConta"><i class="bi bi-person"></i>Conta</button>
</nav>

<div class="offcanvas offcanvas-end" id="modalCarrinho">
    <div class="offcanvas-header"><h5 class="fw-bold m-0 text-white">Meu Carrinho</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button></div>
    <div class="offcanvas-body">Seu carrinho está vazio.</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>