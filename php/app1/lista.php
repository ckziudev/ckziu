<?php
$plik =  file_get_contents($file);
$wektorPlik = explode('*', $plik);

foreach ($wektorPlik as  $key => $wpis) {
    if (!empty($wpis)) {
        echo '<div class="alert alert-info mt-2" role="alert">';
        echo $key + 1;
        echo ') ';
        echo $wpis;
        echo '</div>';
    }
}
