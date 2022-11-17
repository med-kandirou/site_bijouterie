<?php
require_once '../classes/config.php';


try{
    $id_prod=$_POST['id'];
    $user= new user();  

    if($user->delete_prod($_SESSION['id_user'],$id_prod)==1){
        echo 'deleted';
    };

}catch(Exception $e){
    echo $e->getMessage();
}







?>