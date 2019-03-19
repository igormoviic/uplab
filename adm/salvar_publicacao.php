<?php

session_start();
include_once 'conexao/conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE

    
    $primeiro_paragrafo = $_POST['primeiro_paragrafo'];
    $gatilho_um  = $_POST['gatilho_um'];
    $segundo_paragrafo   = $_POST['segundo_paragrafo'];
    $gatilho_dois    = $_POST['gatilho_dois'];
    $terceiro_paragrafo  = $_POST['terceiro_paragrafo'];
    $titulo = $_POST['titulo'];
    $gatilho_tres = $_POST['gatilho_tres'];
    $conclusao = $_POST['conclusao'];
    
        
    $result_post = "INSERT INTO publicacao (primeiro_paragrafo,gatilho_um   ,segundo_paragrafo  ,gatilho_dois   , terceiro_paragrafo    , titulo, gatilho_tres, conclusao ) VALUES ('$primeiro_paragrafo', '$gatilho_um ', '$segundo_paragrafo  ', '$gatilho_dois ', '$terceiro_paragrafo   ', '$titulo', '$gatilho_tres', '$conclusao')";
    $resultado_post = mysqli_query($conn, $result_post);
    
    if(mysqli_affected_rows($conn) > 0){ 
        header('Location: pag_img.php');    
    }else{
        echo "Artigo não foi salvo com sucesso";    
    }
