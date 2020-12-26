<?php session_start();
unset($_SESSION['keresztnev']);
unset($_SESSION['email']);
session_destroy();
header("Location: index.php");
exit;
?>

