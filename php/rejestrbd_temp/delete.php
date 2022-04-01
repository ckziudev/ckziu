<?php
//import niezbędnych plików
require_once('connection.php');
require_once('util.php');


//walidacja zmiennej z $_GET ( z url)
if( isset( $_GET['osoba'] ) &&  !empty( $_GET['osoba'] ) && filter_var($_GET['osoba'], FILTER_VALIDATE_INT) ){

    //pobranie zmiennej z adresu url (id osoby) i przypisanie do dedykowanej zmiennej
    $idOsoby = $_GET['osoba'];

    //formujemy SQL
    $sql = "DELETE FROM osoby WHERE id=$idOsoby";
    //wykonujemy SQL
    if( mysqli_query($conn, $sql) ){
    
    //przekierowujemy uzytkownika do głównego widoku
    header('Location: index.php');
    exit;

    }else{
        echo "Błąd usuwania: " . mysqli_error($conn);
    }
}else{
    echo "Błędne dane!";
}


dd($_GET);

