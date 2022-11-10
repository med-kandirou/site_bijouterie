<?php
require_once '../classes/config.php';

$mdp=secure($_POST["mdp"]);
$newmdp=secure($_POST["newmdp"]);


try{
    $user=new user();
    $user->update_mdp($mdp,$newmdp);
}
catch (Exception $e) {
    echo "message".$e->getMessage();
}


?>