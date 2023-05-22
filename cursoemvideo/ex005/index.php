<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulação de Strings</title>
</head>
<body>
    <h1>PHP - Variáveis e Constantes</h1>
    <?php 
        $nome = 'Vitor Delmondes Araujo';
        const PAIS = 'Brasil';
    ?>
    <p><?php echo "Olá, $nome, você mora no país " . PAIS;?></p>
    <p><?php echo 'Olá, $nome, você mora no país ' . PAIS;?></p>
</body>
</html>