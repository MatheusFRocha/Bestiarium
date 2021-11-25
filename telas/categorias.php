<?php 
  session_start();

  if(isset($_GET['id']) != 0){

    $_SESSION['mundo_id'] = $_GET['id'];
    $mundo_nome = $_GET['name'];
  }

   require_once '../codigos/categoriasCode.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiarium</title>

    <link rel="stylesheet" href="../src/categorias-style.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav>
      <img src="https://i.ibb.co/ZXwDCP9/LOGO.png" class="nav-image"/>

      <!-- <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

      <div class="nav-list">
        <!-- <li><a href='./index.html'>Mundo</a></li> -->
        <!-- <li><a href='./index2.html'>Categorias</a></li> -->
        <!-- <li><a href="#">Forum</a></li>
        <li><a href="#">Contato</a></li>
      </div> -->
    </nav>
  </header>
  
      <main class="body">
        <p class="body-welcome">AQUI SÃO LISTADAS AS CATEGORIAS DAS CRIATURAS DO MUNDO SELECIONADO</p>
        <div class="world-category-general">

          <div class="world-category-container">
            <p class="world-category-title">CATEGORIAS</p>
            
            <div class="world-category-list">
              <ul class="world-category-ul">
                <?php 
                  foreach($categorias as $categoria){
                ?>
                <li class="world-category-list-item"><?php echo utf8_encode($categoria['Nome']) ?></li>
                <?php 
                  }
                ?>
              </ul>
            </div>
          </div>
               
          <div class="world-monsters-container">
            <p class="world-monsters-title"><?php echo utf8_encode($mundo_nome) ?></p>
            <div class="world-monsters-list">
              <ul class="world-category-ul">
                <!-- <li class="world-monsters-list-item">Abaya</li>
                <li class="world-monsters-list-item">Afogador</li>
                <li class="world-monsters-list-item">Afogador-Mortal</li>
                <li class="world-monsters-list-item">Barrosos</li>
                <li class="world-monsters-list-item">Bruxa-Aquática</li>
                <li class="world-monsters-list-item">Bruxa-Sepulcral</li> -->
              </ul>
            </div>
          </div>
        </div>
      </main>
      <script src="mobile-navbar.js"></script>
  
</body>
</html>