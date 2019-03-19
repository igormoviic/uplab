 <?php

 require_once 'conexao/init.php';
  // abre a conexão
 $PDO = db_connect();


  // SQL para selecionar os registros
 $sql_menu = "SELECT * FROM menunav";

  // seleciona os registros
 $bd_menu = $PDO->prepare($sql_menu);
 $bd_menu->execute();

 ?>
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <?
                while ($banner = $bd_menu->fetch(PDO::FETCH_ASSOC)):?>
                    <div class="col-md-3 " >

                        <div class="card <? echo $banner[img]; ?> p-20" >

                            <div class="media widget-ten" >
                                <!-- Icon -->
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bag f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><? echo $banner['dados'] ?></h2>
                                    <p class="m-b-0"><? echo $banner['nome'] ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                <? endwhile ?>
            </div>

