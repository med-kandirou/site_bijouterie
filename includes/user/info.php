 
<?php 
    require_once 'header_user.php';
    $id=$_GET['id'];

    $db=new database();
    $stmt=$db->openConnection()->query("SELECT `phone` FROM `user` WHERE id_user=".$_SESSION['id_user']."");
    while ($row = $stmt->fetch())
    {
      $phone=$row['phone'];
    }
?>
    <body class="sub_page">
    <div class="hero_area">
        
        <?php require_once 'navbar_user.php';  ?>

    </div>
  
    <h2 id="title">Les informations</h2>
    <div class="container">
    <form method="POST" action="../php/commander.php?id=<?php echo $id;?>">
      <div class="row">
        
            <div class="col-md-12 mb-4">
              <input type="text" class="form-control form-control-lg" name="numero" pattern="(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}" value="<?php echo $phone; ?>" required />
              <label class="form-label nom" for="nom">Telephone :</label>
            </div>

            <div class="col-md-12 mb-4">
              <input class="form-control form-control-lg" name="adresse" required/>
              <label class="form-label phone">Adresse :</label>
              </div>
            <div class="col-md-12 mb-4">
              <input type="number" id="qt" min="0" name="qt" class="form-control form-control-lg" required/>
              <label class="form-label">Quantité :</label>
              </div>
            <div class="col-md-12 mb-4">
              <button class="btn btn-dark btn-lg btn-block" type="submit">Commander</button>
            </div>
        </div>
      </form>
    </div>
    
    <?php 
     require_once 'footer_user.php';
    ?>