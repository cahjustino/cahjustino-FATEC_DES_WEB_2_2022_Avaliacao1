
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widh=device-width,initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .alinhamento{ width: 350px; padding: 20px;  font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    
    <div class="container text-center">
        <h2>Cadastro de Jogadores</h2>
        <p>Dados cadastrais.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-goup">
                <label >Nome</label>
                <input type="text" name="nome" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="CPF" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>idade</label>
                <input type="text" name="Idade" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>posição</label>
                <input type="text" name="posição" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit" >
            </div>
        </form>
    </div>   

    
    <?php

include('arquivos.php')

   
    ?>
    
</body>
</html>