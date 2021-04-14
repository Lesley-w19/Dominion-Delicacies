<!-- to insert user in the db -->

<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['name'])) && !empty(trim($_POST['email'])) && !empty($_POST['password'])){

// Escape special characters.
$name = mysqli_real_escape_string($con, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($con, htmlspecialchars($_POST['email']));

//IF EMAIL IS VALID
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  

// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($con, "SELECT `user_email` FROM `useraccounts` WHERE user_email = '$email'");

if(mysqli_num_rows($check_email) > 0){    
$error_message = "This Email Address is already registered. Please Try another.";
}
else{
// IF EMAIL IS NOT REGISTERED
/* -- 

ENCRYPT USER PASSWORD USING PHP password_hash function 
LEARN ABOUT PHP password_hash - http://php.net/manual/en/function.password-hash.php

-- */

$user_hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// INSER USER INTO THE DATABASE
$insert_user = mysqli_query($con, "INSERT INTO `useraccounts` (full_name, user_email, user_password) VALUES ('$name', '$email', '$user_hash_password')");

if($insert_user === TRUE){
$success_message = "Thanks! You have successfully signed up.";
}
else{
$error_message = "Oops! something wrong.";
}
}    
}
else {
// IF EMAIL IS INVALID
$error_message = "Invalid email address";
}
}
else{
// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields.";
}
}
?>






