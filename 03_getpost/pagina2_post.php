<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Párametros del cliente enviados con Post 11<p>

    <?php var_dump($_POST) ?>
    
    <p> Tu nombre de usuario es: <?php echo $_POST["nombreusuario"]; ?>
    <p> Tu contraseña es : <?php echo $_POST["contraseñausuario"];?>
    <p> Tu número de tarjeta es: <?php echo $_POST["numtarjeta"];?>
    <p> tu cvc es : <?php echo $_POST["cvc"];?>
    
    
</body>
</html>