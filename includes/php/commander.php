
<?php
require_once '../classes/config.php';


try{
    $id_prod=$_GET['id'];
    $qt=$_POST['qt'];
    $numero=$_POST['numero'];
    $adresse=$_POST['adresse'];
    $user= new user();  

    if($user->acheter_prod($_SESSION['id_user'],$id_prod,$qt,$numero,$adresse)==1){
        header("location:../user/commande.php?etat=ajouter");
    }

}catch(Exception $e){
    echo $e->getMessage();
}

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>