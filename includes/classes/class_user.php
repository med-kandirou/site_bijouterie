<?php 
require_once 'config.php';
class user extends database {
    public $nom;
    public $prenom;
    public $email;
    public $phone;
    public $mdp;

    function __construct($nom,$prenom,$email,$phone,$mdp) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->phone = $phone;
        $this->mdp = $mdp;
    }

    public function inscrire() {
        $hashed_pass=password_hash($this->mdp,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`,`phone`,`password`, `role`) VALUES ('".$this->nom."','".$this->prenom."','".$this->email."','".$this->phone."','".$hashed_pass."',1)";
        $this->openConnection()->query($sql);
        echo 1; 
    }

    public function login() {
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
}
?>