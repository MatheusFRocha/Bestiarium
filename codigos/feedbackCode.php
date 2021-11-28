<?php
    //include('conexao.php');

    $id = $_SESSION['monstro_id'];

    $sql = "SELECT * FROM `db_bestiarium`.`feedback`
            WHERE `Id_Monstro` = '$id'";

    $sql2 = "SELECT COUNT(*) AS 'quant' FROM `db_bestiarium`.`feedback`
             WHERE `Id_Monstro` = '$id'";

    $feedbacks = mysqli_query($conexao, $sql);
    $feedCount = mysqli_query($conexao, $sql2);

    foreach($feedCount as $count){
        $quant = $count['quant'];
    }
?>