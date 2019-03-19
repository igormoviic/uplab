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
    <title>Administrativo</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
         <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
     </div>
     <div id="main-wrapper">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">

                                <h4>Login</h4>
                                <form method="POST" action="valida.php">
                                    <div class="form-group">
                                        <label>E-mail </label>
                                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="Password" name="senha" class="form-control" placeholder="Senha">
                                    </div>

                                    <button type="submit" name="btnLogin" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <!--<div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div>-->
                                </form>
                                <p class="text-center text-danger">
                                    <?php if(isset($_SESSION['loginErro'])){
                                        echo $_SESSION['loginErro'];
                                        unset($_SESSION['loginErro']);
                                    }?>
                                </p>
                                <p class="text-center text-success">
                                    <?php 
                                    if(isset($_SESSION['logindeslogado'])){
                                        echo $_SESSION['logindeslogado'];
                                        unset($_SESSION['logindeslogado']);
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>