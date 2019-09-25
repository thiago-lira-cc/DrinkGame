<?php
    include "conectar.php";
    $sql = "UPDATE jogadores SET j1=0, j2=0, j3=0, j4=0, j5=0 WHERE id=1;";
    mysqli_query($conexao, $sql);
    header('Location: index.php');
?>