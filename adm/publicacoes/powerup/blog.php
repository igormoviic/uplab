
<!DOCTYPE html>
<html lang="pt-br" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
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
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    Blog
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <?php
                include("post.php")
                ?>


                <div id="secondary" class="sidebar-blog widget-area" role="complementary">
                    
                    <!-- .widget_search -->
                    <?php
                    include("quemsomos.php")
                    ?>
                    <!-- .widget_text -->
                    <?php
                    include("categoria.php")
                    ?>
                    <!-- .widget_categories -->
                    <?php
                    include("publicidade.php")
                    ?>
                    <!-- .techmarket_posts_carousel_widget -->
                    <?php
                    include("tags.php")
                    ?>
                    <!-- .widget_tag_cloud -->
                </div>
                <!-- .sidebar-blog -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
    <?php
    include("rodape.php");
    ?>

    <!-- .site-footer -->


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