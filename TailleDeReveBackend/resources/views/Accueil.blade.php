<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Taille De Rêve - Révélez la meilleure version de vous-même</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
  :root{
    --vert-fonce: #1A5F35;
    --rose: #E21B5A;
    --vert-clair: #eaf3ec;
    --rose-clair: #fde9ee;
    --text-gray: #6b7280;
    --text-dark: #1f2937;
  }

  body{
    font-family: 'Poppins', sans-serif;
    color: var(--text-dark);
  }

  h1, h2, h3, .font-display{
    font-family: 'Playfair Display', serif;
  }

  a{ text-decoration: none; }

  /* ===== NAVBAR ===== */
  .navbar-custom{
    background:#fff;
    border-bottom: 1px solid #eee;
    padding: 14px 0;
  }
  .navbar-custom .navbar-brand{
    font-family:'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
  }
  .navbar-custom .navbar-brand .word-taille{ color: var(--rose); }
  .navbar-custom .navbar-brand .word-reve{ color: var(--vert-fonce); }

  .navbar-custom .nav-link{
    color: var(--text-dark);
    font-weight: 500;
    font-size: .95rem;
    margin: 0 12px;
  }
  .navbar-custom .nav-link:hover,
  .navbar-custom .nav-link.active{
    color: var(--vert-fonce);
  }

  .icon-btn{
    color: var(--text-dark);
    font-size: 1.15rem;
    position: relative;
    margin-left: 18px;
  }
  .icon-btn .badge-count{
    position:absolute;
    top:-8px;
    right:-10px;
    background: var(--rose);
    color:#fff;
    font-size: .6rem;
    width: 16px;
    height:16px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
  }

  .btn-commander{
    background: var(--vert-fonce);
    color:#fff;
    border-radius: 30px;
    padding: 10px 26px;
    font-weight: 500;
    font-size: .9rem;
    border: none;
  }
  .btn-commander:hover{ background:#144a29; color:#fff; }

  /* Dropdown Boutique */
  .dropdown-menu-boutique{
    border: none;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
    border-radius: 10px;
    padding: 10px 0;
    margin-top: 10px !important;
  }
  .dropdown-menu-boutique .dropdown-item{
    padding: 10px 24px;
    font-size: .92rem;
    color: var(--text-dark);
  }
  .dropdown-menu-boutique .dropdown-item:hover{
    background: var(--vert-clair);
    color: var(--vert-fonce);
  }
  .nav-item.dropdown:hover .dropdown-menu-boutique{
    display: block;
  }

  /* ===== HERO ===== */
  .hero-section{
    padding: 70px 0 60px;
    background: linear-gradient(120deg, #fff 45%, var(--rose-clair) 100%);
    overflow: hidden;
  }
  .badge-collection{
    background: var(--rose-clair);
    color: var(--rose);
    font-size: .78rem;
    font-weight: 600;
    padding: 6px 16px;
    border-radius: 30px;
    display:inline-block;
    margin-bottom: 22px;
  }
  .hero-title{
    font-size: 3rem;
    line-height: 1.2;
    font-weight: 600;
    color: var(--text-dark);
  }
  .hero-title em{
    color: var(--rose);
    font-style: italic;
    font-weight: 500;
  }
  .hero-text{
    color: var(--text-gray);
    font-size: 1.05rem;
    max-width: 480px;
    margin: 22px 0 32px;
  }
  .btn-boutique-hero{
    background: var(--vert-fonce);
    color:#fff;
    border-radius: 30px;
    padding: 13px 28px;
    font-weight: 500;
    border:none;
  }
  .btn-boutique-hero:hover{ background:#144a29; color:#fff; }
  .btn-transfo-hero{
    background: var(--rose);
    color:#fff;
    border-radius: 30px;
    padding: 13px 28px;
    font-weight: 500;
    border:none;
  }
  .btn-transfo-hero:hover{ background:#c11550; color:#fff; }

  .hero-stats{
    margin-top: 40px;
    display:flex;
    gap: 40px;
    flex-wrap: wrap;
  }
  .hero-stats .stat-item{
    display:flex;
    align-items:center;
    gap: 8px;
    color: var(--text-dark);
    font-size: .92rem;
    font-weight: 500;
  }
  .hero-stats .stat-item i{ color: var(--vert-fonce); font-size:1.1rem; }

  .hero-img-wrap{
    position:relative;
    border-radius: 20px;
    overflow:hidden;
  }
  .hero-img-wrap img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:20px;
  }
  .satisfaction-card{
    position:absolute;
    bottom: 24px;
    left: -30px;
    background:#fff;
    border-radius:14px;
    padding: 14px 18px;
    box-shadow: 0 15px 35px rgba(0,0,0,.12);
    display:flex;
    align-items:center;
    gap: 12px;
    min-width: 230px;
  }
  .satisfaction-circle{
    width:46px;
    height:46px;
    border-radius:50%;
    background: var(--vert-clair);
    color: var(--vert-fonce);
    font-weight:700;
    font-size:.85rem;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .satisfaction-card .label{
    font-weight:600;
    font-size:.9rem;
    color: var(--text-dark);
  }
  .satisfaction-card .sub{
    font-size:.78rem;
    color: var(--text-gray);
  }

  /* ===== SECTION GENERIC ===== */
  .section-eyebrow{
    color: var(--rose);
    font-weight:600;
    font-size:.82rem;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  .section-title{
    font-size: 2.2rem;
    font-weight:600;
    color: var(--text-dark);
  }
  .section-pad{ padding: 70px 0; }

  /* ===== CATEGORY / PRODUCT CARDS ===== */
  .cat-card{
    position:relative;
    border-radius: 16px;
    overflow:hidden;
    height: 320px;
    display:flex;
    align-items:flex-end;
    color:#fff;
  }
  .cat-card img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:0;
  }
  .cat-card::after{
    content:"";
    position:absolute;
    inset:0;
    background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,.55) 100%);
    z-index:1;
  }
  .cat-card .cat-body{
    position:relative;
    z-index:2;
    padding: 24px;
  }
  .cat-card h3{
    font-family:'Playfair Display', serif;
    font-size:1.6rem;
    margin-bottom:4px;
  }
  .cat-card p{
    font-size:.88rem;
    opacity:.9;
    margin-bottom:10px;
  }
  .cat-card .cat-link{
    color:#fff;
    font-weight:500;
    font-size:.88rem;
  }

  /* Product cards */
  .product-card{
    border: 1px solid #eee;
    border-radius: 14px;
    overflow:hidden;
    background:#fff;
    height:100%;
    transition: box-shadow .2s ease;
  }
  .product-card:hover{ box-shadow: 0 15px 35px rgba(0,0,0,.08); }
  .product-img-wrap{
    position:relative;
    height: 220px;
  }
  .product-img-wrap img{
    width:100%;
    height:100%;
    object-fit:cover;
  }
  .product-badge{
    position:absolute;
    top:12px;
    left:12px;
    background: var(--rose);
    color:#fff;
    font-size:.72rem;
    font-weight:600;
    padding: 5px 12px;
    border-radius: 30px;
  }
  .product-badge.green{ background: var(--vert-fonce); }
  .fav-btn{
    position:absolute;
    top:10px;
    right:10px;
    width: 34px;
    height:34px;
    background:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color: var(--text-dark);
    box-shadow: 0 2px 8px rgba(0,0,0,.1);
  }
  .product-body{ padding: 16px; }
  .rating-stars{ color:#f5a623; font-size:.82rem; }
  .rating-count{ color: var(--text-gray); font-size:.8rem; }
  .product-name{ font-size:1rem; font-weight:600; margin: 6px 0 4px; }
  .product-desc{ font-size:.82rem; color: var(--text-gray); min-height: 40px; }
  .stock-line{ font-size:.78rem; color: var(--vert-fonce); margin: 8px 0; }
  .price-current{ font-weight:700; color: var(--vert-fonce); font-size:1.05rem; }
  .price-old{ text-decoration: line-through; color:#aaa; font-size:.85rem; margin-left:8px; }
  .btn-add{
    background: var(--vert-fonce);
    color:#fff;
    border-radius: 8px;
    font-size:.82rem;
    padding: 8px 14px;
    border:none;
  }
  .btn-buy{
    background: var(--rose);
    color:#fff;
    border-radius: 8px;
    font-size:.82rem;
    padding: 8px 14px;
    border:none;
  }

  /* ===== COACHING ===== */
  .coaching-section{ background: var(--vert-clair); padding: 70px 0; }
  .coaching-img{ border-radius: 20px; width:100%; height:100%; object-fit:cover; }
  .check-list li{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom: 14px;
    color: var(--text-dark);
    font-size:.95rem;
  }
  .check-list li i{ color: var(--vert-fonce); font-size:1.1rem; }
  .btn-coaching{
    background: var(--vert-fonce);
    color:#fff;
    border-radius:30px;
    padding: 13px 30px;
    font-weight:500;
    border:none;
  }

  /* ===== AVANT/APRES ===== */
  .transfo-card{
    position:relative;
    border-radius:16px;
    overflow:hidden;
    height: 320px;
  }
  .transfo-card img{ width:100%; height:100%; object-fit:cover; }
  .transfo-badge-white{
    position:absolute;
    top:14px;
    left:14px;
    background: rgba(255,255,255,.9);
    color: var(--text-dark);
    font-size:.72rem;
    font-weight:600;
    padding: 6px 14px;
    border-radius:30px;
    letter-spacing:.5px;
  }
  .transfo-badge-pink{
    position:absolute;
    top:14px;
    right:14px;
    background: var(--rose);
    color:#fff;
    font-size:.78rem;
    font-weight:700;
    padding: 6px 14px;
    border-radius:30px;
  }

  /* ===== TESTIMONIALS ===== */
  .testimonial-card{
    background:#f8f9fa;
    border-radius: 16px;
    padding: 30px;
    height:100%;
  }
  .testimonial-card .quote-icon{ color: var(--rose); opacity:.4; font-size:1.8rem; }
  .testimonial-card p{ font-size:.92rem; color: var(--text-dark); margin: 14px 0 20px; }
  .testimonial-author{ display:flex; align-items:center; gap:12px; }
  .testimonial-author img{ width:44px; height:44px; border-radius:50%; object-fit:cover; }
  .testimonial-author .name{ font-weight:600; font-size:.9rem; }
  .testimonial-author .stars{ color:#f5a623; font-size:.78rem; }

  /* ===== BLOG ===== */
  .blog-card img{
    width:100%;
    height: 200px;
    object-fit:cover;
    border-radius: 14px;
    margin-bottom: 16px;
  }
  .blog-tag{ color: var(--rose); font-size:.75rem; font-weight:700; letter-spacing:.5px; text-transform:uppercase; }
  .blog-card h3{ font-family:'Poppins'; font-size:1.1rem; font-weight:600; margin: 8px 0 6px; }
  .blog-card p{ color: var(--text-gray); font-size:.88rem; }

  /* ===== CONTACT ===== */
  .contact-info-item{
    display:flex;
    align-items:center;
    gap: 14px;
    margin-bottom: 18px;
  }
  .contact-icon-box{
    width: 42px;
    height:42px;
    border-radius:10px;
    background: var(--vert-clair);
    color: var(--vert-fonce);
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .contact-form-box{
    background:#f8f9fa;
    border-radius: 16px;
    padding: 30px;
  }
  .contact-form-box .form-control{
    border-radius: 8px;
    padding: 12px 14px;
    border: 1px solid #e2e2e2;
    font-size:.92rem;
  }
  .btn-send{
    background: var(--vert-fonce);
    color:#fff;
    border-radius: 8px;
    padding: 13px;
    font-weight:500;
    border:none;
    width:100%;
  }

  /* ===== FOOTER ===== */
  footer{
    background: #14202b;
    color: #cbd5e1;
    padding: 60px 0 20px;
  }
  footer .footer-brand{
    font-family:'Playfair Display', serif;
    font-size:1.4rem;
    font-weight:700;
    margin-bottom: 14px;
  }
  footer .footer-brand .word-taille{ color: var(--rose); }
  footer .footer-brand .word-reve{ color: #4ade80; }
  footer p{ font-size:.88rem; color:#94a3b8; }
  footer h5{ color:#fff; font-size:1rem; font-weight:600; margin-bottom: 18px; }
  footer ul{ list-style:none; padding:0; margin:0; }
  footer ul li{ margin-bottom: 12px; }
  footer ul li a{ color:#94a3b8; font-size:.9rem; }
  footer ul li a:hover{ color:#fff; }
  .social-icon{
    width: 36px;
    height:36px;
    border-radius:50%;
    background: var(--vert-fonce);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-right: 8px;
  }
  .footer-bottom{
    border-top: 1px solid #263441;
    margin-top: 40px;
    padding-top: 20px;
    font-size:.82rem;
    color:#94a3b8;
  }
  .footer-bottom a{ color:#94a3b8; margin-left: 20px; }
  .footer-bottom a:hover{ color:#fff; }

  @media (max-width: 991px){
    .hero-title{ font-size: 2.2rem; }
    .satisfaction-card{ left: 16px; }
  }
</style>
</head>
<body>

<!-- ===================== NAVBAR ===================== -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <span class="word-taille">Taille</span> <span class="word-reve">De Rêve</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#categories">Catégories</a></li>
        <li class="nav-item"><a class="nav-link" href="#coaching">Coaching</a></li>
        <li class="nav-item"><a class="nav-link" href="#avant-apres">Avant/Après</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="boutiqueDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Boutique
          </a>
          <ul class="dropdown-menu dropdown-menu-boutique" aria-labelledby="boutiqueDropdown">
            <li><a class="dropdown-item" href="#">Kit Minceur</a></li>
            <li><a class="dropdown-item" href="#">Kit Sport</a></li>
            <li><a class="dropdown-item" href="#">Produit Minceur</a></li>
            <li><a class="dropdown-item" href="#">Soin et Beauté</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex align-items-center">
        <a href="#" class="icon-btn"><i class="bi bi-search"></i></a>
        <a href="#" class="icon-btn"><i class="bi bi-heart"></i><span class="badge-count">2</span></a>
        <a href="#" class="icon-btn"><i class="bi bi-bag"></i><span class="badge-count">2</span></a>
        <button class="btn btn-commander ms-3">Commander</button>
      </div>
    </div>
  </div>
</nav>

<!-- ===================== HERO ===================== -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge-collection">NOUVELLE COLLECTION 2026</span>
        <h1 class="hero-title">
          Révélez la <em>meilleure version</em> de vous-même.
        </h1>
        <p class="hero-text">
          Découvrez une sélection de produits minceur, de vêtements de sport et d'accessoires conçus pour accompagner votre transformation.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <button class="btn btn-boutique-hero">Découvrir la boutique</button>
          <button class="btn btn-transfo-hero">Commencer ma transformation</button>
        </div>
        <div class="hero-stats">
          <div class="stat-item"><i class="bi bi-heart-fill"></i> +5 000 clientes satisfaites</div>
          <div class="stat-item"><i class="bi bi-patch-check-fill"></i> Coaching personnalisé</div>
          <div class="stat-item"><i class="bi bi-truck"></i> Livraison rapide</div>
          <div class="stat-item"><i class="bi bi-shield-check"></i> Paiement sécurisé</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-img-wrap">
          <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=800&q=80" alt="Femme en tenue de sport">
          <div class="satisfaction-card">
            <div class="satisfaction-circle">98%</div>
            <div>
              <div class="label">Satisfaction</div>
              <div class="sub">Clientes ravies</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CATEGORIES ===================== -->
<section class="section-pad" id="categories">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-eyebrow">Explorer</div>
      <h2 class="section-title font-display">Nos Catégories</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="cat-card">
          <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=700&q=80" alt="Kit Minceur">
          <div class="cat-body">
            <h3>Kit Minceur</h3>
            <p>Programmes complets pour votre transformation</p>
            <a href="#" class="cat-link">Découvrir →</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="cat-card">
          <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=700&q=80" alt="Kit Sport">
          <div class="cat-body">
            <h3>Kit Sport</h3>
            <p>Ensembles et équipements sportifs</p>
            <a href="#" class="cat-link">Découvrir →</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="cat-card">
          <img src="https://images.unsplash.com/photo-1610970881699-44a5587cabec?w=700&q=80" alt="Produit Minceur">
          <div class="cat-body">
            <h3>Produit Minceur</h3>
            <p>Protéines, brûleurs et compléments</p>
            <a href="#" class="cat-link">Découvrir →</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="cat-card">
          <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=700&q=80" alt="Soin & Beauté">
          <div class="cat-body">
            <h3>Soin et Beauté</h3>
            <p>Collagène, vitamines et soins</p>
            <a href="#" class="cat-link">Découvrir →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== KIT MINCEUR (Boutique) ===================== -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3">
      <div>
        <div class="section-eyebrow">KIT MINCEUR</div>
        <h2 class="section-title font-display">Kit Minceur</h2>
        <p class="text-muted mb-0">Programmes complets pour une transformation durable et efficace</p>
      </div>
      <select class="form-select w-auto">
        <option>Trier par : Popularité</option>
      </select>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=500&q=80" alt="Kit Ventre Plat">
            <span class="product-badge">Top vente</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(62)</span></div>
            <div class="product-name">Kit Ventre Plat</div>
            <p class="product-desc">Programme ciblé pour affiner la taille et réduire les ballonnements. Protéines, gélules et shaker.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • Pack complet</div>
            <div class="mb-3"><span class="price-current">42 900 FCFA</span><span class="price-old">49 900 FCFA</span></div>
            <div class="d-flex gap-2">
              <button class="btn btn-add flex-fill"><i class="bi bi-bag"></i> Ajouter</button>
              <button class="btn btn-buy flex-fill"><i class="bi bi-lightning-fill"></i> Acheter</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?w=500&q=80" alt="Kit Détox Express">
            <span class="product-badge">Nouveau</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(45)</span></div>
            <div class="product-name">Kit Détox Express 14 Jours</div>
            <p class="product-desc">Programme détoxifiant complet sur 14 jours avec thé, gélules et guide nutritionnel inclus.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • 14 jours</div>
            <div class="mb-3"><span class="price-current">34 900 FCFA</span><span class="price-old">39 900 FCFA</span></div>
            <div class="d-flex gap-2">
              <button class="btn btn-add flex-fill"><i class="bi bi-bag"></i> Ajouter</button>
              <button class="btn btn-buy flex-fill"><i class="bi bi-lightning-fill"></i> Acheter</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?w=500&q=80" alt="Kit Minceur Nuit">
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★☆</span> <span class="rating-count">(38)</span></div>
            <div class="product-name">Kit Minceur Nuit</div>
            <p class="product-desc">Programme minceur nocturne avec brûleur de graisse nuit et collagène. Transformez votre sommeil.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • 30 jours</div>
            <div class="mb-3"><span class="price-current">38 900 FCFA</span></div>
            <div class="d-flex gap-2">
              <button class="btn btn-add flex-fill"><i class="bi bi-bag"></i> Ajouter</button>
              <button class="btn btn-buy flex-fill"><i class="bi bi-lightning-fill"></i> Acheter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== KIT SPORT ===================== -->
<section class="section-pad">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3">
      <div>
        <div class="section-eyebrow">KIT SPORT</div>
        <h2 class="section-title font-display">Kit Sport</h2>
        <p class="text-muted mb-0">Ensembles et équipements sportifs pour bouger avec style</p>
      </div>
      <select class="form-select w-auto">
        <option>Trier par : Popularité</option>
      </select>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1518459031867-a89b944bffe4?w=500&q=80" alt="Brassière Sport Premium">
            <span class="product-badge">Promo</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(87)</span></div>
            <div class="product-name">Brassière Sport Premium</div>
            <p class="product-desc">Brassière de sport haute intensité avec maintien optimal. Tissu respirant et élégant.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1592432678016-e910b452f9a2?w=500&q=80" alt="Kit Yoga & Pilates">
            <span class="product-badge">Kit complet</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(54)</span></div>
            <div class="product-name">Kit Yoga et Pilates</div>
            <p class="product-desc">Ensemble complet : tapis, élastiques, bouteille et serviette. Parfait pour le yoga à domicile.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=500&q=80" alt="Kit Running Femme">
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(41)</span></div>
            <div class="product-name">Kit Running Femme</div>
            <p class="product-desc">Ensemble running premium : brassière, short et accessoires assortis.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1550345332-09e3ac987658?w=500&q=80" alt="Short Sport Taille Haute">
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★☆</span> <span class="rating-count">(33)</span></div>
            <div class="product-name">Short Sport Taille Haute</div>
            <p class="product-desc">Short sport taille haute avec poche latérale et tissu extensible.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PRODUITS LES PLUS VENDUS ===================== -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title font-display">Produits les plus vendus</h2>
      <p class="text-muted">Les coups de cœur de nos clientes</p>
    </div>
    <div class="row g-4">
      <div class="col-lg col-md-4 col-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=400&q=80" alt="Kit Ventre Plat">
            <span class="product-badge">Top vente</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(62)</span></div>
            <div class="product-name">Kit Ventre Plat</div>
            <p class="product-desc">Programme ciblé pour affiner la taille et réduire les ballonnements. Protéines, gélules et shaker.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • Pack complet</div>
            <div><span class="price-current">42 900 FCFA</span><span class="price-old">49 900 FCFA</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1592432678016-e910b452f9a2?w=400&q=80" alt="Kit Yoga & Pilates">
            <span class="product-badge">Kit complet</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(54)</span></div>
            <div class="product-name">Kit Yoga et Pilates</div>
            <p class="product-desc">Ensemble complet : tapis, élastiques, bouteille et serviette.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • 5 pièces</div>
            <div><span class="price-current">27 900 FCFA</span><span class="price-old">32 900 FCFA</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1518459031867-a89b944bffe4?w=400&q=80" alt="Brassière Sport Premium">
            <span class="product-badge">Promo</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(87)</span></div>
            <div class="product-name">Brassière Sport Premium</div>
            <p class="product-desc">Brassière de sport haute intensité avec maintien optimal. Tissu respirant et élégant.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • Taille S/M/L</div>
            <div><span class="price-current">12 900 FCFA</span><span class="price-old">15 900 FCFA</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1621781207071-96b45d2c1e6a?w=400&q=80" alt="Café Vert Brûleur">
            <span class="product-badge green">Best-seller</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(102)</span></div>
            <div class="product-name">Café Vert Brûleur</div>
            <p class="product-desc">Extrait de café vert pur pour accélérer la combustion des graisses naturellement.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • 60 gélules</div>
            <div><span class="price-current">16 900 FCFA</span><span class="price-old">19 900 FCFA</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-6">
        <div class="product-card">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?w=400&q=80" alt="Sérum Affinant Visage">
            <span class="product-badge green">Premium</span>
            <span class="fav-btn"><i class="bi bi-heart"></i></span>
          </div>
          <div class="product-body">
            <div><span class="rating-stars">★★★★★</span> <span class="rating-count">(83)</span></div>
            <div class="product-name">Sérum Affinant Visage</div>
            <p class="product-desc">Sérum concentré pour affiner les traits et tonifier la peau du visage. À l'acide hyaluronique.</p>
            <div class="stock-line"><i class="bi bi-check-circle"></i> En stock • 30ml</div>
            <div><span class="price-current">18 900 FCFA</span><span class="price-old">22 900 FCFA</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== COACHING ===================== -->
<section class="coaching-section" id="coaching">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <img class="coaching-img" src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=700&q=80" alt="Coaching">
      </div>
      <div class="col-lg-6">
        <h2 class="section-title font-display mb-3">Votre transformation ne s'arrête pas au produit.</h2>
        <p class="text-muted mb-4">
          Nos coachs vous accompagnent avec un programme personnalisé afin d'obtenir des résultats durables. Chaque cliente bénéficie d'un suivi individuel, de conseils nutritionnels et d'un programme adapté à ses objectifs.
        </p>
        <ul class="check-list list-unstyled">
          <li><i class="bi bi-check-circle-fill"></i> Programme nutritionnel personnalisé</li>
          <li><i class="bi bi-check-circle-fill"></i> Suivi quotidien via WhatsApp</li>
          <li><i class="bi bi-check-circle-fill"></i> Conseils adaptés à vos objectifs</li>
          <li><i class="bi bi-check-circle-fill"></i> Accompagnement par une coach certifiée</li>
          <li><i class="bi bi-check-circle-fill"></i> Résultats visibles dès les premières semaines</li>
        </ul>
        <button class="btn btn-coaching mt-2">Réserver mon coaching</button>
      </div>
    </div>
  </div>
</section>

<!-- ===================== AVANT / APRES ===================== -->
<section class="section-pad" id="avant-apres">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-eyebrow">AVANT / APRÈS</div>
      <h2 class="section-title font-display">Transformations Réelles</h2>
      <p class="text-muted">Découvrez les résultats de nos clientes après avoir utilisé nos produits.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="transfo-card">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500&q=80" alt="Transformation 1">
          <span class="transfo-badge-white">APRÈS</span>
          <span class="transfo-badge-pink">-8 kg</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="transfo-card">
          <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?w=500&q=80" alt="Transformation 2">
          <span class="transfo-badge-white">APRÈS</span>
          <span class="transfo-badge-pink">-5 kg</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="transfo-card">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=500&q=80" alt="Transformation 3">
          <span class="transfo-badge-white">APRÈS</span>
          <span class="transfo-badge-pink">-6 kg</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== TEMOIGNAGES ===================== -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-eyebrow">TÉMOIGNAGES</div>
      <h2 class="section-title font-display">Elles ont fait confiance à Taille De Rêve</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card">
          <i class="bi bi-quote quote-icon"></i>
          <p>"J'ai perdu 8 kg en 2 mois grâce au Kit Minceur et au coaching personnalisé. Je me sens transformée et pleine d'énergie !"</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Aminata D.">
            <div>
              <div class="name">Aminata D.</div>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <i class="bi bi-quote quote-icon"></i>
          <p>"Les protéines sont délicieuses et le suivi WhatsApp m'a vraiment motivée. Taille De Rêve a changé ma vie. Merci infiniment !"</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Fatou S.">
            <div>
              <div class="name">Fatou S.</div>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <i class="bi bi-quote quote-icon"></i>
          <p>"Enfin une marque qui comprend les femmes africaines. Les tenues de sport sont magnifiques et les produits sont efficaces."</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Mariama K.">
            <div>
              <div class="name">Mariama K.</div>
              <div class="stars">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center text-muted mt-4 mb-0" style="font-size:.85rem;">Les résultats varient selon les personnes, leur alimentation et leur activité physique.</p>
  </div>
</section>

<!-- ===================== BLOG ===================== -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-eyebrow">BLOG</div>
      <h2 class="section-title font-display">Conseils et Bien-être</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=500&q=80" alt="Nutrition">
          <div class="blog-tag">Nutrition</div>
          <h3>Comment perdre du poids durablement</h3>
          <p>Découvrez les habitudes simples et efficaces pour une perte de poids saine et durable sans effet yo-yo.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1595475207225-428b62bda831?w=500&q=80" alt="Produits">
          <div class="blog-tag">Produits</div>
          <h3>Les meilleures protéines pour femmes</h3>
          <p>Guide complet pour choisir la protéine adaptée à vos objectifs minceur et bien-être.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=500&q=80" alt="Sport">
          <div class="blog-tag">Sport</div>
          <h3>Comment choisir son legging de sport</h3>
          <p>Confort, maintien et style : les critères essentiels pour trouver le legging parfait.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CONTACT ===================== -->
<section class="section-pad bg-light">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="section-eyebrow">CONTACT</div>
        <h2 class="section-title font-display mb-3">Une question ? Écrivez-nous</h2>
        <p class="text-muted mb-4">Notre équipe est à votre écoute pour vous conseiller et vous accompagner dans votre transformation.</p>
        <div class="contact-info-item">
          <div class="contact-icon-box"><i class="bi bi-telephone-fill"></i></div>
          <div>+221 77 000 00 00</div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon-box"><i class="bi bi-envelope-fill"></i></div>
          <div>contact@taillereve.com</div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon-box"><i class="bi bi-geo-alt-fill"></i></div>
          <div>Dakar, Sénégal</div>
        </div>
      </div>
      <div class="col-lg-7">
        <form class="contact-form-box">
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nom complet">
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Téléphone">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Sujet">
            </div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Votre message"></textarea>
          </div>
          <button type="submit" class="btn btn-send"><i class="bi bi-send-fill"></i> Envoyer le message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand"><span class="word-taille">Taille</span> <span class="word-reve">De Rêve</span></div>
        <p>Votre partenaire de confiance pour une transformation physique naturelle, saine et durable.</p>
        <div class="d-flex mt-3">
          <a href="#" class="social-icon"><i class="bi bi-chat-dots-fill"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5>Liens rapides</h5>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Boutique</a></li>
          <li><a href="#">Catégories</a></li>
          <li><a href="#">Coaching</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5>Aide</h5>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Livraison</a></li>
          <li><a href="#">Retours et échanges</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6">
        <h5>Contact</h5>
        <ul>
          <li>+221 77 000 00 00</li>
          <li>contact@taillereve.com</li>
          <li>Dakar, Sénégal</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom d-flex justify-content-between flex-wrap">
      <div>© 2026 Taille De Rêve. Tous droits réservés.</div>
      <div>
        <a href="#">Mentions légales</a>
        <a href="#">Confidentialité</a>
        <a href="#">CGV</a>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
