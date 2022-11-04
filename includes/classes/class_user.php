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
        $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`,`phone`,`password`, `role`) VALUES ('".$this->nom."','".$this->prenom."','".$this->email."','".$this->phone."','".$this->mdp."',1)";
        $this->openConnection()->query($sql);
        echo 1; 
    }
    public function login() {
        $sql = "SELECT `id_user`, `nom`, `prenom`, `email`, `phone`, `password`, `role` FROM `user` WHERE `email`='".$this->email."' and `password` ='".$this->mdp."'";
        $stmt = $this->openConnection()->query($sql);
        if($stmt->rowCount()==1){
            while ($row = $stmt->fetch()){
                $_session['id_user']=$row['id_user'];
                $_session['nom']=$row['nom'];
                $_session['prenom']=$row['prenom'];
                $_session['email']=$row['email'];
                $_session['phone']=$row['phone'];
                $_session['role']=$row['role'];
            }
            return $_session['role'];
        }
        else{
            return -1; 
        }
    }
}
?>