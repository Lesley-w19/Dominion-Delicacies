<?php 
session_start();
require "db_connection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not a match!";
    }
    $email_check = "SELECT * FROM useraccounts WHERE user_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered  already exists!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO useraccounts (full_name, user_email, user_password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);

        if($data_check){
            header('location: my-account.php');
                exit();
            // $subject = "Email Verification Code";
            // $message = "Your verification code is $code";
            // $sender = "From: shahiprem7890@gmail.com";
            // if(mail($email, $subject, $message, $sender)){
            //     $info = "We've sent a verification code to your email - $email";
            //     $_SESSION['info'] = $info;
            //     $_SESSION['email'] = $email;
            //     $_SESSION['password'] = $password;
            //     header('location: user-otp.php');
            //     exit();
            // }else{
            //     $errors['otp-error'] = "Failed while sending code!";
            // }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
 //if user click login button
 if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM useraccounts WHERE user_email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['user_password'];
        if(password_verify($password, $fetch_pass)){
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if($status == 'verified'){
              $_SESSION['email'] = $email;
              $_SESSION['password'] = $password;
                header('location: my-account.php');
            // }else{
            //     $info = "It's look like you haven't still verify your email - $email";
            //     $_SESSION['info'] = $info;
            //     header('location: user-otp.php');
            // }
            }
        }else{
            $errors['email'] = "Incorrect email or password!";
        }
    }else{
        $errors['email'] = "It's look like you do not yet an account! Click on the bottom link to signup.";
    }
}