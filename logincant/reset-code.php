


<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
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
                        <li class="breadcrumb-item active"> Reset Code </li>
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
                        <h2> Code Verification</h2>
                        <p class="text-center">Reset your code</p>
                        <form  action="reset-code.php" method="POST" autocomplete="off">
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" placeholder="Enter  code" id="email" class="form-control"  name="otp"  required data-error="Please enter  code">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                
                               
                    </div>          

                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                                    <div class="submit-button text-center">
                                    <div class="form-group">
                            <input class="form-control loginbtn btn button hvr-hover" type="submit" name="check-reset-otp" value="Submit">
                </div>
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







