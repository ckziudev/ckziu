<?php

$sql = "UPDATE osoby SET imie='$imie', nazwisko='$nazwisko', email='$email' WHERE id=$id";



if(mysqli_query($conn, $sql)){
?>

    <div class="alert alert-success">
        Zaktualizowano dane osoby :)
    </div>

<?php
}else{
?>
    <div class="alert alert-danger">
        Błąd aktualizacji danych...
    </div>

<?php
}