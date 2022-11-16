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

    <h2 id="title">Mon Panier</h2>
    <div class="container">
        <div class="row">
            <?php
                $db = new database();
                $query = "select * from produits";
                $stmt = $db->openConnection()->query("select p.id_produit, p.nom_prod ,p.prix ,p.image, pannier.qantité from produit p inner join pannier on pannier.id_prod=p.id_produit AND pannier.id_user=".$_SESSION['id_user']."");
                if($stmt->rowCount()>0){
                    while ($row = $stmt->fetch()) {
                        echo '
                        <div class="col-md-3">
                            <div class="info">
                            <p>'.$row['nom_prod'].'</p>
                            <img src="../../assets/images/'.$row['image'].'">
                            <p>$<span class="price">'.$row['prix'].'</span></p>
                            <p class="buy">buy now</p>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>

    <?php
  require_once 'footer_user.php';
  ?>
</body>

</html>