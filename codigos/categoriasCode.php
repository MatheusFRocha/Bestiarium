<?php 

include('conexao.php');

$id = $_SESSION['mundo_id'];

$sql = "SELECT `db_bestiarium`.`categoria`.`Nome`, COUNT(`monstro`.`nome`) AS quant FROM `db_bestiarium`.`categoria`
        INNER JOIN `db_bestiarium`.`monstro` ON `categoria`.`id` = `monstro`.`Id_Categoria`
        WHERE `monstro`.`Id_Mundo` = '$id'
        GROUP BY `categoria`.`id`;";

$categorias = mysqli_query($conexao, $sql);

?>