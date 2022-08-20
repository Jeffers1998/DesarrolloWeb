<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> Párametros enviados por el cliente1</p>
<?php var_dump($_GET) ?>

<p> Tu nombre es: <?php echo $_GET["numusuario"];?></p>
<p> Su Contraseña es: <?php echo $_GET["numclave"];?></p>
<p> Tu numtarjeta es: <?php echo $_GET["numtarjeta"];?></p>
<p> Tu cvc es: <?php echo $_GET["cvc"];?></p>

    </body>
</html>