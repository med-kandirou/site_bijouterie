<?php
require_once '../classes/config.php';

$nom=secure($_POST["nom"]);
$prenom=secure($_POST["prenom"]);
$email=secure($_POST["email"]);
$tele=secure($_POST["tele"]);

try{
    $user=new user($nom,$prenom,$email,$tele);
    $user->update_info($nom,$prenom,$email,$tele,$_SESSION['id_user']);
}
catch (Exception $e) {
    echo "message".$e->getMessage();
}




?>