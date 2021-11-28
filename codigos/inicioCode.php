<?php 

include('conexao.php');

$sql = "SELECT * FROM `db_bestiarium`.`mundo` ORDER BY `Nome`";

$mundos = mysqli_query($conexao, $sql);

?>