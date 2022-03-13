<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Nasz testowty formularz</title>
</head>

<body>

    <div class="container col-4">
        <div class=" mt-5 mb-2">
            <h4>Wprowadz swoje dane do rejestru</h4>
        </div>

        <div class=" mt-5 mb-2">

            <?php require_once('walidacja.php'); ?>



        </div>

        <div class="mt-2 mb-2">

            <form action="" method="POST">
                <label for="">Nazwisko:</label>
                <div class="input-group has-validation">
                    <input class="form-control <?php if (!empty($nazwiskoError)) echo "is-invalid"; ?>" type="text" name="nazwisko" value="<?php echo $nazwisko; ?>">
                    <div class="invalid-feedback">
                        <?=$nazwiskoError?>
                    </div>
                </div>


                <label for="">Imię:</label>
                <div class="input-group has-validation">
                    <input class="form-control <?php if (!empty($imieError)) echo "is-invalid"; ?>" type="text" name="imie" value="<?php echo $imie; ?>">
                    <div class="invalid-feedback">
                        <?=$imieError?>
                    </div>
                </div>

                <label for="">Adres email:</label>
                <div class="input-group has-validation">
                    <input class="form-control <?php if (!empty($emailError)) echo "is-invalid"; ?>" type="text" name="email" value="<?php echo $email; ?>">
                    <div class="invalid-feedback">
                        <?=$emailError?>
                    </div>
                </div>

                <button class="btn btn-success mt-1" type="submit" name="wyslano">DODAJ</button>


                </form>
                <?php
                //wyświetlenie komunikatu o powodzeniu
                if (isset($_POST["wyslano"]) && empty($nazwiskoError) && empty($imieError) && empty($emailError)) {
                    echo '<div class="alert alert-success mt-2" role="alert">';
                    echo  'Pomyslnie dodano dane do pliku!';
                    echo '</div>';
                }
                ?>
                <hr>
            <?php require('lista.php'); ?>
        </div>
    </div>
</body>
</html>