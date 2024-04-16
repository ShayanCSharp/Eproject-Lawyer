<?php session_start();if(isset($_SESSION['userLoggedIn'])){$_SESSION['msg']="You are already logged in";header("Location: index.php");exit(0);}else if(isset($_SESSION['adminLoggedIn'])){$_SESSION['msg']="You are already registered";header("Location: admin/");exit(0);} ?><!doctypehtml><html><head><title>Register || Legal Link</title><link href="assets/images/favicon/apple-touch-icon.png"rel="apple-touch-icon"sizes="180x180"><link href="assets/images/favicon/favicon-32x32.png"rel="icon"sizes="32x32"type="image/png"><link href="assets/images/favicon/favicon-16x16.png"rel="icon"sizes="16x16"type="image/png"><link href="assets/css/login.css"rel="stylesheet"type="text/css"><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="referrerpolicy="no-referrer"><link href="assets/css/bootstrap.min.css"rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"><script src="https://kit.fontawesome.com/a81368914c.js"></script><meta content="width=device-width,initial-scale=1"name="viewport"></head><body><img src="assets/images/login/wave.png"class="wave"><?php include("message.php") ?><div class="main"><div class="main-img"><img src="assets/images/login/bg.svg"></div><div class="login-content"><form><img src="assets/images/login/avatar.svg"><h2 class="title">Register</h2><div class="input-div one"><div class="i"><i class="fas fa-user"></i></div><div class="div"><h5>Full Name</h5><input class="input"id="username"onkeyup="usernameValidate()"> <i class="fa-solid error fa-xmark"id="userError"style="display:none"></i></div></div><div class="input-div pass"><div class="i"><i class="fa-solid fa-envelope"></i></div><div class="div"><h5>Email</h5><input class="input"id="email"onkeyup="emailValidate()"type="email"> <i class="fa-solid error fa-xmark"id="emailError"style="display:none"></i></div></div><div class="input-div pass"><div class="i"><i class="fas fa-lock"></i></div><div class="div"><h5>Phone</h5><input class="input"id="number"onkeyup="numValidate()"type="tel"> <i class="fa-solid error fa-xmark"id="phoneE"style="display:none"></i></div></div><div class="input-div pass"><div class="i"><i class="fas fa-lock"></i></div><div class="div"><h5>Password</h5><input class="input"id="password"onkeyup="passwordValidate()"type="password"> <i class="fa-solid error fa-xmark"id="passError"style="display:none"></i></div></div><div class="row"><div class="col-md-12 col-lg-4"><a class="login text-left"href="index.php">Home Page</a></div><div class="col-md-12 col-lg-8"><a class="login"href="login.php">Already Have an Account? Login</a></div></div><input class="submit"type="submit"value="Register"></form></div></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"></script><script src="assets/js/register.js"type="text/javascript"></script><script src="assets/js/tawkTo.js"></script></body></html>