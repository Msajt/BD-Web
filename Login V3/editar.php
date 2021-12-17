<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
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

            #echo "<h2> Atualizar usuário </h2>";

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                #echo "<form action='atualizar.php' method='post'>";
                #echo "<input type='hidden' name='id' value='".$id."'>";
                #echo "Nome: <input type='input' name='nome' value='".$row["nome"]."'><br>";
                #echo "Email: <input type='input' name='email' value='".$row["email"]."'><br>";
                #echo "Senha: <input type='password' name='senha' value=''><br>";
                #echo "<input type='submit' value='Atualizar'>";
                echo
                "
                <div class='login-form'>
                    <form action='/atualizar.php' method='post'>
                        <h2 class='text-center'>Atualizar usuário</h2>
                            <div class='form-group'>
                                <input type='hidden' name='id' class='form-control' value='".$id."'>
                            </div>

                            <div class='form-group'>
                                <input type='text' name='email' class='form-control' placeholder='Email' value='".$row["email"]."'>
                            </div>
                            
                            <div class='form-group'>
                                <input type='text' name='nome' class='form-control' placeholder='Usuário' value='".$row["nome"]."'>
                            </div>
                        
                            <div class='form-group'>
                                <input type='password' name='senha' class='form-control' placeholder='Senha' value=''>
                            </div>
                        <div class='form-group text-center'>
                            <button type='submit' class='btn btn-primary btn-block'>Atualizar</button>
                        </div>       
                    </form>
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