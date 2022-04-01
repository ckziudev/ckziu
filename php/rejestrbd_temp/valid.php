<?php

//ustawienie pustych zmiennych "errorowych"
$errorImie = "";
$errorNazwisko = "";
$errorEmail = "";





//dd($_POST);

if( isset( $_POST['wyslano'] ) ){

    //przypisanie danych z formularza do zmiennych (atrybutów value inputów)
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];


    
    //walidacja pól formularza
   
    //sprawdzimy czy imie jest ok
    if( empty($imie) ){
        $errorImie = "Imie nie moze być puste!";
    }

    //sprawdzamy czy nazwisko jest ok
    if( empty($nazwisko) ){
        $errorNazwisko = "Nazwisko nie moze być puste!";
    }

    //sprawdzamy czy email jest ok
    if( empty($email) ){
        $errorEmail = "Email nie moze być pusty!";
    }elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
        $errorEmail = "Email ma niepoprawną formę!";
    }



    // kiedy brak errorów w formularzu...
    if( empty( $errorImie ) && empty( $errorNazwisko ) && empty( $errorEmail )){
       
        require_once('zapis.php');

    }
}
?>


