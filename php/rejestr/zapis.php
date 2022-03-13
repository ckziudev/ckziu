<?php

    //zapisywanie do pliku
 

    //pobieramy dane z formularza
    $dane = $imie.' '.$nazwisko.' '.$email;
   
    //spr czy jest plik
    if(!file_exists(PLIK)){
        //jeśli nie ma to tworzymy
        file_put_contents(PLIK, "");
    }

    //pobieramy dane z pliku
    $aktualneDaneZPliku = file_get_contents(PLIK);
    //łączymy dane
    $daneDoZapisu = $aktualneDaneZPliku.'*'.$dane;

    //zapisujemy do pliku połączone dane
    file_put_contents(PLIK, $daneDoZapisu);


