<?php
session_start();

require './class/database1.php';

if(!isset($_SESSION['userid'])){
    header("location:login.php");
}


    $q = mysqli_query($connection, "select * from tbl_user where user_id='{$_SESSION['userid']}'");

    $data = mysqli_fetch_array($q);
    ?>

<!DOCTYPE html>
<html lang="zxx">

    <!-- Mirrored from templates.hibootstrap.com/jeel/default/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:35:52 GMT -->
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
        <title>Edit Profile</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>

        <?php
        include './top_menu.php';
        ?>


        <div class="page-title-wrap">
            <div class="page-title-area title-img-seven">
                <div class="title-shape">
                    <img src="assets/images/title/title-shape1.png" alt="Shape">
                </div>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="title-content">
                            <h2>Profile</h2>
                            <ul>
                                <li>
                                    <a href="home_page.php">Home</a>
                                </li>
                                <li>
                                    <span>Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="appointment-area ptb-100">
            <div class="container">
                <div class="appointment-content">
                    <div class="appointment-shape">
                        <img src="assets/images/contact-shape1.png" alt="Shape">
                        <img src="assets/images/contact-shape2.png" alt="Shape">
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $data['user_name'] ?>" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $data['gender'] ?>" placeholder="Gender" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="<?php echo $data['email'] ?>" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" value="<?php echo $data['password'] ?>" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $data['phone_no'] ?>" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputFile" style="color: white">Profile Picture</label>
                                    <input type="file" id="exampleInputFile" value="<?php echo $data['photo'] ?>" accept="image/*">
                                    <p class="help-block" style="color: white">(*.jpg,*.png,*.jpeg only)</p>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address"><?php echo $data['address'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" value="<?php echo $data['dob'] ?>" placeholder="Date Of Birth" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <a class="common-btn three nav-btn" href="profile.php">SAVE</a>
                                    &nbsp; &nbsp; &nbsp; &nbsp; 
                                    <a class="common-btn three nav-btn" href="profile.php">RESET</a>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

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

    <!-- Mirrored from templates.hibootstrap.com/jeel/default/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:35:52 GMT -->
</html>