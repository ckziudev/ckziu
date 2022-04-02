<?php

//ustawienie pustych zmiennych "errorowych"
$errorImie = "";
$errorNazwisko = "";
$errorEmail = "";


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
       
        //sprawdzamy czy istnieje zmienna $id świadcząca o tym ze przetwarzany jest plik edit.php
        if( isset( $id ) ){
            //jeśli jest to edycja
            require_once('aktualizacja.php');
        }else{
            //jeśli jest to rejestracja
            require_once('zapis.php');
        }
        

    }
}
?>


