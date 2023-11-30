<style>
    #msglogin {
        margin-top: 10px;
        font-size: 40px;
        font-family: 'ZT Mota', sans-serif;
        font-weight: 20px;

            color: white;


    }

    #msgloginErro {
        color: white;
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
    button{
        margin-top: 40px;
    }
</style>







</div>

<?php

include_once("config.php");
$conexao = conectar();

$login = $_POST['username'];
$senha = $_POST['senha'];

$pesquisa = $login;
$pesquisa2 = $senha;
            
$sql =
    "SELECT login_user,senha_user FROM tb_usuario           
WHERE login_user LIKE '$pesquisa' && senha_user LIKE '$pesquisa2'";

$pesquisa = mysqli_query($conexao,$sql);

if(mysqli_num_rows($pesquisa) >0){
    echo "<center id='msglogin'><p>SEJA BEM VINDO</p></center>";
    

}else{
    echo "<center id='msgloginErro'><p>USUARIO NÃO ENCONTRADO</p></center>";
    
}






/*O uso da diretiva $, é o que chamamos de super variaveis globais no PHP
temos varias exemplos $_GET[] -- $_POST[] -- $_SESSION[] */



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="home.php">
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

                              
                            </div>
                            <?php
                            if(mysqli_num_rows($pesquisa) >0){
                                            echo " <p class='nomeUser'>Nome de Usuário:</p>";
                            echo "<h4 class='mb-2'>" . $_POST['username'] . "</h4>";
                            }
                            else{
                                echo "Digite o Usuário ou senha corretamente";
                                echo ' <button type="button" class="btn btn-primary btn-rounded btn-lg"><a href="?pagina=logar">
                                 Tentar novamente</a> </button>';
                            }
                            ?>
                            <div class="mb-4 pb-2">



                            </div>
                           
                              
                           
                           



    </section>


</body>

</html>