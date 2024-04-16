<?php session_start(); ?>

<div class="topbar-two">
  <div class="container">
    <div class="topbar-two__left">
      <a class="topbar-two__link" href="tel:1-258-985-703"><i class="fa fa-phone-alt"></i>
        <span>1-000-000-000</span></a>
      <a class="topbar-two__link" href="mailto:shayanalam8931@gmail.com.com"><i class="fa fa-envelope-open"></i>support@legallink.com</a>
    </div>
    <!-- /.topbar-two__left -->
    <div class="topbar-two__right">
      <?php
      if (isset($_SESSION['adminLoggedIn'])) {
      ?>
        <a href="admin/" class="thm-btn header-booking__btn">Go to Dashboard<i class="fas fa-long-arrow-alt-right"></i></a>
      <?php
      } else if (isset($_SESSION['userLoggedIn'])) {
      ?>
        <a href="user-profile.php?id=<?= $_SESSION['userId'] ?>" class="thm-btn header-booking__btn">Profile<i class="fas fa-long-arrow-alt-right"></i></a>
      <?php
      } else {
      ?>
        <a href="lawyer-register.php" class="thm-btn header-booking__btn">Lawyer Register<i class="fas fa-long-arrow-alt-right"></i></a>
      <?php
      }
      ?>
    </div>
    <!-- /.topbar-two__right -->
  </div>
  <!-- /.container -->
</div>
<!-- /.topbar-two -->

<header class="site-header site-header__header-two">
  <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
    <div class="container clearfix">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="logo-box">
        <a class="navbar-brand" href="index.php">
          <img src="assets/logo.png" class="main-logo" alt="Awesome Image" style="width: 80px !important" />
        </a>
        <button class="menu-toggler" data-target=".main-navigation">
          <span class="fa fa-bars"></span>
        </button>
      </div>
      <!-- /.logo-box -->
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="main-navigation">
        <ul class="navigation-box">
          <li class="current">
            <a href="index.php">Home</a>
            <!-- /.submenu -->
          </li>
          <li>
            <a href="about.php">About</a>
          </li>

          <li>
            <a href="#">Practice Areas</a>
            <ul>
              <?php
              include("db_conn.php");

              $sql = mysqli_query($conn, "SELECT * FROM `practiceareas` WHERE visible = 1");

              if (mysqli_num_rows($sql) > 0) {
                foreach ($sql as $row) {
              ?>
                  <li><a href="practice-area.php?slug=<?= $row['slug'] ?>"><?= $row['name'] ?></a></li>
              <?php
                }
              }
              ?>
            </ul>
            <!-- /.submenu -->
          </li>

          <!-- <li>
                  <a href="team-member.php">Attorneys</a>
                </li> -->
          <li>
            <a href="blog-classic.php">Blogs</a>
            <ul>
              <?php
              $sql = mysqli_query($conn, "SELECT * FROM `blogs`");

              if (mysqli_num_rows($sql) > 0) {
                foreach ($sql as $blog) {
              ?>
                  <li><a href="blog-post.php?slug=<?= $blog['slug'] ?>"><?= $blog['title'] ?></a></li>
              <?php
                }
              } else {
              }
              ?>
            </ul>
            <!-- /.submenu -->
          </li>
          <?php
          if (isset($_SESSION['userLoggedIn'])) {
          ?>
            <li>
              <a href="user-profile.php?id=<?= $_SESSION['userId'] ?>">Profile</a>
            </li>
          <?php
          } else {
          ?>
            <li>
              <a href="login.php">Login</a>
            </li>
          <?php
          }
          ?>
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <div class="right-side-box">
        <a href="#" class="header__search search-popup__toggler"><i class="fas fa-search"></i></a>
      </div>
      <!-- /.right-side-box -->
    </div>
    <!-- /.container -->
  </nav>
</header>