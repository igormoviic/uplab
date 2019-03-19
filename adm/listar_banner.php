 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="description" content="">
 	<meta name="author" content="">
 	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
 	<title>Administrativo</title>
 	<link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
 	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
 	<link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
 	<!-- Bootstrap Core CSS -->
 	<link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
 	<link href="css/helper.css" rel="stylesheet">
 	<link href="css/style.css" rel="stylesheet">
 </head>
 <?php
 include("cabecalho.php");

 include("menu_lateral.php");

 include("menu_superior.php");


 ?>
 <?php

 require_once 'conexao/init.php';
  // abre a conexão
 $PDO = db_connect();


  // SQL para selecionar os registros
 $sql_banner = "SELECT * FROM banner";

  // seleciona os registros
 $bd_banner = $PDO->prepare($sql_banner);
 $bd_banner->execute();

 ?>


 <div class="container-fluid">
 	<!-- Start Page Content -->
 	<div class="row">
 		<?
 		while ($banner = $bd_banner->fetch(PDO::FETCH_ASSOC)):?>
 			<div class="col-lg-12 col-md-12 " >
 				<div class="card  p-20">
 					<div class="media widget-ten">
 						<div class="media-body media-text-right">
 							<a class="woocommerce-LoopProduct-link"  href="visualizar_produto.php?id=<?php echo $banner['id']; ?>"><img class="img-fluid w-100" style="height: 150px;" src="../banners/fotos/<?php echo $banner['img']; ?>" alt="<?php echo $banner['img']; ?>">
 							</div>
 						</div>
 					</div>
 				</div>
 				<?php endwhile; ?>