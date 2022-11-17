 
<?php 
    require_once 'header_user.php';

if(isset($_GET['id'])==true)
{
    $id=$_GET['id'];
    $db=new database();
    $stmt=$db->openConnection()->query("SELECT `id_produit`, `nom_prod`, `prix`, `description`, `image`, `image1`, `image2`,`quantité_stock`,`nbr_vente`,`quantité_stock` FROM `produit` WHERE `id_produit`=".$id."");
    while ($row = $stmt->fetch())
    {
      $nom=$row['nom_prod'];
      $prix=$row['prix'];
      $desc=$row['description'];
      $image=$row['image'];
      $image1=$row['image1'];
      $image2=$row['image2'];
      $nbr_vente=$row['nbr_vente'];
      $qt=$row['quantité_stock'];
    }
}

    ?>
      
      <body class="sub_page">
      <div class="hero_area">
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="../../assets/images/logo.png" alt="logo de site">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_user.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery_user.php"> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact_user.php"> Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $_SESSION['prenom'] ?></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Commandes</a></li>
                      <li><a class="dropdown-item" href="pannier.php">Pannier</a></li>
                      <hr>
                      <li><a class="dropdown-item" href="deconnecter.php">Déconnecter</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>
            </div>
          </nav>
      </div>
  </header>
  </div>
  
  <h2 id="title">Poursuivre la commande</h2>
    <div class="container fiche">
      <div class="row">
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-10">
                    <img src="../../assets/images/<?php echo $image?>" style="display: block;margin:auto;">
                  </div> 
              </div>
              <div class="row mt-4">
              <img src="../../assets/images/<?php echo $image?>" class="col-md-3 img">
              <img src="../../assets/images/<?php echo $image1?>" class="col-md-3 img">
              <img src="../../assets/images/<?php echo $image2?>" class="col-md-3 img">  
              </div>
          </div>
          <div class="col-md-6 mt-5">
              <div class="row title-comp">
                  <p>DHAYBY COMPANY</p>
              </div>
              <div class="row title-prod">
                  <p><?php echo $nom  ?></p>
              </div>
              <div class="row desc-prod">
                  <p><?php echo $desc ?></p>
              </div>
              <div class="row prix-prod">
                $<?php echo $prix ?>
              </div>
              <div class="row title-comp">
                <p>Quantité :<?php echo $qt;?> </p>
              </div>
              <div class="row">
                <p class="btn_achter" num='<?php echo $id;?>'><img src="../../assets/images/icon-cart.svg"> Acheter le produit</p>
              </div>
          </div>
      </div>
    </div>

  
    <?php 
     require_once 'footer_user.php';
    ?>