<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuários</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <header>
        <h2> Cadastro... </h2>
    </header>

    
    <a href='index.php'> Página inicial </a>

    
    <form action='/salvar.php' method='post'>
        
        E-mail: <input type='text' name='email'><br>
        
        Nome: <input type='text' name='nome'><br>
       
        Senha: <input type='password' name='senha'><br>
        
        <input type='submit' value='Cadastrar'>
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

    <div class="login-form">
        <form action="/salvar.php" method="post">
            <h2 class="text-center">Cadastro</h2>
            <!-- Email -->
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <!-- Usuario -->      
            <div class="form-group">
                <input type="text" name="nome" class="form-control" placeholder="Usuário" required="required">
            </div>
            <!-- Senha -->
            <div class="form-group">
                <input type="password" name="senha" class="form-control" placeholder="Senha" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>       
        </form>
        <p class="text-center"><a href="/index.php">Retorne a página inicial</a></p>
    </div>

</body>
</html>