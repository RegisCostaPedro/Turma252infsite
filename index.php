<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://fonts.cdnfonts.com/css/zt-mota" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">



    <title>Turma 252</title>

    <style>
        body {
            background-color: #080708;



        }

        /* .titleNavbar {
            margin-left: 60px;
        }*/

        .higor {
            font-size: 18px;
            font-weight: bold;
            color: white !important;
            font-family: 'M PLUS 1p', sans-serif;
            transition: 0.3s;


            border-bottom: 1.5px solid #000;

        }

        .higor:hover {
            font-size: 18px;
            font-weight: bold;


            font-family: 'M PLUS 1p', sans-serif;
            text-shadow: 2px 2px 2px #080708;
        }

        .titleNavbar {
            font-family: 'Racing Sans One', sans-serif;
            text-shadow: 3px 3px 3px #080708;
            color: #fff;

        }

        .rounded-circle {
            width: 50px;
            height: 50px;

            align-items: start;
            margin-left: 20px;
            border: 2px solid white;
        }
    </style>

</head>

<body onload="main()">
    <!--nav class="navbar navbar-expand-lg navbar-dark bg-info fixed top">-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed top" style="background: rgb(0,133,144);
background: linear-gradient(36deg, rgba(0,133,144,1) 0%, rgba(95,176,183,1) 50%, rgba(0,133,144,1) 100%);">











        <a class="navbar-brand" href="?pagina=home" name="home">
            <h1 class="titleNavbar">TURMA 252</h1>
        </a>

        <!-- BOTÃO DO HIGOR-->

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarNavDropdown" ariaa-expanded="false" data-target="#higor">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="higor">
            <ul class="navbar-nav">




                <li class="nav-item mr-2 ml-3">
                    <a class="nav-link higor" href="?pagina=home">HOME<span class="sr-only"></span></a>

                </li>

                <li class="nav-item mr-2 ml-3">
                    <a class="nav-link higor" href="?pagina=downloads">DOWNLOADS<span class="sr-only"></span></a>

                </li>

                <li class="nav-item mr-2 ml-3">
                    <a class="nav-link higor" href="?pagina=logar">LOGAR<span class="sr-only"></span></a>

                </li>

                <li class="nav-item mr-2 ml-3">
                    <a class="nav-link higor" href="?pagina=envio">ENVIO ARQUIVOS<span class="sr-only"></span></a>

                </li>

                <li class="nav-item dropdown mr-2 ml-3 ">
                    <a class="nav-link higor" dropdown-toggle href="#" id="NavBarDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id='disciplinas' onclick="Disc()">DISCIPLINAS<span class="sr-only"></span></a>
                    <div class="dropdown-menu" aria-labelledby="NavBarDrop">
                        <a class="dropdown-item" href="?pagina=matematica">MATEMÁTICA</a>
                        <a class="dropdown-item" href="?pagina=portugues">PORTUGUÊS</a>
                        <a class="dropdown-item" href="?pagina=geografia">GEOGRAFIA</a>
                        <a class="dropdown-item" href="?pagina=historia">HISTÓRIA</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?php



    if (!isset($_GET['pagina'])) {
        include("views/home.php");
    } else {

        $link = $_GET['pagina'];
        switch ($link) {
            case "downloads";
                include("views/downloads.php");
                break;
            case "envio";
                include("views/envio.php");
                break;
            case "logar";
                include("views/logar.php");
                break;
            case "verificar":
                include("views/verifica_login.php");
                break;
            case "home":
                include("views/home.php");
                break;
            case "cadastro":
                include("views/cadastro.php");
                break;

            case "cadastrar":
                include("views/verifica_cadastro.php");
                break;
            case "envaremail":
                include("views/verifica_email.php");
                break;
        }
    }





    ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

<script type="text/javascript">
    function Disc() {
        alert("não entre! página em construção");
        if (window.confirm("Volte para home")) {
            window.location.href = '?pagina=home';
        }


    }

    function main() {
        if (!Cookies.get('boasVindasExibido')) {

            Swal.fire("SEJA BEM VINDO(A)");
            Cookies.set('boasVindasExibido', true, {
                expires: 365
            });

        }


    }
</script>
<script src="sweetalert2/dist/sweetalert2.min.js"></script>


</html>