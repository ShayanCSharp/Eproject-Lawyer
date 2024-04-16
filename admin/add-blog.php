<?php session_start();if(!isset($_SESSION['adminLoggedIn'])){$_SESSION['msg']="You are not authorised as admin";header("Location: ../login.php");exit(0);}else{} ?><!doctypehtml><html lang="en"><head><meta charset="utf2-8"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><meta content=""name="description"><meta content=""name="author"><title>Add Blog</title><link href="../assets/images/favicon/apple-touch-icon.png"rel="apple-touch-icon"sizes="180x180"><link href="../assets/images/favicon/favicon-32x32.png"rel="icon"sizes="32x32"type="image/png"><link href="../assets/images/favicon/favicon-16x16.png"rel="icon"sizes="16x16"type="image/png"><link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"rel="stylesheet"><link href="css/styles.css"rel="stylesheet"><script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"crossorigin="anonymous"></script><link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css"rel="stylesheet"></head><body class="sb-nav-fixed"><?php include("include/nav-bar.php") ?><div id="layoutSidenav"><?php include("include/side-bar.php") ?><div id="layoutSidenav_content"><main><div class="container-fluid px-4"><h1 class="mt-4">Dashboard</h1><ol class="mb-4 breadcrumb"><li class="active breadcrumb-item">Dashboard</li></ol><div class="row"><?php include("message.php") ?><div class="col mb-4"><a class="btn btn-primary"href="index.php">Go Back</a></div><div class="card"><div class="card-body"><form><div class="row"><div class="col-lg-6 col-md-12"><label class="form-label"for="">Title</label> <input class="form-control"id="title"required></div><div class="col-lg-6 col-md-12"><label class="form-label"for="">Slug (URL)</label> <input class="form-control"id="slug"required></div></div><div class="row mt-4"><div class="col-lg-6 col-md-12"><label class="form-label"for="">Image</label> <input class="form-control"id="img"required type="file"></div><div class="col-lg-6 col-md-12"><label class="form-label">Meta Description</label> <input class="form-control"id="meta_des"name=""></div></div><div class="row mt-4"><div class="col-12"><label class="form-label"for="">Description</label> <textarea class="form-control"id="your_summernote"name="description"rows="4"></textarea></div></div><div class="row mt-4"><div class="col"><button class="btn btn-success w-100"type="submit">Add</button></div></div></form></div></div></div></div></main><?php include("include/footer.php") ?></div></div><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script><script src="js/scripts.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"crossorigin="anonymous"></script><script src="js/datatables-simple-demo.js"></script><script>$(document).ready(function() {
            // Initialize Summernote
            $("#your_summernote").summernote();

            // Form submission event
            $("form").on("submit", function(e) {
                e.preventDefault(); // Prevent the actual form submission

                // Create FormData object
                let formData = new FormData();

                // Append form fields to the FormData
                formData.append('title', $("#title").val());
                formData.append('slug', $("#slug").val());
                formData.append('image', $('#img')[0].files[0]); // Append file
                formData.append('meta_des', $("#meta_des").val());
                // Extract text content from Summernote and append
                let summernoteHTMLContent = $('#your_summernote').summernote('code');
                formData.append('description', summernoteHTMLContent);

                // AJAX request with FormData
                $.ajax({
                    url: "php/add-blog.php",
                    type: "POST",
                    data: formData,
                    contentType: false, // Required for 'multipart/form-data' type, which is used for file uploads
                    processData: false, // Ensures that data isn't converted to a query string
                    success: function(response) {
                        if (response.endsWith(".php")) {
                            window.location.href = response;
                        } else {
                            alert(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error: " + status + " " + error);
                    }
                });
            });
        });</script></body></html>