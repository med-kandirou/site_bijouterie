<?php
require_once '../classes/config.php';

if(isset($_SESSION['id_user'])==false)
{
    header("location:../../connect.php");
    exit();
}else{
    $user= new user();
    $user->add_pannier($_SESSION['id_user'],$GET['id']);
}





?>