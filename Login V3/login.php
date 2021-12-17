<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login de usuário</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <header>
        <h2> Login</h2>
    </header>

    <span>
        <?php 
           if($_GET["msg"]){
               echo $_GET["msg"];
           } 
        ?>
        <br>
    </span>
    
    
    <a href='index.php'> Página inicial </a>

    
    <form action='/validar_usuario.php' method='post'>
        
        E-mail: <input type='text' name='email'><br>
        
        Senha: <input type='password' name='senha'><br>
        
        <input type='submit' value='Logar'>
    </form>

    <footer>
        <p> Site para fins educacionais </p>
    </footer>

</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>

    <!--
    <span>
        <?php 
           if($_GET["msg"]){
               echo $_GET["msg"];
           } 
        ?>
        <br>
    </span>
    -->

    <div class="login-form">
        <form action="/validar_usuario.php" method="post">
            <h2 class="text-center">Log in</h2>
            <!-- Usuario -->      
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Usuário" required="required">
            </div>
            <!-- Senha -->
            <div class="form-group">
                <input type="password" name="senha" class="form-control" placeholder="Senha" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>       
        </form>
        <p class="text-center"><a href="/index.php">Retorne a página inicial</a></p>
        <p class="text-center"><a href="/cadastro.php">Crie sua conta</a></p>
    </div>

    <!--
    <span>
        <br>
        <div class="card text-white bg-danger mb-4">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php 
                        if($_GET["msg"]){
                            echo $_GET["msg"];
                        } 
                    ?> 
                </h5>
            </div>
        </div>
    </span>
    -->
    
    <span>
        <?php 
            if($_GET["msg"]){
                echo 
                "
                <div class='card text-white bg-danger mb-4>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>".$_GET["msg"]."</h5>
                    </div>
                </div>
                ";
            }
        ?>
    </span>

</body>
</html>