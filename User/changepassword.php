<?php
session_start();

require './class/database1.php';

if(!isset($_SESSION['userid']))
{
   header("location:login.php");
}
if($_POST)
{
    $opass= $_POST['opass'];
    $npass= $_POST['npass'];
    $cpass= $_POST['cpass'];
    
    $oldpasswordquey= mysqli_query($connection, "select password from tbl_user where user_id='{$_SESSION['userid']}'") or die(mysqli_error($connection));
    $oldpasswordfromdb= mysqli_fetch_array($oldpasswordquey);
    //print_r($oldpasswordfromdb);
    if($oldpasswordfromdb['password']==$opass)
    {
        if($npass==$cpass)
        {
            if($opass==$npass)
            {
                echo "<script>alert('Old password and New password must be different. Please enter a different password!');</script>";
            } else
            {
                $updateq= mysqli_query($connection, "update tbl_user set password='{$npass}' where user_id='{$_SESSION['userid']}'") or die(mysqli_error($connection));
                if($updateq)
                {
                    echo "<script>alert('Password changed successfuly!');</script>";
                }
            }
        } else
        {
            echo "<script>alert('New password and Confirm password must be same. Please enter passwords correctly!');</script>";
        }
    } else
    {
        echo "<script>alert('Old password did not match. Please enter correct password!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/jeel/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:35:48 GMT -->
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
<title>Change Password</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>



<div class="user-area ptb-100">
<div class="container">
<div class="user-item">
<div class="user-shape">
<img src="assets/images/contact-shape1.png" alt="Shape">
<img src="assets/images/contact-shape2.png" alt="Shape">
</div>
<h2>Change Password</h2>
<form method="post">
<div class="form-group">
    <input type="Password" class="form-control" name="opass" placeholder="Old Password" required>
</div>
<div class="form-group">
    <input type="Password" class="form-control" name="npass" placeholder="New Password" required>
</div>
<div class="form-group">
    <input type="Password" class="form-control" name="cpass" placeholder="Confirm Password" required>
</div>
<button type="submit" class="btn common-btn two">Change Password</button>

</form>
</div>
</div>
</div>


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

<!-- Mirrored from templates.hibootstrap.com/jeel/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2021 17:35:49 GMT -->
</html>