<?php
//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$name = $_GET['name'];
echo strlen($name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <form action="index.php" method="get">
        <div>
            <label for="name">Nome</label>
            <input name="name" id="name" type="text">
        </div>

        <div>
            <label for="age">Età</label>
            <input name="age" id="age" type="number">
        </div>

        <div>
            <label for="mail">Mail</label>
            <input name="mail" id="mail" type="mail">
        </div>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>