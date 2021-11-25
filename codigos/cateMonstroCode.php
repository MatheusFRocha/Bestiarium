<?php

// include('conexao.php');

session_start();

if (isset($_GET['id']) & isset($_GET['id2'])) {
    $_SESSION['categoria_id'] = $_GET['id'];
    $mundo_id = $_GET['id2'];
}

$categoria_id = $_SESSION['categoria_id'];

// $sql = "SELECT `Nome` FROM `db_bestiarium`.`monstro` WHERE `monstro`.`Id_Categoria` = '$categoria_id' AND `monstro`.`Id_Mundo` = '$mundo_id'";

// $monstros = mysqli_query($conexao, $sql);

$dbh = new PDO('mysql:host=127.0.0.1:3307;dbname=db_bestiarium', 'root', '');

$sth = $dbh->prepare("SELECT `Id`,`Nome` FROM `db_bestiarium`.`monstro` 
                      WHERE `monstro`.`Id_Categoria` = '$categoria_id' AND `monstro`.`Id_Mundo` = '$mundo_id'");

$sth->execute();

$monstros = $sth->fetchAll(PDO::FETCH_ASSOC);

$_SESSION['monstros'] = $monstros;

// foreach($monstros as $monstro){
//     echo $monstro['Nome'];
// }

header('Location: ../telas/categorias.php');

?>
