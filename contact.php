<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "hungtsougg@gmail.com";
$subject = "new message"
mail ($to, $subject, $message, "form:" . $first_name);

echo "message sent";


?>