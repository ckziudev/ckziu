
<pre>
<?php
    //var_dump($_POST);
?>
</pre>
    

<?php
    $file = 'rejestr.txt';

    $nazwiskoError = "";
    $imieError = "";
    $emailError = "";

    $nazwisko = "";
    $imie = "";
    $email = "";

    //sprawdzenie czy wysłano formularz
    if( isset($_POST["wyslano"]) ){

        //przypisanie danych z tablicy do zmiennych
        $nazwisko = $_POST["nazwisko"];
        $imie = $_POST["imie"];
        $email = $_POST["email"];

        //walidacja nazwiska
        if(empty($nazwisko)){
            $nazwiskoError="Pole nazwisko nie może być puste!";
        }

        //walidacja imienia
        if(empty($imie)){
            $imieError="Pole imienia nie może być puste!";
        }

        //walidacja adresu email
        if(empty($email)){
            $emailError="Pole adresu email nie może być puste!";
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailError="Adres email jest niepoprawny!";
        }



        //jesli wszystkie dane sa poprawne to wyczyść pola formularza
        if(empty($nazwiskoError) && empty($imieError) && empty($emailError)){

            require('dodawanie.php');

            //czyszczenie pól formularza
            $nazwisko = "";
            $imie = "";
            $email = "";

        }



        


    }   


?>





 