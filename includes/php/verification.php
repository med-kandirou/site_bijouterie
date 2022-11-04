<?php
require_once '../classes/config.php';

$nom=secure($_POST["nom"]);
$prenom=secure($_POST["prenom"]);
$email=secure($_POST["email"]);
$phone=secure($_POST["phone"]);
$mdp=secure($_POST["mdp"]);

try{
    $p=new user($nom,$prenom,$email,$phone,$mdp);
    $p->inscrire();
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>