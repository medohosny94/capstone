<?php

$servername = 'localhost';
$username = 'id5733095_root';
$password = 'mandoline';
$dbname = 'id5733095_testapp';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo 'Connection Error '.mysqli_connect_error();
}