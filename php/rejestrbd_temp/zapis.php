<?php

    //ZAPIS DO BAZY

    //sprawdzanie czy istnieje tabela "osoby" w bazie danych
    if ( $result = mysqli_query($conn, "SHOW TABLES LIKE 'osoby'") ) {

        //jeśli nie istnieje to ją stwórz
        if(mysqli_num_rows($result) === 0) {
           
            //formujemy SQL zakładający tabelę w BD
            $sql = 'CREATE TABLE osoby (
                id INT AUTO_INCREMENT PRIMARY KEY,
                imie VARCHAR(30) NOT NULL,
                nazwisko VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL
                ) ';

            //wysyłamy stworzone polecenie do BD
            mysqli_query($conn, $sql);
        }
    }
    

    //zapisywanie do tabeli "osoby"
    //formowanie polecenia SQL
    $sql = "INSERT INTO osoby (imie, nazwisko, email)
    VALUES ('$imie', '$nazwisko', '$email')";

    //wykonywanie polecenia na BD
    if(mysqli_query($conn, $sql)){
        ?>
        <div class="alert alert-success">
            Pomyślnie dodano <?=$imie?> <?=$nazwisko?> do rejestru :)
        </div>
        <?php

        //Czyszczenie pól formularza
        $imie="";
        $nazwisko="";
        $email="";

    }else{
        ?>
        <div class="alert alert-danger">
            Błąd dodawania danych: <?=mysqli_error($conn)?>
        </div>

        <?php
    }

