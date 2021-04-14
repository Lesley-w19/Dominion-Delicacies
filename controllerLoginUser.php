<?php



// to loginn userr

if(isset($_POST['email']) && isset($_POST['password'])){

    // CHECK IF FIELDS ARE NOT EMPTY
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){
    
    // Escape special characters.
    $email = mysqli_real_escape_string($con, htmlspecialchars(trim($_POST['email'])));
    
    $query = mysqli_query($con, "SELECT * FROM `useraccounts` WHERE user_email = '$email'");
    
    if(mysqli_num_rows($query) > 0){
    
    $row = mysqli_fetch_assoc($query);
    $user_db_pass = $row['user_password'];
    
    // VERIFY PASSWORD
    $check_password = password_verify($_POST['password'], $user_db_pass);
    
    if($check_password === TRUE){
    
    session_regenerate_id(true);
    
    $_SESSION['user_email'] = $email;  
    header('Location: my-account.php.');
    exit;
    
    }
    else{
    // INCORRECT PASSWORD
    $error_message = "Incorrect Email Address or Password.";
    
    }
    
    }
    else{
    // EMAIL NOT REGISTERED
    $error_message = "You have no account. Sign up below";
    }
    
    }
    else{
    
    // IF FIELDS ARE EMPTY
    $error_message = "Please fill in all the required fields.";
    }
    
    }



?>