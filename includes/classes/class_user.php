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
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $this->mdp = $mdp;

        $hashed_pass=password_hash($this->mdp,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`,`phone`,`password`, `role`) VALUES ('".$this->nom."','".$this->prenom."','".$this->email."','".$this->phone."','".$hashed_pass."',1)";
        $this->openConnection()->query($sql);
        echo 1; 
    }

    public function login($email,$mdp) {
        $this->email = $email;
        $this->mdp = $mdp;
        $sql = "SELECT `id_user`, `nom`, `prenom`, `email`, `phone`, `password`, `role` FROM `user` WHERE `email`='".$this->email."'";
        $stmt = $this->openConnection()->query($sql);
        if($stmt->rowCount()==1){
            while ($row = $stmt->fetch()){
                if(password_verify($this->mdp,$row["password"]))
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
        $this->id=$id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $sql = "UPDATE `user` SET `nom`='".$this->nom."',`prenom`='".$this->prenom."',`email`='".$this->email."',`phone`='".$this->phone."' WHERE `id_user`='".$this->id."'";
        if($this->openConnection()->query($sql)){
            $_SESSION['nom']=$this->nom;
            $_SESSION['prenom']=$this->prenom;
            $_SESSION['email']=$this->email;
            $_SESSION['phone']=$this->phone;
            header("Location:../user/profile.php?etat=succes");
            exit();
        }
    }
    public function update_mdp($mdp,$newmdp) {
        $this->mdp = $mdp;
        if(password_verify($this->mdp,$_SESSION['pass']))
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
        $this->id = $id_user;

        $sql = "INSERT INTO `pannier`(`id_user`, `id_prod`) VALUES (".$this->id.",".$id_prod.")";
        $this->openConnection()->query($sql);
        echo 1;
        
    }
}
?>