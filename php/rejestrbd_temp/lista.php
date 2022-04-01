<?php

//sql do pobierający dane z bazy
$sql = 'SELECT id, imie, nazwisko, email FROM osoby';

//pobranie danych z BD do zmiennej
$results = mysqli_query($conn, $sql);



//sprawdzenie czy w wynikach są jakieś wiersze
if(mysqli_num_rows($results) > 0){

    //wartość początkowa liczby porządkowej
    $lp = 1;
    
    //jeśli są jakieś wiersze to listujemy je w pętli "while"
    while( $wiersz = mysqli_fetch_assoc($results) ){
        //div typu ALERT z jednym wpisem
        ?>
            <div class="alert alert-info">
             <?=$lp++?>)  
             <?=$wiersz['imie']?> 
             <?=$wiersz['nazwisko']?> 
             [ <a href="mailto:<?=$wiersz['email']?>"> <?=$wiersz['email']?> </a>]
      
             <a class="btn" href="edit.php?osoba=<?=$wiersz['id']?>" > 
                <i class="bi bi-pencil-square  text-success fs-5" title="Edytuj osobę"></i>
             </a>
             <a class="btn" href="delete.php?osoba=<?=$wiersz['id']?>" onclick="return confirm('Czy jesteś pewny, ze chcesz usunąć tą osobę?')"> 
                <i class="bi bi-trash3-fill  text-danger fs-5" title="Usuń osobę"></i>
             </a>
            </div>
        <?php
    }
}


