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

    <!-- Direcionando para a página inicial -->
    <a href='index.php'> Página inicial </a>

    <!-- Formulário de entrada de dados -->
    <form action='/salvar.php' method='post'>
        <!-- Entrada do email -->
        E-mail: <input type='text' name='email'><br>
        <!-- Entrada do nome -->
        Nome: <input type='text' name='nome'><br>
        <!-- Entrada da senha -->
        Senha: <input type='password' name='senha'><br>
        <!-- Enviando dados -->
        <input type='submit' value='Cadastrar'>
    </form>

    <footer>
        <p> Site para fins educacionais </p>
    </footer>

</body>
</html>