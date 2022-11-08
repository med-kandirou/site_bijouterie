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
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $_SESSION['prenom']; ?> </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Commandes</a></li>
                    <li><a class="dropdown-item" href="#">Pannier</a></li>
                    <li><a class="dropdown-item" href="#">Déconnecter</a></li>
                  </ul>
                </li> 
              </ul>
            </div>
          </div>
        </nav>
    </div>
</header>