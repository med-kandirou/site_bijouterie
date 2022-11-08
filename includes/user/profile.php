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
            <form action="">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <label for="email" class="form-label">Nom :</label>
                        <input type="email" class="form-control" name="nom" value="<?php echo $_SESSION['nom']; ?>" disabled>
                    </div>        
                    <div class="col-md-6 mt-2">
                        <label for="email" class="form-label">Prenom:</label>
                        <input type="email" class="form-control" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" disabled>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <label class="form-label">Telephone:</label>
                        <input type="email" class="form-control" name="tele" value="<?php echo $_SESSION['phone']; ?>" disabled>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>            
                </div> 
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>            
                </div> 
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>            
                </div> 
            </form>          
        </div>  
    
</body>
<?php
require_once 'footer_user.php';
 ?>