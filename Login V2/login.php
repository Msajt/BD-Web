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

    <!-- Direcionando para a página inicial -->
    <a href='index.php'> Página inicial </a>

    <!-- Formulário de entrada de dados -->
    <form action='/validar_usuario.php' method='post'>
        <!-- Entrada do email -->
        E-mail: <input type='text' name='email'><br>
        <!-- Entrada da senha -->
        Senha: <input type='password' name='senha'><br>
        <!-- Enviando dados -->
        <input type='submit' value='Logar'>
    </form>

    <footer>
        <p> Site para fins educacionais </p>
    </footer>

</body>
</html>