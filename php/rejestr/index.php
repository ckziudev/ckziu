<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestr ludności</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
   >
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"></head>
<body>
    <!-- Funkcje uzytkowe -->
   <?php require_once('util.php'); ?>

    <div class="container col-4">
        <h3 class="mt-3">Rejestr ludności <i class="bi-alarm"></i> </h3>

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