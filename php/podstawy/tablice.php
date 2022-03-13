<?php

$tablica1 = array('Mercedes','Volvo','Opel');
$tablica2 = ['BMW','Audi','KIA'];

// echo $tablica1[1];
// echo $tablica2[0];

//echo isset( $tablica1[2] );

// if(!empty($tablica1[3])){
//     echo "szufladka istnieje";
// }else{
//     echo "szufladka nie istnieje";
// }


//operator ternarny

//$nowaZmienna = (isset($tablica1[3])) ? $tablica1[3] : 'brak  danych';
//print_r($tablica1);
?>
<pre>
<?php

$tablica1[2] = 'BMW';
$tablica1[] = 'KIA';
$tablica1[] = ['Ala', 'ma', 'kota'];


//echo count( $tablica1 );

//var_dump($tablica1);
echo $tablica1[4][2];



$tAsocjacyjna = [
    'low' => 'Niski',
    'mid' => 'Średni',
    'high' =>'Wysoki'
];

//var_dump($tAsocjacyjna);

//echo $tAsocjacyjna["mid"];






?>
</pre>


