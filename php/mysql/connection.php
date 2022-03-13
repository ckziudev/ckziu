<?php
$servername = 'localhost';
$username = 'www';
$password = 'inprox2021';
$dbname = 'abc';


$conn = mysqli_connect($servername, $username, $password, $dbname);

// echo "<pre>";
// var_dump($conn);
// echo "</pre>";



if(!$conn){
    die('Conn fail: ' . mysqli_connect_error());
}


