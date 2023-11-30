<?php
function conectar(){
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $bancoDados = "exercicio_avalia";

    $conexao = mysqli_connect($servidor,$user,$password,$bancoDados);

    return $conexao;
}
?>
