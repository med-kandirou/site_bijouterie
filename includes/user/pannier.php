<?php
require_once 'header_user.php';
 ?>

<link href="../../assets/css/panier.css" rel="stylesheet"/>
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
                $stmt = $db->openConnection()->query("select p.id_produit, p.nom_prod ,p.prix ,p.image from produit p inner join pannier on pannier.id_prod=p.id_produit AND pannier.id_user=".$_SESSION['id_user']."");
                if($stmt->rowCount()>0){
                    while ($row = $stmt->fetch()) {
                        echo '
                        <div class="col-md-3 prod">
                            <div class="info">
                                <p>'.$row['nom_prod'].'</p>
                                <img src="../../assets/images/'.$row['image'].'">
                                <p class="prix"><i>$  </i><span class="price">'.$row['prix'].'</span></p>
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success achete" value="'.$row['id_produit'].'">Acheter</button>
                                    </div>
                                    <button type="button" class="btn btn-danger mt-3 delete" value="'.$row['id_produit'].'">Supprimer</button>
                            </div>
                        </div>
                        ';
                    }
                }
                else{
                    echo'<img style="display:block;margin-left:auto;margin-right:auto;" src="../../assets/images/empty-cart.png">';
                }
            ?>
        </div>
    </div>

    <?php
  require_once 'footer_user.php';
  ?>
</body>

</html>