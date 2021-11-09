<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Atualizar</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <h1> Atualizar... </h1>
    
    <?php
        # Variáveis de entrada
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $id = $_POST["id"];

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

        if(strlen($_POST["senha"]) > 0){
            $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE id=".$id;
        } else {
            $sql = "UPDATE usuario SET nome='".$nome."', email='".$email."' WHERE id=".$id;
        }

        if ($conn->query($sql) === TRUE) {
            header('Location: /home.php?msg=Usuario atualizado!');
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