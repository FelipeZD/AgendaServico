<?php
    /* Iniciando Sessão */ 
    session_start();
    /* Verificando se a fcor foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor'])){
        $_SESSION['fcor'] = $_POST['fcor'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor1'])){
        $_SESSION['fcor1'] = $_POST['fcor1'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor2'])){
        $_SESSION['fcor2'] = $_POST['fcor2'];
    }
    /* Verificando se o botão de limpar foi apertado */ 
    if(isset($_POST['limpar'])){
        /* Apagando todos valores da sessão / Resetando valores para o CSS base */ 
        session_destroy();
        
    }
    /* Enviando de volta ao cubo */ 
    echo "<script> location.href='./'; </script>";