    <?php
  require_once 'conexao/init.php';
  // abre a conexão
  $PDO = db_connect();

    
  // SQL para selecionar os registros
  $sql_categorias = "SELECT * FROM ";
    
  // seleciona os registros
  $pesquisa_categoria = $PDO->prepare($sql_categorias);
  $pesquisa_categoria->execute();
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Techmarket HTML</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/font-techmarket.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/techmarket-font-awesome.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/slick-style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css" media="all" />
        
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav-icon.png">
    </head>
    <body class="right-sidebar blog-list">
        <div id="page" class="hfeed site">
            <div class="top-bar top-bar-v1">
                <div class="col-full">
                    <!--
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket eCommerce &#8211; Always free delivery</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="shop.html">Quality Guarantee of products</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="track-your-order.html">Fast returnings program</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="No additional fees" href="contact-v2.html">No additional fees</a>
                        </li>
                    </ul>
                    .nav -->
                </div>
                <!-- .col-full -->
            </div>
            <header id="masthead" class="site-header header-v2" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="row">
                        <div class="site-branding">
                            <a href="index.php" class="custom-logo-link" rel="home">
                                <img src="logos/principal.png">
                            </a>
                            <!-- /.custom-logo-link -->
                        </div>
                        <!-- /.site-branding -->
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <div id="departments-menu" class="dropdown departments-menu">
                            <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="tm tm-departments-thin"></i>
                                <span>Menu</span>
                            </button>
                            
                            <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            <?php while ($categoria_produtos = $pesquisa_categoria->fetch(PDO::FETCH_ASSOC)): 
                                $id = $categoria_produtos['id'];
                            ?>
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Value of the Day" href="produto_categoria.php?id=<?php echo $categoria_produtos['id'];?>"><?php echo $categoria_produtos['categoria'] ?></a>
                                </li>
                            <?php endwhile ?>
                            </ul>
                        </div>
                        <!-- .departments-menu -->
                        <form class="navbar-search" method="POST" action="pesquisa.php">
                            <label class="sr-only screen-reader-text" for="search">Search for:</label>
                            <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="pesquisar" placeholder="O que está precisando ;)" />
                                
                                <!-- .input-group-addon -->
                                <div class="input-group-btn input-group-append">
                                    <input type="hidden" id="search-param" name="post_type" value="product" />
                                    <button type="submit" class="btn btn-primary" style="background-color: #00bebe; border:0px">
                                        <i class="fa fa-search"></i>
                                        <span class="search-btn">    </span>
                                    </button>
                                </div>
                                <!-- .input-group-btn -->
                            </div>
                            <!-- .input-group -->
                        </form>
                       
                        <!-- .header-compare 
                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="wishlist.html" class="nav-link">
                                    <i class="tm tm-shopping-bag"></i>
                                   
                                </a>
                            </li>
                        </ul>-->
                        <!-- .header-wishlist -->
                       <!-- <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="animate-dropdown dropdown ">
                                <a class="cart-contents" href="cadastro_anunciante/index.html">
                                    <i class="tm tm-login-register"></i>
                                    <span class="amount">
                                        <span class="price-label"></span>Anunciar</span>
                                </a>   
                            </li>
                        </ul>-->
                    </div>   
                </div>

                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="index.php" class="custom-logo-link" rel="home">
                                    <img class="banner-info" src="logos/logo1.png" style="margin: auto 100px">
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- mobile menu superir e imagem -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <!--<li class="wishlist">
                                        <a href="wishlist.html" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="techmarket-sticky-wrap">
                            <div class="row">
                                <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                    <button class="btn navbar-toggler" type="button">
                                        <i class="tm tm-departments-thin"></i>
                                        <span>Menu</span>
                                    </button>
                                    <div class="handheld-navigation-menu">
                                        <span class="tmhm-close">Close</span>
                                        <ul id="menu-departments-menu-1" class="nav">
                                            <li class="menu-item animate-dropdown">
                                                <a title="Gadgets" href="shop.html">Gadgets</a>
                                            </li>
                                            <li class="menu-item animate-dropdown">
                                                <a title="Virtual Reality" href="shop.html">Virtual Reality</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .handheld-navigation-menu -->
                                </nav>
                                <!-- PESQUISA DO MOBILE -->
                                <div class="site-search">
                                    <div class="widget woocommerce widget_product_search">
                                        <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="O que está precisando ;)" value="" name="s" />
                                            <input type="submit" value="Search" />
                                            <input type="hidden" name="post_type" value="product" />
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                                    <i class="tm tm-login-register"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>
            <!-- .header-v1 -->

            <!-- BANNER -->
             <div class="home-v10-slider home-slider text-in-center">
                <div class="banner small-banner text-in-center">
                    <a href="">
                        <div style="background-size: cover; background-position: center center; background-image: url(banners/fotos/Cadastre-se.png); height: 320px;" class="banner-bg">
                            <div class="caption">
                                <div class="banner-info">
                                    <h3 class="title" style="font-weight: bold; font-size: 35px; color: white">AUMENTE SUA PRODUTIVIDADE EM ATÉ 57%</h3>
                                        <h4 class="sub-title pre-title" style=" font-size: 30px; "><strong style="color: #00bebe;">CADASTRE-SE</strong> <p style="color: white; font-size: 18px">  E RECEBA GRÁTIS DICAS E FERRAMENTAS PARA VOCÊ ATINGIR A ALTA PERFORMANCE</p></h4>
                                </div>
                                <!-- .banner-info -->
                            </div>
                            <!-- .caption -->
                        </div>
                        <!-- .banner-bg -->
                    </a>
                </div>
            </div>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/tether.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="assets/js/hidemaxlistitem.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/hidemaxlistitem.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="assets/js/scrollup.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
        <script type="text/javascript" src="assets/js/pace.min.js"></script>
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        
    </body>
</html> 