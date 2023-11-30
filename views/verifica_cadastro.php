<style>
    #msglogin {
        margin-top: 10px;
        font-size: 40px;
        font-family: 'ZT Mota', sans-serif;
        font-weight: 20px;




    }

    #msgloginErro {
        margin-top: 10px;
        font-size: 40px;
        font-family: 'ZT Mota', sans-serif;
        font-weight: 20px;
        text-decoration: underline red;

    }

    .nomeUser {
        font-size: 30px;
        font-family: 'ZT Mota', sans-serif;
        text-decoration: underline #0B001F;



    }

    .card {
        background-color: rgba(31, 10, 73, 0.171);



        border: 1px solid #5FB0B7;
        border-bottom: 2px solid #79F3C9;
        border-right: 3px solid #79F3C9;
        color: white;
    }
    a{
        text-decoration: none;
        color: white;
    }
    a:visited {
        text-decoration:none;
}
</style>



</div>

<?php

include_once("config.php");
$conexao = conectar();

$nome = $_POST['nome'];
$login = $_POST['username'];
$senha = $_POST['senha'];





$sql = "
INSERT INTO tb_usuario(nome_user,login_user,senha_user)
VALUES ('$nome','$login','$senha');";


$insere = mysqli_query($conexao,$sql);

 


if ($insere) {

    echo "<center id='msglogin' style='color:white;'><p>CADASTRO COM SUCESSO</p></center>";
}
else if($nome == ' ' || $login == ' ' || $senha == ' '){
    echo "<center id='msgloginErro'><p>ERRO NO CADASTRO</p></center>";
    
}
 else {
    echo "<center id='msgloginErro'><p>ERRO NO CADASTRO</p></center>";
    echo '<a href="logar.php">Voltar Para a página de login</a>';
}



 


echo "<br><br><br><br>";
/*O uso da diretiva $, é o que chamamos de super variaveis globais no PHP
temos varias exemplos $_GET[] -- $_POST[] -- $_SESSION[] */



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="home.php">
    <link rel="stylesheet" href="?pagina=config"">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>





    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-4">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                            <div class="mt-3 mb-4">

                                <p class="nomeUser">Nome de Usuário:</p>
                            </div>
                            <?php
                            if ($insere) {
                            echo "<h4 class='mb-2'>" . $_POST['username'] . "</h4>";
                            }
                            else if($nome == ' ' || $login == ' ' || $senha = ' '){
                                echo "<h4 class='mb-2'> TENTE NOVAMENTE</h4>";
                               " <button type='button' class='btn btn-primary btn-rounded btn-lg'  >
                                <a  href='?pagina=cadastro'>Voltar a Home</a>";
                            }
                            ?>
                            <div class="mb-4 pb-2">



                            </div>
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg" name="home" >
                            <a  href="?pagina=cadastro" class="continua">Novo Cadastro</a> 
                            </button>
                            <button type="submit" class="btn btn-primary btn-rounded btn-lg" name="home" >
                            <a  href="?pagina=home" class="continua">Voltar a Home</a> 
                            </button>


                            <div class="d-flex justify-content-between text-center mt-5 mb-2">








    </section>


</body>

</html>