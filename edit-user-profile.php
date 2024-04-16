<?php session_start();if(empty($_SESSION['userLoggedIn'])){$_SESSION['msg']="You are not logged in yet";header("Location: login.php");exit(0);} ?><?php  ?><!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><meta content="ie=edge"http-equiv="X-UA-Compatible"><title>Edit Profile</title><link href="assets/images/favicon/apple-touch-icon.png"rel="apple-touch-icon"sizes="180x180"><link href="assets/images/favicon/favicon-32x32.png"rel="icon"sizes="32x32"type="image/png"><link href="assets/images/favicon/favicon-16x16.png"rel="icon"sizes="16x16"type="image/png"><link href="assets/images/favicon/site.webmanifest"rel="manifest"><meta content="#e0a965"name="theme-color"><meta content="#e0a965"name="msapplication-navbutton-color"><meta content="#e0a965"name="apple-mobile-web-app-status-bar-style"><link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap"rel="stylesheet"><link href="assets/css/animate.css"rel="stylesheet"><link href="assets/css/bootstrap.min.css"rel="stylesheet"><link href="assets/css/bootstrap-datepicker.min.css"rel="stylesheet"><link href="assets/css/bootstrap-select.min.css"rel="stylesheet"><link href="assets/css/hover-min.css"rel="stylesheet"><link href="assets/css/magnific-popup.css"rel="stylesheet"><link href="assets/css/owl.carousel.min.css"rel="stylesheet"><link href="assets/css/owl.theme.default.min.css"rel="stylesheet"><link href="assets/plugins/opklim-icons/style.css"rel="stylesheet"><link href="assets/plugins/fontawesome-5/css/all.min.css"rel="stylesheet"><link href="assets/css/nouislider.css"rel="stylesheet"><link href="assets/css/nouislider.pips.css"rel="stylesheet"><link href="assets/css/jquery.bootstrap-touchspin.min.css"rel="stylesheet"><link href="assets/css/jquery.mCustomScrollbar.min.css"rel="stylesheet"><link href="assets/css/style.css"rel="stylesheet"><link href="assets/css/responsive.css"rel="stylesheet"></head><body><div class="preloader"><span><img alt="Awesome Image"src="assets/images/resources/preloader.png"></span></div><div class="page-wrapper"><?php include("assets/inc/nav-bar.php") ?><section class="inner-banner inner-banner__overlay-two"style="background-image:url(assets/images/background/home1.webp)"><div class="container"><p class="inner-banner__tag-line">Most Successful Law Firm</p><h2 class="inner-banner__title">Edit Account Information</h2><ul class="list-unstyled thm-breadcrumb"><li><a href="index.php">User Profile</a></li><li>Edit Profile</li></ul></div></section><section class="about-two"><div class="container"><div class="row no-gutters"><div class="col-12"><?php include("assets/inc/db_conn.php");if(!isset($_GET['id'])){ ?><h1 class="text-center text-dark">No Profile Found</h1><?php }else{$id=$_GET['id'];$sql=mysqli_query($conn,"SELECT * FROM `registeruser` WHERE id = '$id'");if(mysqli_num_rows($sql)>0){foreach($sql as $info); ?><form method="post"><h2><b>Update<?=$info['name']?></b></h2><div class="row mt-4"><div class="col-lg-6 col-md-12"><label class="form-label"for="">Full Name</label> <input class="form-control"name="name"required value="<?=$info['name']?>"></div><div class="col-lg-6 col-md-12"><label class="form-label"for="">Email Address</label> <input class="form-control"name="email"required value="<?=$info['email']?>"type="email"></div></div><div class="row mt-4"><div class="col-lg-6 col-md-12"><label class="form-label"for="">Phone</label> <input class="form-control"name="phone"required value="<?=$info['phone']?>"></div><div class="col-lg-6 col-md-12"><label class="form-label"for="">Update</label> <button class="btn btn-success w-100"name="update"type="submit"value="<?=$id?>">Update</button></div></div></form><?php }else{ ?><h1 class="text-center text-dark">No Profile Found</h1><?php }} ?></div></div></div></section><?php include("assets/inc/footer.php") ?></div><?php include("assets/inc/search-pop.php") ?><a href="#"class="scroll-to-target scroll-to-top"data-target="html"><i class="fa fa-angle-up"></i></a><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/bootstrap-datepicker.min.js"></script><script src="assets/js/bootstrap-select.min.js"></script><script src="assets/js/isotope.js"></script><script src="assets/js/jquery.counterup.min.js"></script><script src="assets/js/jquery.magnific-popup.min.js"></script><script src="assets/js/jquery.validate.min.js"></script><script src="assets/js/owl.carousel.min.js"></script><script src="assets/js/TweenMax.min.js"></script><script src="assets/js/jquery.enllax.min.js"></script><script src="assets/js/waypoints.min.js"></script><script src="assets/js/wow.min.js"></script><script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script><script src="assets/js/circle-progress.min.js"></script><script src="assets/js/jquery.ajaxchimp.min.js"></script><script src="assets/js/search.js"></script><script src="assets/js/nouislider.js"></script><script src="assets/js/jquery.bootstrap-touchspin.min.js"></script><script src="assets/js/theme.js"></script><script src="assets/js/tawkTo.js"></script></body></html><?php if(isset($_POST['update'])){$name=$_POST['name'];$email=$_POST['email'];$phone=$_POST['phone'];$sql=mysqli_query($conn,"UPDATE `registeruser` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id = '$id'");if($sql){$_SESSION['msg']="Updated Successfully";echo "<script>window.location.href = 'user-profile.php?id=".$id."';</script>";}else{$_SESSION['msg']="Error. Try again";echo "<script>window.location.href = 'user-profile.php?id=".$id."';</script>";}} ?>