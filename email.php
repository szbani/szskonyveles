<?php
session_start();

$erroremail = array();

$name = $_SESSION['keresztnev'] ." ". $_SESSION['vezeteknev'];
$subject = $_POST['subject'];
$msg = $_POST['message'];
$from = $_SESSION['email'];
$headers = array();
$headers   = [
    'MIME-Version' => 'MIME-Version: 1.0',
    'Content-type' => 'text/plain; charset=UTF-8',
    'From' => "{$name} <{$from}>",
    'Reply-To' => $from,
    'X-Mailer' => 'PHP/' . phpversion(),
];
if (empty($msg)) {
    array_push($erroremail, "Nem írtál üzenetet.");
}
if (empty($subject)) {
    array_push($erroremail, "Nem írtál tárgyat.");
}

if(count($erroremail) == 0){
    if(isset($_POST['email_send']))
    {
        mail("szaboskonyveles@gmail.com",$subject,$msg,$headers);
    }
}
header("Location: index.php");
die;
?>