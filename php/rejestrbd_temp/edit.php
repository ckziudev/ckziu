

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestr ludności - edycja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
   >
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<body>



    <div class="container col-6">
        <h3 class="mt-3">Edycja osoby  </h3>


        <?php
        require_once('util.php');
        require_once('connection.php');

        if(!isset($_GET['osoba'])){
            die("Brak wskazanej osoby do edycji :(");
        }

        $id = $_GET['osoba'];


        //sql do pobierający dane z bazy
        $sql = 'SELECT id, imie, nazwisko, email FROM osoby WHERE id=' . $id;

        //pobranie danych z BD do zmiennej
        $results = mysqli_query($conn, $sql);

        if(mysqli_num_rows($results)===0){
            die("Nie ma takiej osoby w rejestrze :(");
        }
        ?>

       

        <?php
            $row = mysqli_fetch_assoc( $results );
            //pobranie  danych osoby z bazy
            $imie=$row['imie'];
            $nazwisko=$row['nazwisko'];
            $email=$row['email'];
        ?>

        <!-- Walidacja danych -->
        <?php require_once('valid.php'); ?>
        <!-- Formularz html -->
        <?php require_once('form.php'); ?>

        <hr class="my-3">

        <!-- Lista zarejestrowanych -->
        <?php require_once('lista.php'); ?>


    </div> 
</body>
</html>