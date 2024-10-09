<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = "Tidak valid!";
} else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
}

echo $input;
echo $email;
?>