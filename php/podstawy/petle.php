<?php

// for($i = 0; $i < 10; $i++){
//         echo $i . '<br>';
// }


$priorytety = [
    'low' => 'Niski',
    'mid' => 'Średni',
    'high' =>'Wysoki'
];


foreach($priorytety as $k=>$priorytet){

    echo $k .'-->'. $priorytet . '<br>';

}