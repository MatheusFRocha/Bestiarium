<?php
    include('conexao.php');

    $id = $_SESSION['monstro_id'];

    $sql = "SELECT * FROM `db_bestiarium`.`monstro`
            WHERE `Id` = '$id'";

    $monstros = mysqli_query($conexao, $sql);

    foreach($monstros as $m){
        $monstro = $m;
    }
?>