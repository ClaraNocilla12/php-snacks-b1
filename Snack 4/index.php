<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->





<?php

$array=[];
$N=15;

while(count($array)<$N){
    $number=rand(1,100);

    if(!in_array($number,$array)){
        $array[]=$number;
       
    }
}

for($i=0;$i<$N;$i++){
    echo  $array[$i] . ' ';
}

?>


