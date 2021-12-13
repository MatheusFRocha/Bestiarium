<?php
session_start();
require_once '../codigos/inicioCode.php';

$_SESSION['monstros'] = [];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bestiarium</title>

  <link rel="icon" type="image/png" href="https://i.ibb.co/ZXwDCP9/LOGO.png">
  <link rel="stylesheet" href="../src/inicio-style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>
  <header>
    <nav>
      <img src="https://i.ibb.co/ZXwDCP9/LOGO.png" class="nav-image" />


      <div class="mobile-menu">
        <!----  --->
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>

      <div class="nav-list">
      </div>
    </nav>
  </header>

  <main class="body">
    <p class="body-welcome">BEM VINDOS À ENCICLOPÉDIA DAS CRIATURAS</p>
    <p class="body-title">MUNDOS</p>

    <div class="world-items">
      <?php
      foreach ($mundos as $mundo) {
      ?>
        <div class="world-container" onclick="
            location.replace('./categorias.php?id=<?php echo $mundo['Id'] ?>&name=<?php echo $mundo['Nome'] ?>');
          ">

          <div class="image-and-name">
            <div class="world-image-container">
              <img class="world-image" src="<?php echo utf8_encode($mundo['imglink']) ?>" />
            </div>

            <p class="world-name"><?php echo utf8_encode($mundo['Nome']) ?></p>
          </div>


          <p class="world-description"><?php echo utf8_encode($mundo['DescricaoPag']) ?></p>
        </div>
      <?php
      }
      ?>
    </div>

  </main>


</body>

</html>