<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Salvar</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <h1> Salvar... </h1>
    
    <?php
        # Variáveis de entrada
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);

        # Informações do banco de dados
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

        $sql = "INSERT INTO usuario (nome, email, senha)
        VALUES ('".$nome."', '".$email."', '".$senha."')";

        if ($conn->query($sql) === TRUE) {
            header('Location: /index.php?msg=Usuario cadastrado!');
            exit;
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>

    <!-- Direcionando para a página inicial -->
    <a href='index.php'> Página inicial </a>

</body>
</html>