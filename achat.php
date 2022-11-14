<?php 
  require_once 'includes/classes/config.php';
  if(isset($_GET['id'])==true)
  {
    $id=$_GET['id'];
    $db=new database();
    $stmt=$db->openConnection()->query("SELECT `id_produit`, `nom_prod`, `prix`, `description`, `image`, `image1`, `image2`,`nbr_vente` FROM `produit` WHERE `id_produit`=".$id."");
    while ($row = $stmt->fetch())
    {
      $nom=$row['nom_prod'];
      $prix=$row['prix'];
      $desc=$row['description'];
      $image=$row['image'];
      $image1=$row['image1'];
      $image2=$row['image2'];
      $nbr_vente=$row['nbr_vente'];
    }
    if (isset($_SESSION['id_user'])==false)
    {
      require_once 'header.php';
      echo '
      <body class="sub_page">
      <div class="hero_area">
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="assets/images/logo.png" alt="logo de site">
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
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery.php"> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"> Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="connect.php">Connecter</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>
    <h2 id="title">Fiche de produit</h2>
    <div class="container fiche">
      <div class="row">
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-10">
                    <img src="assets/images/'.$image.'" style="display: block;margin:auto;">
                  </div> 
              </div>
              <div class="row mt-5">
                  <img src="assets/images/'.$image.'" class="col-md-3 img">
                  <img src="assets/images/'.$image1.'" class="col-md-3 img">
                  <img src="assets/images/'.$image2.'" class="col-md-3 img">  
              </div>
          </div>
          <div class="col-md-6">
              <div class="row title-comp">
                  <p>DHAYBY COMPANY</p>
              </div>
              <div class="row title-prod">
                  <p>'.$nom.'</p>
              </div>
              <div class="row desc-prod">
                  <p>'.$desc.'</p>
              </div>
              <div class="row prix-prod">
                  $'.$prix.'
              </div>
              <div class="row title-comp">
                  <p>Nombre des ventes :'.$nbr_vente.'</p>
              </div>
              <div class="row title-comp">
                <p>Quantité :</p>
              </div>
              <div class="row">
                <img src="assets/images/icon-minus.svg" class="nbr-qt" id="moins" width="20" height="8" alt="min">&nbsp;<input type="text" value="1" class="qt" disabled>&nbsp;<img src="assets/images/icon-plus.svg" width="20" height="20" class="nbr-qt" id="plus" alt="max">&nbsp;&nbsp;&nbsp;&nbsp;<p class="btn_pannier"><img src="assets/images/icon-cart.svg"> Ajouter au pannier</p>
              </div>
          </div>
      </div>
    </div>
  ';
    require_once "footer.php";
    }
    else
    {
      require_once 'header.php';
      echo '
      <body class="sub_page">
      <div class="hero_area">
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo.png" alt="logo de site">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="includes/user/index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/user/about_user.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/user/gallery_user.php"> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/user/contact_user.php"> Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kandirou3</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Commandes</a></li>
                      <li><a class="dropdown-item" href="#">Pannier</a></li>
                      <hr>
                      <li><a class="dropdown-item" href="includes/user/deconnecter.php">Déconnecter</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>
            </div>
          </nav>
      </div>
  </header>
  </div>
  
  <h2 id="title">Fiche de produit</h2>
    <div class="container fiche">
      <div class="row">
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-10">
                    <img src="assets/images/'.$image.'" style="display: block;margin:auto;">
                  </div> 
              </div>
              <div class="row">
              <img src="assets/images/'.$image.'" class="col-md-3 img">
              <img src="assets/images/'.$image1.'" class="col-md-3 img">
              <img src="assets/images/'.$image2.'" class="col-md-3 img">  
              </div>
          </div>
          <div class="col-md-6 mt-5">
              <div class="row title-comp">
                  <p>DHAYBY COMPANY</p>
              </div>
              <div class="row title-prod">
                  <p>'.$nom.'</p>
              </div>
              <div class="row desc-prod">
                  <p>'.$desc.'</p>
              </div>
              <div class="row prix-prod">
                  $'.$prix.'
              </div>
              <div class="row title-comp">
                  <p>Quantité :</p>
              </div>
              <div class="row">
                <img src="assets/images/icon-minus.svg" class="nbr-qt" id="moins" width="20" height="8" alt="min">&nbsp;<input type="text" value="1" class="qt" disabled>&nbsp;<img src="assets/images/icon-plus.svg" width="20" height="20" class="nbr-qt" id="plus" alt="max">&nbsp;&nbsp;&nbsp;&nbsp;<p class="btn_pannier"><img src="assets/images/icon-cart.svg"> Ajouter au pannier</p>
              </div>
          </div>
      </div>
    </div>
  
  ';
    require_once 'footer.php';
    }
  }
  else{
    header("location:index.php");
    exit();
  }

?>


