<?php
$name = $_GET["Name"];

$email = $_GET["Email"];

$age = $_GET["Age"];

$acces = "";

/* echo $name . "<br>";
echo $email . "<br>";
echo $age . "<br>"; */


if (strlen($name) > 3 && str_contains($email, ".") && str_contains($email, "@") && is_numeric($age)) {
    $access = 'Accesso riuscito';
    echo $access;
} else {
    $access = 'Accesso negato';
    echo $access;
};