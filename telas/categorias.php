<?php
session_start();

if (isset($_GET['id']) != 0) {

  $_SESSION['mundo_id'] = $_GET['id'];
  $_SESSION['mundo_nome'] = $_GET['name'];
}

$mundo_nome = $_SESSION['mundo_nome'];

require_once '../codigos/categoriasCode.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bestiarium</title>

  <link rel="icon" type="image/png" href="https://i.ibb.co/ZXwDCP9/LOGO.png">
  <link rel="stylesheet" href="../src/categorias-style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <img src="https://i.ibb.co/ZXwDCP9/LOGO.png" class="nav-image" />
      <p class="return-icon" onclick="location.replace('./inicio.php')">↩</p>
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
            foreach ($categorias as $categoria) {
            ?>
              <li class="world-category-list-item" onclick="location.replace('../codigos/cateMonstroCode.php?id=<?php echo $categoria['Id'] ?>&id2=<?php echo $_SESSION['mundo_id'] ?>')">
                <?php echo utf8_encode($categoria['Nome'])." (". $categoria['quant'] . ")" ?>
              </li>
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
            <?php
            foreach ($_SESSION['monstros'] as $monstro) {
            ?>
              <li class="world-monsters-list-item" onclick="
                    location.replace('./monstro.php?id=<?php echo utf8_encode($monstro['Id']) ?>');
                  ">
                <?php echo $monstro['Nome'] ?>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <script src="mobile-navbar.js"></script>

</body>

</html>