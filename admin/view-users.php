<?php session_start();if(!isset($_SESSION['adminLoggedIn'])){$_SESSION['msg']="You are not authorised as admin";header("Location: ../login.php");exit(0);}else{} ?><!doctypehtml><html lang="en"><head><meta charset="utf2-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><meta content=""name="description"><meta content=""name="author"><title>View User</title><link href="../assets/images/favicon/apple-touch-icon.png"rel="apple-touch-icon"sizes="180x180"><link href="../assets/images/favicon/favicon-32x32.png"rel="icon"sizes="32x32"type="image/png"><link href="../assets/images/favicon/favicon-16x16.png"rel="icon"sizes="16x16"type="image/png"><link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"rel="stylesheet"><link href="css/styles.css"rel="stylesheet"><script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"crossorigin="anonymous"></script></head><body class="sb-nav-fixed"><?php include("include/nav-bar.php") ?><div id="layoutSidenav"><?php include("include/side-bar.php") ?><div id="layoutSidenav_content"><main><div class="container-fluid px-4"><h1 class="mt-4">View Users</h1><ol class="mb-4 breadcrumb"><li class="active breadcrumb-item">Dashboard</li></ol><div class="row"><?php include("message.php") ?><div class="mb-4 col"><a class="btn btn-primary"href="index.php">Go Back</a></div><table class="table table-striped"><thead><tr><th>Id</th><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead><tbody></tbody></table></div></div></main><?php include("include/footer.php") ?></div></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script><script src="js/scripts.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.7.1.min.js"crossorigin="anonymous"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="></script><script>$(document).ready(function() {
            const getData = () => {
                $.ajax({
                    url: "php/get-users.php",
                    type: "POST",
                    success: item => {
                        $(".table tbody").html(item);
                    },
                });
            }

            getData()

        });</script></body></html>