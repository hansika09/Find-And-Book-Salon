
<!DOCTYPE html>
<html lang="zxx">

    <!-- Mirrored from templates.hibootstrap.com/jeel/default/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:36:07 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/boxicons.min.css">

        <link rel="stylesheet" href="assets/css/meanmenu.css">

        <link rel="stylesheet" href="assets/css/animate.min.css">

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="assets/css/modal-video.min.css">

        <link rel="stylesheet" href="assets/css/odometer.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
        <link rel="stylesheet" type="text/css" href="assets/css/layers.css">
        <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">

        <link rel="stylesheet" href="assets/css/nice-select.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>Salon Details</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>

        <?php
        include './top_menu.php';
        ?>
        <div class="page-title-wrap">
            <div class="page-title-area title-img-four">
                <div class="title-shape">
                    <img src="assets/images/title/title-shape1.png" alt="Shape">
                </div>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="title-content">
                            <h2>Salon Details</h2>
                            <ul>
                                <li>
                                    <a href="home_page.php">Home</a>
                                </li>
                                <li>
                                    <span>Salon Details</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require './class/database1.php';
        $id = $_GET['id'];
        $q = mysqli_query($connection, "select * from tbl_salon where salon_id  ='{$id}'") or die(mysqli_error($connection));

        $data = mysqli_fetch_array($q);
        
        $sq = mysqli_query($connection, "select * from  tbl_rating where salon_id ") or die(mysqli_error($connection));
        while ($ratingdata = mysqli_fetch_array($sq)) 
        {
            echo $ratingdata['ratings'];
        
        
        echo "
            <div class = 'product-details-area ptb-100'>
            <div class = 'container'>
            <div class = 'row align-items-center'>
            <div class = 'col-lg-6'>
            <div class = 'shop-item'>
            <div class = 'top'>
            <img src='http://localhost/Admin/$data[6]' style='width:350px;height:350px;' alt='Shop'>
            <ul>
            <li>
            </li>
            <li>
            </li>
            </ul>
            </div>
            </div>
            </div>
            <div class = 'col-lg-6'>
            <div class = 'shop-details'>
            <h2>$data[1]</h2>
            <ul class = 'reviews'>
            <li>
            Rating: 
            <span>$ratingdata[3]</span>
            </li>
            <li>
            <i class = 'bx bxs-star checked'></i>
            </li>
            <li>
            <i class = 'bx bxs-star checked'></i>
            </li>
            <li>
            <i class = 'bx bxs-star checked'></i>
            </li>
            <li>
            <i class = 'bx bxs-star checked'></i>
            </li>
            <li>
            <i class = 'bx bxs-star'></i>
            </li>
            </ul>
            <ul class = 'tag'>
            <li>Owner: <span>$data[2]</span></li>
            </ul>
            <ul class = 'tag'>
            <li>Address: <span>$data[8]</span></li>
            </ul>
            <ul class = 'tag'>
            <li>Category: <span>Beauty and Spa</span></li>
            </ul>
            <ul class = 'cart'>
            <li>
            <ul class = 'number'>
            </ul>
            </li>
            <li>
            <a class = 'common-btn two' href = 'appointment.php'>
            Make Appointment
            <i class = 'fas fa-shopping-basket'></i>
            </a>
            <a class = 'common-btn two' href = 'services.php'>
            Services
            <i class = 'fas fa-shopping-basket'></i>
            </a>
            </li>
            </ul>
            <a class = 'wishlist-btn' href = 'bookmark.php'>
            <i class = 'bx bx-heart'></i>
            Add To Heart
            </a>
            </div>
            </div>
            </div>
             
            </div>
            </div>";
        }
        ?>
        
        <?php
        include './footer.php';
        ?>

        <div class="go-top">
            <i class='bx bxs-up-arrow-alt'></i>
            <i class='bx bxs-up-arrow-alt'></i>
        </div>


        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/form-validator.min.js"></script>

        <script src="assets/js/contact-form-script.js"></script>

        <script src="assets/js/jquery.ajaxchimp.min.js"></script>

        <script src="assets/js/jquery.meanmenu.js"></script>

        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/jquery-modal-video.min.js"></script>

        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>

        <script src="assets/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/jquery.themepunch.revolution.min.js"></script>

        <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.video.min.js"></script>

        <script src="assets/js/jquery.nice-select.min.js"></script>

        <script src="assets/js/custom.js"></script>
    </body>

    <!-- Mirrored from templates.hibootstrap.com/jeel/default/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:36:08 GMT -->
</html>