<?php
    include "conectar.php";
    $vez = $_GET['vez'];
    if ($vez==1){
        $s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j1 FROM jogadores"));
        $j = $s1['j1'];
        $pontos = $j+3;
        $sql2 = "UPDATE jogadores SET j1=$pontos WHERE id=1;";
        mysqli_query($conexao, $sql2);
    }
    if ($vez==2){
        $s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j2 FROM jogadores"));
        $j = $s1['j2'];
        $pontos = $j+3;
        $sql2 = "UPDATE jogadores SET j2=$pontos WHERE id=1;";
        mysqli_query($conexao, $sql2);
    }
    if ($vez==3){
        $s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j3 FROM jogadores"));
        $j = $s1['j3'];
        $pontos = $j+3;
        $sql2 = "UPDATE jogadores SET j3=$pontos WHERE id=1;";
        mysqli_query($conexao, $sql2);
    }
    if ($vez==4){
        $s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j4 FROM jogadores"));
        $j = $s1['j4'];
        $pontos = $j+3;
        $sql2 = "UPDATE jogadores SET j4=$pontos WHERE id=1;";
        mysqli_query($conexao, $sql2);
    }
    if ($vez==5){
        $s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j5 FROM jogadores"));
        $j = $s1['j5'];
        $pontos = $j+3;
        $sql2 = "UPDATE jogadores SET j5=$pontos WHERE id=1;";
        mysqli_query($conexao, $sql2);
    }
    
    header("Refresh: 0");
?>