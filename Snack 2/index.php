<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->





<?php


$name=$_GET['name'];
$mail=$_GET['mail'];
$age=$_GET['age'];



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
  <form action="" method="get">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="mail" placeholder="Email">
        <input type="text" name="age" placeholder="Age">
        <button type="submit">Invia</button>
    </form>

    <?php if(strlen($name)>3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && $age!=isNAN){
        echo 'accesso riuscito';
    }else{
        echo 'accesso negato';
    }; ?>


    
</body>
</html>