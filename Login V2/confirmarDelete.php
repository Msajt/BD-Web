<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prática #1 - Criando HTML</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <?php 
        session_start();

        if($_SESSION["estaLogado"]){
            echo "<h1>Usuário: ".$_SESSION["email"]."</h1>";
            echo "<a href='/logout.php'> Logout </a><br>";

            # Iniciando conversa com o banco de dados
            $servername = "sql301.epizy.com";
            $username = "epiz_30214730";
            $password = "ynaLJOf5QTd6Ol";
            $dbname = "epiz_30214730_meubanco";
            $id = $_GET["id"];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM usuario WHERE id='".$id."'";
            $result = $conn->query($sql);

            echo "<h2> Tem certeza que deseja excluir o usuário? </h2>";

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                echo "<form action='deletar.php' method='post'>";
                echo "<input type='hidden' name='id' value='".$id."'>";
                echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " .$row["email"]. " " .$row["senha"]."";
                echo "<input type='submit' value='Excluir'>";
            } else {
                echo "Usuário não existe";
            }
            $conn->close();
        } else {
            echo "Usuário não logado!!";
        }
    ?>

</body>
</html>