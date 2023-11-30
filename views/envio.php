<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link rel="stylesheet" href="style.css">


    <style>
        #containerEnvio {
            display: flex;
            align-items: center;
            border-radius: 10px;
            left: 50%;
            margin-top: 100px;
            ;
            width: 760px;

            position: relative;
            transform: translate(-50%, -50%);
            background-color: rgba(31, 10, 73, 0.171);


            border: 1px solid #5fb0b7;
            border-bottom: 2px solid #79f3c9;
            border-right: 3px solid #79f3c9;
            color: white;
        }

        #containerEnvio input {


            position: relative;
            align-items: center;
            width: 300px;
        }

        ::placeholder {
            text-align: center;
        }
       
       input:focus{
      border:none;  
      outline: none;
      box-shadow:0px 0.5px 0px #144 ; 
       }
    </style>

</head>

<body>
    <br><br><br><br><br><br><br>
    <div id="containerEnvio">
        <div class="maumau">
      
            <form action="?pagina=envaremail" method="POST">
                <h1 id="logintitle" class="h3 mb-3 fw-normal">Enviar arquivos</h1>
                <div class="form-floating">
                <div class="row">
                 <div class="col">
            
                    <label for="floatingInput"></label>
                    <input type="text" name="emailUser" id="username" placeholder="Digite seu Email" required minlength="4" maxlength="50">

                </div>
                </div>
              
                <div class="form-floating">
                    <label for="floatingPassword"></label>
                    <input type="email" name="EmailDestin"  placeholder="Email de destino" required minlength="4" maxlength="50">
                 
                </div>
                </div>

                <div class="form-floating">

                  

                </div>



               
                <div class="custom-file">
                    <label class="custom-file-label" for="inputGroupFile01">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708z" />
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                        </svg>
                    </label>
                    <input multiple type="file" class="inputfile" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="files">

                </div>
                <br><br>
                <button class="btn btn w-100 " type="submit">Enviar</button>
                <br>



        </div>

        </form>

    </div>

    </div>

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>