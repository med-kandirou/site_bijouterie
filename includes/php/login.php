<?php
require_once '../classes/config.php';

$email=secure($_POST["email"]);
$mdp=secure($_POST["mdp"]);

try{
    $user=new user();
    $res=$user->login($email,$mdp);
    if($res==-1){
        echo -1;
    }
    else{
        echo $res;
    }
}
catch (Exception $e) {
    echo "message".$e->getMessage();
}




?>