<?php 
    session_start();
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $comentario = mysqli_real_escape_string($conexao, trim($_POST['comentario']));
    $id = $_SESSION['monstro_id'];

    if(empty($_POST['nome']) || empty($_POST['comentario'])) {
        header('Location: ../telas/monstro.php?id='+ $id);
        exit();
    }

    $sql = "INSERT INTO `db_bestiarium`.`feedback`(`Id_monstro`,`Nome`,`Comentario`) VALUES ('$id','$nome','$comentario')";

    if($conexao->query($sql) === TRUE){
        $_SESSION['all_right'] = true;
    }else{
        echo 'Exception';
    }

    $conexao->close();

    header('Location: ../telas/monstro.php?id='.$id);

?>