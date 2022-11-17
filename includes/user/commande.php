
<?php
require_once 'header_user.php';
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
        require_once 'navbar_user.php';
    ?>

    <!-- end header section -->
    <!-- end header section -->
  </div>
  <h2 id="title">Mes commandes</h2>

  <?php
if($_GET['etat']=='ajouter'){
  echo '  <div class="alert alert-success alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> This alert box could indicate a successful or positive action.
</div>';
}
?>
  <?php
  require_once 'footer_user.php';
  ?>
</body>

</html>