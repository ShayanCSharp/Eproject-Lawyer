<?php include("assets/inc/db_conn.php");if(isset($_GET['slug'])){$slug=$_GET['slug'];$sql=mysqli_query($conn,"SELECT * FROM `blogs` WHERE slug = '$slug'");foreach($sql as $blog);} ?><!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><meta content="ie=edge"http-equiv="X-UA-Compatible"><title><?=$blog['title']?></title><meta content="<?=$blog['meta_description']?>"name="description"><link href="assets/images/favicon/apple-touch-icon.png"rel="apple-touch-icon"sizes="180x180"><link href="assets/images/favicon/favicon-32x32.png"rel="icon"sizes="32x32"type="image/png"><link href="assets/images/favicon/favicon-16x16.png"rel="icon"sizes="16x16"type="image/png"><link href="assets/images/favicon/site.webmanifest"rel="manifest"><meta content="#e0a965"name="theme-color"><meta content="#e0a965"name="msapplication-navbutton-color"><meta content="#e0a965"name="apple-mobile-web-app-status-bar-style"><link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap"rel="stylesheet"><link href="assets/css/animate.css"rel="stylesheet"><link href="assets/css/bootstrap.min.css"rel="stylesheet"><link href="assets/css/bootstrap-datepicker.min.css"rel="stylesheet"><link href="assets/css/bootstrap-select.min.css"rel="stylesheet"><link href="assets/css/hover-min.css"rel="stylesheet"><link href="assets/css/magnific-popup.css"rel="stylesheet"><link href="assets/css/owl.carousel.min.css"rel="stylesheet"><link href="assets/css/owl.theme.default.min.css"rel="stylesheet"><link href="assets/plugins/opklim-icons/style.css"rel="stylesheet"><link href="assets/plugins/fontawesome-5/css/all.min.css"rel="stylesheet"><link href="assets/css/nouislider.css"rel="stylesheet"><link href="assets/css/nouislider.pips.css"rel="stylesheet"><link href="assets/css/jquery.bootstrap-touchspin.min.css"rel="stylesheet"><link href="assets/css/jquery.mCustomScrollbar.min.css"rel="stylesheet"><link href="assets/css/style.css"rel="stylesheet"><link href="assets/css/responsive.css"rel="stylesheet"></head><body><div class="preloader"><span><img alt="Awesome Image"src="assets/images/resources/preloader.png"></span></div><div class="page-wrapper"><?php include("assets/inc/nav-bar.php") ?><section class="inner-banner"style="background-image:url(assets/images/background/blogs.webp);background-size:cover"><div class="container"><p class="inner-banner__tag-line">Most Successful Law Firm</p><h2 class="inner-banner__title"><?=$blog['title']?></h2><ul class="list-unstyled thm-breadcrumb"><li><a href="index.php">Home</a></li><li><a href="blog-grid.php">Blog</a></li><li><?=$blog['title']?></li></ul></div></section><section class="blog-details-page blog-one blog-one__classic"><div class="container"><div class="no-gutters row"><div class="col-lg-9"><div class="blog-one__classic-content"><div class="blog-one__single"><div class="blog-one__image"><div class="blog-one__image-inner"><img alt="Awesome Image"src="admin/assets/img/blog/<?=$blog['featured_image']?>"></div></div><div class="blog-one__content"><h3 class="blog-one__title"><?=$blog['title']?></h3><p class="blog-one__text"><?=$blog['description']?></p><div class="blog-one__bottom"><div class="blog-details__tags"><a href="#">Bankruptcy</a> <a href="#">Corporate Law</a> <a href="#">Immigration</a></div><a href="#"class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">share this</span></a></div></div></div></div></div><?php include("assets/inc/blog-side-bar.php") ?></div></div></section><?php include("assets/inc/footer.php") ?></div><?php include("assets/inc/search-pop.php") ?><a href="#"class="scroll-to-target scroll-to-top"data-target="html"><i class="fa fa-angle-up"></i></a><script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/bootstrap-datepicker.min.js"></script><script src="assets/js/bootstrap-select.min.js"></script><script src="assets/js/isotope.js"></script><script src="assets/js/jquery.counterup.min.js"></script><script src="assets/js/jquery.magnific-popup.min.js"></script><script src="assets/js/jquery.validate.min.js"></script><script src="assets/js/owl.carousel.min.js"></script><script src="assets/js/TweenMax.min.js"></script><script src="assets/js/jquery.enllax.min.js"></script><script src="assets/js/waypoints.min.js"></script><script src="assets/js/wow.min.js"></script><script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script><script src="assets/js/circle-progress.min.js"></script><script src="assets/js/jquery.ajaxchimp.min.js"></script><script src="assets/js/search.js"></script><script src="assets/js/nouislider.js"></script><script src="assets/js/jquery.bootstrap-touchspin.min.js"></script><script src="assets/js/theme.js"></script><script src="assets/js/tawkTo.js"></script></body></html>