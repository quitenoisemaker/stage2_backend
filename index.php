<?php
include ('include/db.php');
session_start();
// print_r($conn) ;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Resume</title>
    <style>
        body {
        display: none;
      }

    </style>
</head>


<body>
    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content pt-4">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Form -->
                    <form action="" method="POST">
                        <div class="">
                            <!-- Header -->
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                    <!-- Pretitle -->
                                    <a href="https://training.zuri.team" target="blank"><img src="logo/download.png" class="img-fluid" width="300"></a><br><br><br>
                                    <!-- Title -->
                                    <h1 class="mb-3">
                                        Personal details
                                    </h1>
                                </div>
                            </div> <!-- / .row -->
                            <!-- Team name -->
                            <div class="form-group">
                                <!-- Label -->
                                <label>
                                    Name<small class="text-danger">
                                    *
                                </small>
                                </label>
                                <!-- Text -->
                                <small class="form-text text-danger">
                                    Enter your full name. Surname first
                                </small>
                                <!-- Input -->
                                <input type="text" name="fname" required="" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- Label -->
                                <label>
                                    Address<small class="text-danger">
                                    *
                                </small>
                                </label>
                                <!-- Input -->
                                <input type="text" name="address" required="" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Start date -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label>
                                            Phone number<small class="text-danger">
                                    *
                                </small>
                                        </label>
                                        <!-- Text -->
                                        <small class="form-text text-danger">
                                            for more than one number please separate with a comma
                                        </small>
                                        <!-- Input -->
                                        <input type="text" name="phone" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Start date -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label>
                                            Email<small class="text-danger">
                                    *
                                </small>
                                        </label>
                                        <!-- Text -->
                                        <small class="form-text text-danger">
                                            for more than one email please separate with a comma
                                        </small>
                                        <!-- Input -->
                                        <input type="email" required="" name="email" class="form-control" >
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- Start date -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label>
                                            Skills
                                        </label>
                                        <small class="form-text text-danger">
                                            Please separate with a comma
                                        </small>
                                        
                                        <!-- Input -->
                                        <input type="text" name="skills" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Start date -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label>
                                            Interest
                                        </label>
                                        <small class="form-text text-danger">
                                            Please separate with a comma
                                        </small>
              
                                        <!-- Input -->
                                        <input type="text" name="interest" class="form-control">
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                            <!-- Team description -->
                            <div class="form-group">
                                <!-- Label -->
                                <label class="mb-1">
                                    Objectives
                                </label>
                                <!-- Text -->
                                <!-- <small class="form-text text-danger">
                                    This is how others will learn about the project, so make it good!
                                </small> -->
                                <!-- Quill -->
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="obj" rows="3"></textarea>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                  <!-- Title -->
                                    <h1 class="mb-3">
                                        Previous Experience
                                    </h1>
                                    <small class="form-text text-danger">
                                    Please enter your recent work experience.
                                </small>
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        Company name<small class="text-danger">
                                    *
                                </small>
                                    </label>
                                    <!-- Input -->
                                    <input type="text" name="cname" required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        Job title<small class="text-danger">
                                    *
                                </small>
                                    </label>
                                    <!-- Input -->
                                    <input type="text" name="title" required="" class="form-control">
                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        From
                                    </label>
                                    <!-- Input -->
                                    <input type="date" name="date_start_c" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        To
                                    </label>
                                    <!-- Input -->
                                    <input type="date" name="date_end_c" class="form-control" >
                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <!-- Team description -->
                        <div class="form-group">
                            <!-- Label -->
                            <label class="mb-1">
                                Job description
                            </label>
                            <textarea class="form-control" name="desc_c" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                  <!-- Title -->
                                    <h1 class="mb-3">
                                        Education
                                    </h1>
                                    <small class="form-text text-danger">
                                    Please enter your recent work experience.
                                </small>
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        Institution name<small class="text-danger">
                                    *
                                </small>
                                    </label>
                                    <!-- Input -->
                                    <input type="text" name="name_e" required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        Degree<small class="text-danger">
                                    *
                                </small>
                                    </label>
                                    <!-- Input -->
                                    <input type="text" name="degree" required="" class="form-control" >
                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        From
                                    </label>
                                    <!-- Input -->
                                    <input type="date" name="date_start_e" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label>
                                        To
                                    </label>
                                    <!-- Input -->
                                    <input type="date" name="date_end_e" class="form-control">
                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <!-- Team description -->
                        <div class="form-group">
                            <!-- Label -->
                            <label class="mb-1">
                                Archievement
                            </label>
                            <textarea class="form-control" name="archive" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <!-- Divider -->
                        <hr class="my-5">
                        <!-- Footer -->
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Button -->
                                <button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 
    </form>

    <?php

    if (isset($_POST['submit'])) {
      # code...

      $_SESSION['fname']=$_POST['fname'];
      $_SESSION['address']=$_POST['address'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['phone']=$_POST['phone'];
      $_SESSION['obj']=$_POST['obj'];
      $_SESSION['skills']=$_POST['skills'];
      $_SESSION['interest']=$_POST['interest'];
      $_SESSION['title']=$_POST['title'];
      $_SESSION['cname']=$_POST['cname'];
      $_SESSION['date_start_c']=$_POST['date_start_c'];
      $_SESSION['date_end_c']=$_POST['date_end_c'];
      $_SESSION['desc_c']=$_POST['desc_c'];
      $_SESSION['degree']=$_POST['degree'];
      $_SESSION['name_e']=$_POST['name_e'];
      $_SESSION['date_start_e']=$_POST['date_start_e'];
      $_SESSION['date_end_e']=$_POST['date_end_e'];
      $_SESSION['archive']=$_POST['archive'];


// echo "<script>alert('success')</script>";

echo "<script>swal({
          title: 'Thanks for filling form',
          icon: 'success',
          button: 'Ok!',
        })
        .then(function() {
                swal({
                            title: 'Please Wait!',
                            text: 'Processing Resume ...',
                            timer: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            onOpen: () => {
                                swal.showLoading()
                            }
                        })
                    window.location = 'cv';
                });</script>";

     
    //   $insert_p=mysqli_query($conn,"INSERT INTO `users`(`id`, `name`, `address`, `email`, `phone`, `obj`, `skills`, `team_work`, `cert`, `interest`) VALUES (NULL,'$_POST[fname]','$_POST[address]','$_POST[email]','$_POST[phone]','$_POST[obj]','$_POST[skills]','','','$_POST[interest]')");

    //   $insert_c=mysqli_query($conn,"INSERT INTO `experience`(`id`, `title`, `name`, `date_started`, `date_end`, `descrip`) VALUES (NULL,'$_POST[title]','$_POST[cname]','$_POST[date_start_c]','$_POST[date_end_c]','$_POST[desc_c]')");

    //   $insert_e=mysqli_query($conn,"INSERT INTO `education`(`id`, `name`, `degree`, `date_start`, `date_end`, `arch`) VALUES (NULL,'$_POST[name_e]','$_POST[degree]','$_POST[date_start_e]','$_POST[date_end_e]','$_POST[archive]')");

    //   if ($insert_p && $insert_e && $insert_c) {
    //   echo "<script>alert('success')</script>";
    // }else{
    //   echo "<script>alert('Error')</script>";
    // }
     }

    
    ?>
    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
</body>

</html>