<?php
require_once '../classes/config.php';

if(isset($_SESSION['id_user'])==false)
{
    echo 'disconnect';
}else{
    try{
        $qt=$_POST['qt'];
        $user= new user();
        if($user->add_pannier($_SESSION['id_user'],$_POST['id'],$qt)==1){
            echo 'insered';
        };
    }catch(Exception $e){
        echo $e->getMessage();
    }

}





?>