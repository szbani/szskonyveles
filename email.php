<?php
session_start();

$subject = "";
$msg = "";
$email    = "";
if (isset($_POST['email_send'])) {
    $msg = $_POST['message'];
    mail("szabosandornekonyveles@gmail.com","My subject",$msg);
}
?>