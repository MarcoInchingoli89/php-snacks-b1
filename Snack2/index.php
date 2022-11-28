<?php
//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="validator.php" method="get">
        <div><input type="text" name="Name" id="Name" placeholder="Name"></div>
        <div><input type="email" name="Email" id="Email" placeholder="Email"></div>
        <div><input type="number" name="Age" id="Age" placeholder="Age"></div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>