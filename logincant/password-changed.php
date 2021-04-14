<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
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
                        <li class="breadcrumb-item active"> Login </li>
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
                    <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                        <form  action="login-user.php" method="POST">
                            <div class="row">
                                    <div class="submit-button text-center">
                                    <div class="form-group">
                            <input class="form-control loginbtn btn button hvr-hover" type="submit" name="login-now" value="Login Now">
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












