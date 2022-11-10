<?php
require_once 'header_user.php';
 ?>

<body class="sub_page">

    <div class="hero_area">
    <?php
        require_once 'navbar_user.php';
    ?>
    </div>

    <h2 id="title">Mes informations</h2>
   
        <div class="container">
            <form action="../php/update_user.php" method="POST">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <label for="email" class="form-label">Nom :</label>
                        <input type="text" class="form-control" required name="nom" value="<?php echo $_SESSION['nom']; ?>" disabled>
                    </div>        
                    <div class="col-md-6 mt-2">
                        <label for="email" class="form-label">Prenom:</label>
                        <input type="text" class="form-control" name="prenom" required value="<?php echo $_SESSION['prenom']; ?>" disabled>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $_SESSION['email']; ?>" disabled>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Telephone:</label>
                        <input type="text" class="form-control" name="tele" required value="<?php echo $_SESSION['phone']; ?>" disabled>
                    </div>            
                </div>
                <div class="row ">
                    <div class="col-md-6 mt-4">
                        <button type="button" id="update" class="btn btn-info form-control">Modifier</button>
                    </div>     
                    <div class="col-md-6 mt-4">
                        <button type="submit" class="btn btn-primary form-control">Enregistrer</button>
                    </div>  
                    <div class="col-md-12 mt-4">
                        <button type="button" id="show_mdp" class="btn btn-dark form-control">Changer le mot se passe </button>
                    </div> 
                    <div class="col-md-12 mt-4">
                        <?php
                        if(isset($_GET['etat'])){
                            if($_GET['etat']=='succes'){
                                echo"
                                    <script>
                                        Swal.fire(
                                        'Good job!',
                                        'les informations modifiée avec succés!',
                                        'success') 
                                    </script>
                                ";
                            } 
                        }
                        ?>
                    </div>         
                </div> 
                <div class="row mdp_div " style="display: none;">
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Mot de passe:</label>
                        <input type="password" class="form-control" id="old_mdp">
                    </div>   
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Nouveau mot de passe :</label>
                        <input type="password" class="form-control" id="new_mdp" >
                    </div>
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Confirmation de mot de passe :</label>
                        <input type="password" class="form-control" id="Cnew_mdp">
                    </div>  
                    <div class="col-md-12 mt-4">
                        <button type="button" id="update_mdp" class="btn btn-danger form-control">Changer</button>
                    </div> 
                    <div class="col-md-12 mt-4">
                        <div class="alert alert-danger" role="alert">
                            
                        </div>  
                    </div>
                         
                </div>
            </form>          
        </div>  
        
</body>

<?php
    require_once 'footer_user.php';
?>