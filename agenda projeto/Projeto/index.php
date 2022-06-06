<?php
    // Iniciamos a sessão em todas paginas que vamos usar ela, deve ser sempre a 1 coisa no arquivo!
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chamamos nosso CSS Base -->
    <link rel="stylesheet" href="assets/csslindo.css">
    <!-- Agora vamos veriricar se na sessão devemos fazer alguma troca no css e aplicamos a partir da tag <style> e da variavel de sessão -->
    <?php
        /* Verificando se a fcor foi definido na sessão */ 
        if(isset($_SESSION['fcor'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube::before{
                    background: $_SESSION[fcor];
                }
                </style> 
            "; 
        }
        /* Verificando se a fcor1 foi definido na sessão */ 
        if(isset($_SESSION['fcor1'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube::after{
                    background: $_SESSION[fcor1];
                }
                </style> 
            "; 
        }
        /* Verificando se a fcor2 foi definido na sessão */ 
        if(isset($_SESSION['fcor2'])){
            /* Aplicando CSS enviado */ 
            echo "<style> 
                .cube{
                    background: $_SESSION[fcor2];
                }
                </style> 
            "; 
        } 
    ?>
    <title>Document</title>
</head>
<body>


    <!-- Formulario onde vamos pegar os valores a serem trocados -->
    <form action="processa.php" method="post">
        <p><input type="text" name="fcor" id="" placeholder="Topo" value="<?php if(isset($_SESSION['fcor'])){ echo $_SESSION['fcor']; } ?>"></p>
        <p><input type="text" name="fcor1" id="" placeholder="Lado" value="<?php if(isset($_SESSION['fcor1'])){ echo $_SESSION['fcor1']; } ?>"></p>
        <p><input type="text" name="fcor2" id="" placeholder="Centro" value="<?php if(isset($_SESSION['fcor2'])){ echo $_SESSION['fcor2']; } ?>"></p>
        <p><input type="submit" value="Enviar"><input type="submit" value="Limpar" name="limpar"></input></p>
    </form>
    <!-- Interface do Cubo, ele foi feito no CSS, aqui so esta a div -->
    <div class="container">
       <p class="cubo"><div class="cube"></div></p> 
    </div>
</body>
</html>