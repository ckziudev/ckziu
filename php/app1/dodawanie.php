<?php
            //formowanie wpisu do dodania do pliku
            $dane = $imie.' '.$nazwisko.' '.$email;

            //sprawdzenie czy plik istnieje
            if(!file_exists($file)){
                file_put_contents($file, '');
            }

            //doawanie do pliku
            $aktualnaZawartoscPliku = file_get_contents($file);
            file_put_contents($file, $aktualnaZawartoscPliku.$dane.'*');

