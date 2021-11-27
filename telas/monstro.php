<?php 
    session_start();

    if(isset($_GET['id']) != 0){

        $_SESSION['monstro_id'] = $_GET['id'];
    }

    require_once '../codigos/monstroCode.php';
    require_once '../codigos/feedbackCode.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monstro</title>

    <link rel="stylesheet" href="../src/monstro-style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <script language="JavaScript" src="../codigos/comentarios.js"></script>
</head>

<body>
    <header>
        <nav>
            <img src="https://i.ibb.co/ZXwDCP9/LOGO.png" class="nav-image" />

            <!-- <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div> -->

            <!-- <div class="nav-list">
            <li><a href='./index.html'>Mundo</a></li>
            <li><a href='./index2.html'>Categorias</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Contato</a></li>
          </div> -->
        </nav>
    </header>

    <main class="body">
        <div class="monster-area">
            <div class="title-and-container">
                <p class="title"><?php echo $monstro['Nome'] ?></p>

                <div class="container">
                    <img src="<?php echo $monstro['ImgLink'] ?>" class="monster-image" />

                    <p class="monster-description">
                        <a class="monster-description-title">DESCRIÇÃO:</a><?php echo " ".utf8_encode($monstro['Descricao']) ?>
                    </p>
                </div>
            </div>

            <div class="title-and-container">
                <p id="left"class="title" style="color: transparent"> </p>

                <div class="container">
                    <ul class="monster-description-ul">
                        <li class="monster-description">
                            <a class="monster-description-title">COMPORTAMENTO:</a><?php echo " ".utf8_encode($monstro['Comportamento']) ?>
                        </li>
                        <li class="monster-description">
                            <a class="monster-description-title">DROP:</a><?php echo " ".utf8_encode($monstro['Drops']) ?>
                        </li>
                        <li class="monster-description">
                            <a class="monster-description-title">HABITAT:</a><?php echo " ".utf8_encode($monstro['Habitat']) ?>
                        </li>
                        <li class="monster-description">
                            <a class="monster-description-title">TÁTICA DE COMBATE:</a><?php echo " ".utf8_encode($monstro['TaticadeCombate']) ?>
                        </li>
                        <li class="monster-description">
                            <a class="monster-description-title">FRAQUEZA:</a><?php echo " ".utf8_encode($monstro['Fraqueza']) ?>
                        </li>
                        <li class="monster-description">
                            <a class="monster-description-title">OUTROS:</a><?php echo " ".utf8_encode($monstro['Outros']) ?>
                        </li>
                    </ul>

                    <div class="button-inicial">
                        <p class="button-inicial-text"><a href="inicio.php">PAGINA INICIAL</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="comentary">
            <form action="" method="post">
                <div class="input-and-button">
                    <input type="text" name="nome" placeholder="NOME:" class="input-comentary">
                    <input type="submit" value="ENVIAR" class="button-comentary">
                </div>
                <input type="text" id="comentary" name="comentario" placeholder="COMENTÁRIO:" class="input-comentary">
            </form>

            <div class="comentary-section">
                <?php
                    if($quant != 0){
                        foreach($feedbacks as $feedback){
                ?>
                <div class="comentary-container">
                    <p class="comentary-text">NOME:<?php echo " ".utf8_encode($feedback['Nome']) ?></p>
                    <p class="comentary-text">COMENTÁRIO:<?php echo " ".utf8_encode($feedback['Comentario']) ?></p>
                </div>
                <?php 
                    }
                    }else{
                ?>
                <div class="comentary-container">
                    <p class="comentary-text">SEM COMENTÁRIOS POR ENQUANTO, SEJA O PRIMEIRO A COMENTAR</p>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>

    </main>
</body>

</html>
