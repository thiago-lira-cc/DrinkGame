<?php

$conexao = mysqli_connect("localhost", "root", "") or die ("Não foi possível se conectar ao banco de dados");
$db = mysqli_select_db($conexao, 'drink') or die ("Não foi possível selecionar a base de dados");

?>