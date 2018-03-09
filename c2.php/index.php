<?php
header('Content-Type: text/html; charset = utf-8');

$ime = trim($_POST['ime']);
$prezime = trim($_POST['prezime']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password1 = trim($_POST['password1']);

$err = 0 ;

if(strlen($ime) <= 2){$err++;}

?>