<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="les bijoux en or ,gifts, cadeau, dating , love, family, marriage,commitment"/>
  <meta name="description" content="ce site web est boutique des modernes bijoux avec bon qualité et meilleur prix avec garantie ..." />
  <meta name="author" content="mohamed kandirou"/>

  <title>Lodge</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet"/>
  <link href="assets/css/MonStyle.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet"/>
</head>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="./assets/images/logo.png" alt="logo de site">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
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
    <!-- end header section -->
    <!-- end header section -->
  </div>
  <section class="vh-90" style="background-color: withe;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-90">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            
              <div class="card-body p-4 p-lg-5 text-black">
                <form>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">S'inscrire</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="nom" class="form-control form-control-lg" value="dd" />
                    <label class="form-label nom" for="nom">Nom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="prenom" class="form-control form-control-lg" value="dd"/>
                    <label class="form-label prenom" for="prenom">Prenom</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="email" class="form-control form-control-lg" value="mohammed.taza19@gmail.com" />
                    <label class="form-label email" for="email">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="phone" class="form-control form-control-lg" value="0639872239"/>
                    <label class="form-label phone" for="phone">Telephone</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="mdp" class="form-control form-control-lg" value="SIMOKN123@" />
                    <label class="form-label mdp" for="mdp">Mot de passe</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="Cmdp" class="form-control form-control-lg" value="SIMOKN123@"/>
                    <label class="form-label Cmdp" for="Cmdp">Confirmation de mot de passe</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button" id="inscrire">Inscrire</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous avez dèja un compte ? <a href="./connect.php"
                      style="color: #393f81;">Se connecter</a></p>
                      <div class="alert alert-danger alert-dismissible ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="errors"></p>
                      </div>
                </form>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <?php
  require_once 'includes/footer.php';
  ?>

</body>
<script type="text/javascript" src="assets/js/connection.js"></script>
</html>