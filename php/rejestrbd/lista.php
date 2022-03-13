<?php
//POBRANIE ZAWARTOŚCI PLIKU DO ZMIENNEJ
$lista = (file_exists(PLIK)) ? file_get_contents(PLIK) : '';

//echo $lista;
$tablicaWpisow = explode('*', $lista);

//dd( $tablicaWpisow ); 


foreach ($tablicaWpisow as $klucz => $wpis) {

    if (!empty($wpis)) {
?>

        <div class="alert alert-info">
            <?= $klucz ?>) <?= $wpis ?>
        </div>

<?php
    }
}
