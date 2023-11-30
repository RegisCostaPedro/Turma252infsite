

<br><br><br><br><BR><BR>
<style>

</style>
<link rel="stylesheet" href="style.css">
<div id="containerCadastro">
    <div class="maumau">
        <form action="?pagina=cadastrar" method="POST">
            <h1 id="logintitle" class="h3 mb-3 fw-normal">CADASTRAR</h1>
            <div class="form-floating">
            <input type="hidden" id="id" name="id">
                <label for="floatingPassword"></label>
                <input type="text" name="nome" id="nome" placeholder="name" required minlength="4" maxlength="50">

            </div>
            <div class="form-floating">
                <label for="floatingInput"></label>
                <input type="text" name="username" id="username" placeholder="Username" required minlength="4" maxlength="50">

            </div>
           
            <div class="form-floating">
                <label for="floatingPassword"></label>
                <input type="password" name="senha" id="inputPassword" placeholder="Password" required minlength="4" maxlength="50">
             

            </div>
            <button class="btn btn w-100" type="submit">Cadastrar</button>
           <br>
   
    </div>
   
    </form>
 
</div>

</div>
