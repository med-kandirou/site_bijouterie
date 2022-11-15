<?php
require_once '../classes/config.php';

if(isset($_SESSION['id_user'])==false)
{
    echo 'disconnect';
}else{
    $user= new user();
    if($user->add_pannier($_SESSION['id_user'],$_GET['id'])==1){
        echo 'coonect';
    };
}





?>