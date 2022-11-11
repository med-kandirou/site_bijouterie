<?php
  require_once 'includes/classes/config.php';
 ?>
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
<body>
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
    
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="design-box">
        <img src="assets/images/design-1.png" alt="bijoux d'or">
      </div>
      <div class="slider_number-container d-none d-md-block">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span class="jwel">
            J <br>
            e <br>
            w <br>
            e <br>
            l <br>
            l <br>
            e <br>
            r <br>
            y
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="assets/images/slider-img.png" alt="les bijoux">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="assets/images/slider-img.png" alt="bijou 1">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr>
                    </h2>
                    <h1>
                      Jewellery
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                      aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="assets/images/slider-img.png" alt="bijou 2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->
  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
      <?php
        $db=new database();
        $query="select * from produits";
        $stmt=$db->openConnection()->query("SELECT `id_produit`, `nom_prod`, `image` FROM `produit` ORDER BY prix LIMIT 3");
        while ($row = $stmt->fetch()){
          echo '
          <div class="box" num="'.$row['id_produit'].'">
          <div class="price">
            <h6>
              Meilleur prix
            </h6>
          </div>
          <div class="img-box">
            <img src="assets/images/'.$row['image'].'" alt="bijoux">
          </div>
          <div class="name">
            <h5>'.$row['nom_prod'].'</h5>
          </div>
         </div> ';
      }
      ?>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="assets/images/design-2.png" alt="photo de bijoux">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Jewellery Shop
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <div>
              <a href="about.php">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="assets/images/about-img.png" alt="picture about">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Jewellery Price
        </h2>
      </div>
      <div class="price_container">

      <?php
        $db=new database();
        $query="select * from produits";
        $stmt=$db->openConnection()->query("SELECT `id_produit`, `nom_prod`,`prix`, `image` FROM `produit` ORDER BY prix desc LIMIT 3");
        while ($row = $stmt->fetch()){
          echo '
          <div class="box" num="'.$row['id_produit'].'">
          <div class="name">
            <h6>
              '.$row['nom_prod'].'
            </h6>
          </div>
          <div class="img-box">
            <img src="assets/images/'.$row['image'].'" alt="prod '.$row['id_produit'].'">
          </div>
          <div class="detail-box">
            <h5>
              $<span>'.$row['prix'].'</span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>';
      }
      ?>
      
  </section>
  <!-- end price section -->
  <!-- ring section -->

  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="assets/images/design-1.png" alt="">
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                special
              </h4>
              <h2>
                Wedding Ring
              </h2>
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="assets/images/ring-img.jpg" alt="prod 4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end ring section -->

  <!-- client section -->

  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <h4 class="secondary_heading">
        What is says our customer
      </h4>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="assets/images/client.png" alt="client 1">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="assets/images/client.png" alt="client 2">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                  <img src="assets/images/client.png" alt="client 3">
                </div>
                <div class="name">
                  <h5>
                    Aliqua
                  </h5>
                  <h6>
                    Consectetur adipiscing
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="assets/images/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="assets/images/location.png" alt="localisation">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="assets/images/phone.png" alt="phone">
                <span>
                  +01 1234567890
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="assets/images/mail.png" alt="mail">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <input type="text" id="email2" placeholder="Enter Your Email">
            </div>
            <div>
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="assets/images/fb.png" alt="facebook">
            </a>
            <a href="">
              <img src="assets/images/twitter.png" alt="twitter">
            </a>
            <a href="">
              <img src="assets/images/linkedin.png" alt="linkden">
            </a>
            <a href="">
              <img src="assets/images/insta.png" alt="instagram">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved 
    </p>
  </section>
  <!-- footer section -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets/js/achat.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>