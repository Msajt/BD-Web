<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prática #1 - Criando HTML</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <?php
        # Iniciando sessão
        session_start();
    ?>
    
    <h1> Validar usuário </h1>

    <?php
        $email =  $_POST["email"];
        $senha = $_POST["senha"];

        $_SESSION["estaLogado"] = false;
        $_SESSION["email"] = $email;

        # Iniciando conversa com o banco de dados

        $servername = "sql301.epizy.com";
        $username = "epiz_30214730";
        $password = "ynaLJOf5QTd6Ol";
        $dbname = "epiz_30214730_meubanco";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br>";

        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Comparando resultado enviado
            while($row = $result->fetch_assoc()) {
                if($row["email"] == $email && $row["senha"] == sha1($senha)){
                    // esta logado
                    $_SESSION["estaLogado"] = true;
                }
                //echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Senha: " . $row["senha"]. "<br>";
            }
        } else {
            echo "0 resultados";
        }

        if($_SESSION["estaLogado"]){
            header('Location: /home.php');
        } else {
            header('Location: /login.php?msg=Dados invalidos');
        }

        $conn->close();
    ?>

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