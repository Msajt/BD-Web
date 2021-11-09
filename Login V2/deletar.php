<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desenvolvimento de Banco de Dados para WEB</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    
    <?php

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

        $sql = "DELETE from usuario WHERE id='".$_POST['id']."'";
        

        if ($conn->query($sql) === TRUE) {
            header('Location: /home.php?msg=Usuario removido com sucesso!');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>

</body>
</html>