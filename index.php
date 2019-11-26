<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

if (empty($_SESSION['Username'])){
    header('location: login.php');

}
if(isset($_GET['add_to_cart'])){
    $cookieAdd=$_GET['add_to_cart'];
    switch ($cookieAdd) {
        case 46:
            if(!isset($_COOKIE['cookie']['pecan'])) {
                setcookie("cookie[pecan]", 1, 0);
            } else {
                setcookie('cookie[pecan]', $_COOKIE['cookie']['pecan'] + 1, 0);
            }
            var_dump($_COOKIE['cookie']);
            break;
        case 36:
            if(!isset($_COOKIE['cookie']['chips'])) {
                setcookie("cookie[chips]", 1, 0);
            } else {
                setcookie('cookie[chips]', $_COOKIE['cookie']['chips'] + 1, 0);
            }
            var_dump($_COOKIE['cookie']);
            break;
        case 58:
            if(!isset($_COOKIE['cookie']['chocolate'])) {
                setcookie("cookie[chocolate]", 1, 0);
            } else {
                setcookie('cookie[chocolate]', $_COOKIE['cookie']['chocolate'] + 1, 0);
            }
            var_dump($_COOKIE['cookie']);
            break;
        case 32:
            if(!isset($_COOKIE['cookie']['mms'])) {
                setcookie("cookie[mms]", 1, 0);
            } else {
                setcookie('cookie[mms]', $_COOKIE['cookie']['mms'] + 1, 0);
            }
            var_dump($_COOKIE['cookie']);
            break;
        default:
            echo "Aucun cookie sélectionné";
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php
require 'inc/foot.php';
?>
