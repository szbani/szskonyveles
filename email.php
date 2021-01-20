<?php


$subject = "";
$msg = "";
$email = "";
$header = "";
if(isset($_POST['email_send'])){
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    $header = array("From:" + $_SESSION['email']);
    mail("szabosandornekonyveles@gmail.com",$subject,$msg,$header);
}
?>