
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
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/logo.png" alt="logo de site">
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
    <!-- end header section -->
    <!-- end header section -->
  </div>

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="title_send">
              <h2>
                Send a message
              </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2 mt-2">
                        <label>Name :</label>
                        <input class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6 mb-2 mt-2">
                        <label>Last Name :</label>
                        <input class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Email :</label>
                        <input type="email" class="form-control" placeholder="exemple@gmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Phone :</label>
                        <input type="email" class="form-control" placeholder="+121 639872239">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <label>Message :</label>
                        <textarea class="form-control col-md-12" rows="3" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-2 mt-2 col-md-12">
                        <a href="" class="d-flex justify-content-center col-md-12">
                            Submit
                          </a>
                    </div>
                </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6" id="map">
          <div class="img-box d-flex justify-content-center">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="700" id="gmap_canvas" src="https://maps.google.com/maps?q=taza&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:700px;}</style><a href="https://www.embedgooglemap.net">email google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section -->
  <!-- info section -->
  <?php
  require_once 'footer.php';
?>