<?php
  require_once 'includes/user/header.php';
?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php
    require_once 'includes/user/navbar.php';
  ?>
    <!-- end header section -->
  </div>
  <section class="vh-90" style="background-color: withe;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            
            
              <div class="card-body p-4 p-lg-5 text-black">

                <form>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Se connecter</span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="email_login"  class="form-control form-control-lg" />
                    <label class="form-label email_login" for="email_login">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="pass_login" class="form-control form-control-lg" />
                    <label class="form-label pass_login" for="pass_login">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button" id="login">Connecter</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous n'avez pas un compte ?<a href="./inscription.php"style="color: #393f81;"> S'inscrire</a></p>
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