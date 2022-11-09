<?php
require_once '../classes/config.php';

$nom=secure($_POST["nom"]);
$prenom=secure($_POST["prenom"]);
$email=secure($_POST["email"]);
$tele=secure($_POST["tele"]);

try{
    $user=new user($nom,$prenom,$email,$tele);

}
catch (Exception $e) {
    echo "message".$e->getMessage();
}




?>