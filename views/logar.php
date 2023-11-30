

<br><br><br><br><BR><BR>
<style>
body{
   background-image: url(img/bglgcad.png);  
    background-repeat: no-repeat;
    background-size: cover;
    

}

</style>
<section>
<link rel="stylesheet" href="style.css">



<div id="containerLogin">
<div class="maumau">

        <form action="?pagina=verificar" method="POST">
            <h1 id="logintitle" class="h3 mb-3 fw-normal">LOG IN</h1>
            <div class="form-floating">

                <input type="hidden" id="id" name="id" value="<?= $id?>">
                <label for="floatingInput"></label>
                <input type="text" name="username" id="username" placeholder="Username" required>

            </div>
          
            <div class="form-floating">
                <label for="floatingPassword"></label>
                <input type="password" name="senha" id="inputPassword" placeholder="Password" required >

            </div>
            <button class="btn btn w-100 " type="submit">Log in</button>
           <br>
   <p>Não tem uma conta? <a href="?pagina=cadastro" class="noAcc">Clique aqui.</a></p>
    </div>
   
    </form>
 
</div>

</div>
