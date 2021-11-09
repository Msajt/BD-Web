<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prática #1 - Criando HTML</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <h2> Sistema WEB </h2>

    <!-- Messagem de sucesso de cadastro enviada -->
    <span>
        <?php 
           if($_GET["msg"]){
               echo $_GET["msg"];
           } 
        ?>
        <br>
    </span>
    
    <a href='cadastro.php'> Cadastro </a>
    <br>
    <a href='login.php'> Login </a>
    <br>

    <!--
    <div class='container'>
        <div class='title-text'>
            <h2> Minha primeira atividade na disciplina</h2>
            <p></p>
            <h3> Banco de Dados para Web </h3>
        </div>
        <div class='information'>
            <h2> Passos da atividade </h2>
            <ul>
                <li> Criando o HTML </li>
                <li> Criar conta no Infinity Free </li>
                <li> Hospedar a página no servidor </li>
                <li> Fazer o vídeo explicando o que fez </li>
            </ul>
        </div>
    </div>
    -->
</body>
</html>