<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
        session_start();

        if($_SESSION["estaLogado"]){
            #echo "<h1>Seja bem vindo ".$_SESSION["email"]."</h1>";
            #echo "<a href='/logout.php'> Logout </a><br>";

        echo
        "
        <div class='m-4'>
            <nav class='navbar fixed-top navbar-expand-lg navbar-dark bg-dark'>
                <div class='container-fluid'>
                    <button type='button' class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navbarCollapse'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarCollapse'>
                        <div class='navbar-nav ms-auto'>
                            <div class='nav-item dropdown'>
                                <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>".$_SESSION["email"]."</a>
                                <div class='dropdown-menu'>
                                    <a href='/logout.php' class='dropdown-item'>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        ";

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
            #echo "Connected successfully<br>";

            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);

            echo "<br><h2 class='text-center'>LISTA DE USUÁRIOS</h2>";

            if ($result->num_rows > 0) {
                // output data of each row
                echo "<div class='card-group'>";
                while($row = $result->fetch_assoc()) {
                    echo
                    "
                    <div class='m-4'>
                        <div class='card' style='width: 300px;'>
                            <div class='card-header text-center card-title'>".$row["id"]."</div>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>".$row["nome"]."</li>
                                <li class='list-group-item'>".$row["email"]."</li>
                                <li class='list-group-item'>".$row["senha"]."</li>
                            </ul>
                            <div class='card-body text-center'>
                                <a href='confirmarDelete.php?id=".$row["id"]."' class='card-link'>Excluir</a>
                                <a href='editar.php?id=".$row["id"]."' class='card-link'>Editar</a>
                            </div>
                        </div>
                    </div>
                    ";
                }
                echo "</div>";
                } else {
                echo "<h1 class='text-center'>0 resultados</h1>";
                }
            $conn->close();
            } else {
            echo 
            "
            <div class='card text-white bg-danger mb-4>
                    <div class='card-body'>
                        <h1 class='text-center'><a href='/index.php'>Usuário não logado!</a></h1>
                    </div>
            </div>";
        }
    ?>

    <span>
        <br>
        <?php 
            if($_GET["msg"]){
                echo 
                "<br>
                <div class='card text-white bg-danger mb-4>
                    <div class='card-body'>
                        <h5 class='card-title text-center'>".$_GET["msg"]."</h5>
                    </div>
                </div>";
            }
        ?>
    </span>

</body>
</html>