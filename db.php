<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tokokusen';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('belum terhubung ke database')
?>