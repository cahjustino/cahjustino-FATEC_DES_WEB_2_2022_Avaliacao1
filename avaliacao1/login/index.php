<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'Fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widh=device-width,initial-scale=1, shrink-to-fit=no">
    <title>Clube FC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <style type="text/css">
        body{ font: 16px sans-serif;}
        .alinhamento{ width: 350px; padding: 20px; }
        
    </style>
</head>
<body >
    
    <div class="container text-center">
        <h2>Clube FC</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="Fatec">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="araras">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>