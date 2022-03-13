<?php

$tablica1 = array('Mercedes','Volvo','Opel');

//echo implode('**', $tablica1);



$zmiennaTekstowa = 'Mercedes **Volvo**Opel';

$wynikowaTablica = explode('v', $zmiennaTekstowa);


var_dump($wynikowaTablica);