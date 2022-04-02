<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestr ludności- edycja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
   >
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<body>

    <?php
    require_once('util.php');
    require_once('connection.php');

    if( !isset( $_GET['osoba'] ) ){
        die('Brak wybranej osoby!');
    }

    //przypisanie do zmiennej
    $id = $_GET['osoba'];


    //sql do pobierający osobę z BD
    $sql = 'SELECT imie, nazwisko, email FROM osoby WHERE id=' . $id;

    //pobranie danych z BD do zmiennej z wynikami
    $results = mysqli_query($conn, $sql);


    //sprawdzenie czy jest jakikolwiek rezultat/wiersz
    if(mysqli_num_rows($results) === 0){
        die('Nie ma w bazie osoby o id=' . $id . '!');
    }

    //przypisanie pierwszego wiersza z rezultatów do zmiennej jako tablica asocjacyjna
    $osoba = mysqli_fetch_assoc( $results );

    ?>


    <div class="container col-4">
        <h3 class="mt-3">Edycja osoby </h3>

        <?php
            //ustawienie zmiennych dla value inputów
            $imie = $osoba['imie'];
            $nazwisko = $osoba['nazwisko'];
            $email = $osoba['email'];
        ?>

        <!-- Walidacja danych -->
        <?php require_once('valid.php'); ?>
        <!-- Formularz html -->
        <?php require_once('form.php'); ?>

        <hr class=my-3>
        <a class="btn btn-sm btn-warning" href="/php/rejestrbd/">Powrót do listy</a>
        
    </div> 
</body>
</html>