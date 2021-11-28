<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'db_bestiarium');
define('PORT','3307');

// $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or die ('Não foi possível conectar');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or die (mysqli_connect_error());