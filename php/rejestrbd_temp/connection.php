<?php
$servername = 'localhost';
$username = 'www';
$password = 'inprox2021';
$dbname = 'rejestr';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die('Connection fail: ' . mysqli_connect_error());
}
