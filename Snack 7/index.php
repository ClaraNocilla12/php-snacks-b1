<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

$alunni=[
    [
        'nome' => 'Pinco',
        'cognome' => 'Pallino',
        'fisica' => 4,
        'lettere' => 5,
        'edFisica' => 5
         
    ],
  
     [
        'nome' => 'Marie',
        'cognome' => 'Curie',
         'fisica' => 10,
        'lettere' => 8,
        'edFisica' => 6
    ],
     [
        'nome' => 'Lexa',
        'cognome' => 'Trikru',
         'fisica' => 5,
        'lettere' => 7,
        'edFisica' => 9
    ]
     ];

for($i=0;$i<3;$i++){
    $media[]=($alunni[$i]['fisica'] + $alunni[$i]['lettere'] + $alunni[$i]['edFisica'])/3;
}





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

<?php for($i=0;$i<3;$i++){ ?>
    <p>
        <?php echo $alunni[$i]['nome'] . '  ' . $alunni[$i]['cognome'] . ' media voti: ' . round($media[$i],1) ?>
    </p>
    <?php } ?>
    
</body>
</html>