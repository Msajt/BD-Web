<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prática #1 - Criando HTML</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>

    <h2> Sistema WEB </h2>

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

</body>
</html>
-->
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC - Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <header>

        <div class="m-4">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Sistema BD-Web</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="/login.php" class="nav-item nav-link">Login</a>
                            <a href="/cadastro.php" class="nav-item nav-link">Cadastro</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </header>

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

    <!--
    <span>
        <br>
        <br>
        <div class="card text-white bg-danger mb-4">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php 
                        if($_GET["msg"]){
                            echo $_GET["msg"];
                        } 
                    ?> 
                </h5>
            </div>
    </span>
    -->

</body>
</html>