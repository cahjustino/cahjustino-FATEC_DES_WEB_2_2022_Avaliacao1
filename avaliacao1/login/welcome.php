<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widh=device-width,initial-scale=1, shrink-to-fit=no">
    <title>Bem Vindo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Oi <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo ao Clube</h1>
    </div>
    <p>

        <a href="cadastro.php" class="btn btn-primary">Cadastro de jogadores</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Logout</a>

        
    </p>
</body>
</html>