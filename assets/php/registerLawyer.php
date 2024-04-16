<?php
    session_start();
    include("db_conn.php");
    
    // Escaping user input to prevent SQL Injection
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $file = $_FILES['file'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $town = mysqli_real_escape_string($conn, $_POST['town']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $postal = mysqli_real_escape_string($conn, $_POST['postal']);
    $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
    $martial = mysqli_real_escape_string($conn, $_POST['martial']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $mobile_num = mysqli_real_escape_string($conn, $_POST['mobile_num']);
    $whatsapp_num = mysqli_real_escape_string($conn, $_POST['whatsapp_num']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $uni_clg = mysqli_real_escape_string($conn, $_POST['uni_clg']);
    $degreeComplete = mysqli_real_escape_string($conn, $_POST['degreeComplete']);
    $legal_city = mysqli_real_escape_string($conn, $_POST['legal_city']);
    $enrolmentYear = mysqli_real_escape_string($conn, $_POST['enrolmentYear']);
    $enrolementType = mysqli_real_escape_string($conn, $_POST['enrolementType']);
    $expertise = mysqli_real_escape_string($conn, $_POST['expertise']);
    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
    $twitter = mysqli_real_escape_string($conn, $_POST['twitter']);
    $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
    $instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
    $aboutLawyer = mysqli_real_escape_string($conn, $_POST['aboutLawyer']);

    $hash_pass = password_hash($password,PASSWORD_DEFAULT);
    $image = $file['name'];

    $sql = mysqli_query($conn,"INSERT INTO `lawyers`(`first_name`, `last_name`, `father_name`, `email`, `password`, `picture`, `address`, `locality`, `district`, `province`, `country`, `postal_code`, `cnic_no`, `date_of_birth`, `martial_status`, `gender`, `mobile_num`, `whatsapp_num`, `degree`, `uni_clg`, `degree_complete`, `city_legal_practice`, `enrollment_year`, `enrollment_type`, `expertise`, `aboutLawyer`, `facebook`, `twitter`, `linkedin`, `instagram`) VALUES ('$first_name','$last_name','$father_name','$email','$hash_pass','$image','$address','$town','$district','$province','$country','$postal','$cnic','$bday','$martial','$gender','$mobile_num','$whatsapp_num','$degree','$uni_clg','$degreeComplete','$legal_city','$enrolmentYear','$enrolementType','$expertise','$aboutLawyer','$facebook','$twitter','$linkedin','$instagram')");

    if($sql){
        move_uploaded_file($file['tmp_name'], "../images/lawyers/".$image);
        $_SESSION['msg'] = "Your account is pending member approval. Upon approval, you will be notified via email to access login features.";
        echo "lawyer-register.php";
    }else{
        $_SESSION['msg'] = "Account Could not be created.";
        echo $expertise,mysqli_error($conn);
    }
?>