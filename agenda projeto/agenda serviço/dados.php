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
    if(isset($_POST['fcor3'])){
        $_SESSION['fcor3'] = $_POST['fcor3'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor4'])){
        $_SESSION['fcor4'] = $_POST['fcor4'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor5'])){
        $_SESSION['fcor5'] = $_POST['fcor5'];
    }
    if(isset($_POST['fcor6'])){
        $_SESSION['fcor6'] = $_POST['fcor6'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor7'])){
        $_SESSION['fcor7'] = $_POST['fcor7'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor8'])){
        $_SESSION['fcor8'] = $_POST['fcor8'];
    }
    if(isset($_POST['fcor9'])){
        $_SESSION['fcor9'] = $_POST['fcor9'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor10'])){
        $_SESSION['fcor10'] = $_POST['fcor10'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor11'])){
        $_SESSION['fcor11'] = $_POST['fcor11'];
    }
    if(isset($_POST['fcor12'])){
        $_SESSION['fcor12'] = $_POST['fcor12'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor13'])){
        $_SESSION['fcor13'] = $_POST['fcor13'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor14'])){
        $_SESSION['fcor14'] = $_POST['fcor14'];
    }
    if(isset($_POST['fcor15'])){
        $_SESSION['fcor15'] = $_POST['fcor15'];
    }
    /* Verificando se a fcor1 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor16'])){
        $_SESSION['fcor16'] = $_POST['fcor16'];
    }
    /* Verificando se a fcor2 foi enviada e salvando na sessão */ 
    if(isset($_POST['fcor17'])){
        $_SESSION['fcor17'] = $_POST['fcor17'];
    
    }

    if(isset($_POST['limpar'])){
        /* Apagando todos valores da sessão / Resetando valores para o CSS base */ 
        session_destroy();
        
    }

    echo "<script> location.href='./'; </script>";

?>