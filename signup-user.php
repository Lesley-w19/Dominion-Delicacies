
<?php 
session_start();
require 'db_connection.php';
require 'controllerSignUpUser.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location:my-account.php');
exit;
}
?>
<?php include_once 'header.php';?>

<?php include_once 'styleForm.php';?>

 <!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Sign Up </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->

    <div class="contact-box-main">
        <div class="container login">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2> Sign Up </h2>
                        <p class="text-center">Enter your account details below.</p>
                        <form action="signup-user.php" method="POST" autocomplete="">
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                    
                                        <input type="text" placeholder="Your Full Name" id="name" class="form-control"  name="name"" required data-error="Please enter your full name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                    
                                        <input placeholder="Your Email Address" id="email" class="form-control" type="email" name="email"  required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required data-error="Please enter your password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="password" type="password" name="cpassword" placeholder="Confirm Password" required data-error="Enter your confirm password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->
                      
                    
                    <?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
                                    <div class="submit-button text-center">
                                    <div class="form-group">
                            <input class="form-control loginbtn btn button hvr-hover" type="submit" name="signup" value="Signup">
                    </div>   
                                    </div>

                                    <div class=" text-center ">Have an account? <a href="login-user.php" class="txt">Login here</a></div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                </div>

<?php
include_once 'footer.php';
?>