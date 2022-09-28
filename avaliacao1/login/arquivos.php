<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
</head>
<body>
<?php

$filename = "cadastro.txt";
if(!file_exists($filename)){
    $handle = fopen($filename, "w");
} else {
    $handle = fopen($filename, "a");
    fwrite($handle, $_POST['nome']);
    fwrite($handle, $_POST['CPF']);
    fwrite($handle, $_POST['Idade']);
    fwrite($handle, $_POST['posição']);
    fflush($handle);
    fclose($handle);
}

?>  
</body>
</html>