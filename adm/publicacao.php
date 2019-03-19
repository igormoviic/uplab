<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <link href="css/lib/dropzone/dropzone.css" rel="stylesheet">
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <div class="container-fluid">
        <!-- Start Page Content -->
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="salvar_publicacao.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">

                 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <div class="input-group input-group-lg">
                              <input type="text" name="titulo" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-lg" placeholder="Titulo do Post">
                          </div>
                      </div>
                      <div class="form-group">
                        <textarea class="textarea_editor form-control" name="primeiro_paragrafo" rows="15" placeholder="Primiero Paragrafo" style="height:450px"></textarea>
                    </div>
                    <div class="card-title">
                        <div class="input-group input-group-lg">
                            <input type="text" name="gatilho_um" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-lg" placeholder="Gatilho mental">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="textarea_editor form-control" name="segundo_paragrafo" rows="15" placeholder="Segundo Paragrafo" style="height:450px"></textarea>
                    </div>

                    <div class="card-title">
                        <div class="input-group input-group-lg">
                            <input type="text" name="gatilho_dois" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-lg" placeholder="Gatilho mental">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="textarea_editor form-control" name="terceiro_paragrafo" rows="15" placeholder="Terceiro Paragrafo" style="height:450px"></textarea>
                    </div>

                    <div class="card-title">
                        <div class="input-group input-group-lg">
                            <input type="text" name="gatilho_tres" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-lg" placeholder="Gatilho mental">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="textarea_editor form-control" name="conclusao" rows="15" placeholder="Conclusão" style="height:450px"></textarea>
                    </div>
                    <input name="SendCadImg" type="submit" value="Cadastrar">
                    <a href="index.php"  class="btn btn-inverse" >Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/lib/dropzone/dropzone.js"></script>
</body>
</html>