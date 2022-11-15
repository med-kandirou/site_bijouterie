<?php 
require_once 'config.php';
class user extends database {
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $phone;
    public $mdp;

    function __construct() {}

    public function inscrire($nom,$prenom,$email,$phone,$mdp) {
        $hashed_pass=password_hash($mdp,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`,`phone`,`password`, `role`) VALUES ('".$nom."','".$prenom."','".$email."','".$phone."','".$hashed_pass."',1)";
        $this->openConnection()->query($sql);
        echo 1; 
    }

    public function login($email,$mdp) {

        $sql = "SELECT `id_user`, `nom`, `prenom`, `email`, `phone`, `password`, `role` FROM `user` WHERE `email`='".$email."'";
        $stmt = $this->openConnection()->query($sql);
        if($stmt->rowCount()==1){
            while ($row = $stmt->fetch()){
                if(password_verify($mdp,$row["password"]))
                {
                    $_SESSION['id_user']=$row['id_user'];
                    $_SESSION['nom']=$row['nom'];
                    $_SESSION['prenom']=$row['prenom'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['phone']=$row['phone'];
                    $_SESSION['role']=$row['role'];
                    $_SESSION['pass']=$row['password'];
                    return $_SESSION['role'];
                }
                else{
                    return -1; 
                }
            }
        }
        else{
            return -1; 
        }
    }
    public function update_info($nom,$prenom,$email,$phone,$id) {

        $sql = "UPDATE `user` SET `nom`='".$nom."',`prenom`='".$prenom."',`email`='".$email."',`phone`='".$phone."' WHERE `id_user`='".$id."'";
        if($this->openConnection()->query($sql)){
            $_SESSION['nom']=$nom;
            $_SESSION['prenom']=$prenom;
            $_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
            header("Location:../user/profile.php?etat=succes");
            exit();
        }
    }
    public function update_mdp($mdp,$newmdp) {

        if(password_verify($mdp,$_SESSION['pass']))
        {
            $hashed_pass=password_hash($newmdp,PASSWORD_DEFAULT);
            $sql = "UPDATE `user` SET `password`='".$hashed_pass."' WHERE  `id_user`='".$_SESSION['id_user']."'";
            if($this->openConnection()->query($sql)){
                $_SESSION['pass']=$hashed_pass;
                echo 1;
            }  
        }
        else{
            echo -1;
        }  
    }
    public function add_pannier($id_user,$id_prod) {
        $sql = "INSERT INTO `pannier`(`id_user`, `id_prod`) VALUES (".$id_user.",".$id_prod.")";
        $this->openConnection()->query($sql);
        return 1;
    }
}
?>