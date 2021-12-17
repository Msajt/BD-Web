<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php 
        session_start();

        if($_SESSION["estaLogado"]){
            #echo "<h1>Usuário: ".$_SESSION["email"]."</h1>";
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
                                        <a href='/home.php' class='dropdown-item'>Home</a>
                                        <a href='/logout.php' class='dropdown-item'>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <br>
            <br>
            ";

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

            echo "<h2 class='text-center'> Tem certeza que deseja excluir o usuário? </h2>";

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                echo "<form action='deletar.php' method='post'>";
                echo "<input type='hidden' name='id' value='".$id."'>";
                #echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " .$row["email"]. " " .$row["senha"]."";
                #echo "<input type='submit' value='Excluir'>";
                echo
                "
                <div class='m-4 col d-flex justify-content-center'>
                    <div class='card' style='width: 300px;'>
                        <div class='card-header text-center'>".$row["id"]."</div>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>".$row["email"]."</li>
                            <li class='list-group-item'>".$row["nome"]."</li>
                            <li class='list-group-item'>".$row["senha"]."</li>
                        </ul>
                        <input type='submit' class='btn btn-primary' value='Excluir'>
                    </div>
                </div>
                ";
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