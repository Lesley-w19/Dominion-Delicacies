<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<?php 
include_once 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
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
                     <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="password" type="password" name="password" placeholder="Create new password" required required data-error="Create new password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                    <div class="form-group">
                                        <input type="text" class="form-control" id="password" type="password" name="cpassword" placeholder="Confirm new password" required required data-error="Confirm new password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                            <input class="form-control loginbtn btn button hvr-hover" type="submit" name="change-password" value="Change Password">
                    <div class="form-group">
                      
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php
include_once 'footer.php';
?>