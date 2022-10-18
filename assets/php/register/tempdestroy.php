<?php
include "../connection.php";
session_start();
$AccountNumber = $_SESSION['Account'];
$Name = $_SESSION['Name'];
session_destroy();
if(session_destroy()){
    echo "<script> window.location.assign('../../../index.html'); </script>";
}


