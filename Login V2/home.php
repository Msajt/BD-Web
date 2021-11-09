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
    ?>
    
    <h1> Seja bem vindo </h1>

    <!-- Messagem de sucesso de cadastro enviada -->
    <span>
        <?php 
           if($_GET["msg"]){
               echo $_GET["msg"];
           } 
        ?>
        <br>
    </span>

    <?php
        if($_SESSION["estaLogado"]){
            echo "<h1>Seja bem vindo ".$_SESSION["email"]."</h1>";
            echo "<a href='/logout.php'> Logout </a><br>";

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

            echo "<h2> Lista de usuários </h2>";

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Senha: " . $row["senha"]. 
                         "<a href='confirmarDelete.php?id=".$row["id"]."'><img src=\"images/delete.png\"/ style='height:20px;' alt='Excluir'></a>
                          <a href='editar.php?id=".$row["id"]."'><img src=\"images/edit.png\"/ style='height:20px;' alt='Editar'></a><br>";

                }
            } else {
                echo "0 resultados";
            }
            $conn->close();
        } else {
            echo "Usuário não logado!!";
        }
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