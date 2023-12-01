<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Inicio</title>
</head>
<body>
Bem vindo 
<?php echo $_SESSION['nome']; ?>.
<p>
    <a href="logout.php">Sair</a>

</p>
    
</body>
</html>