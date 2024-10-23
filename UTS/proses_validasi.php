<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $errors = array();
    setcookie("user", $nama, time()+3600);
} 
?>