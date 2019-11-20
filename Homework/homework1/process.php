<?php
//Process Login
 if(isset($_POST['btn-submit'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if (empty($username) || empty($password)) {
                header('Location: field_login.php');
                die();
        }

        if ($username == "admin" && $password == "password") {
            header('Location: success_login.php');
        }else {
            header('Location: account_login.php');
        }
}

//Click on Go Back go to Login Form
if(isset($_POST['field_login'])) {
    header('Location: index.php');
}

//Click on Log Out go to Login Form
if(isset($_POST['success_login'])) {
    header('Location: index.php');
}
//Click on Register go to Login Form
if(isset($_POST['account_login'])) {
    header('Location: index.php');
}

//click on Register go to register form
if(isset($_POST['submits'])) {
    header('Location: register.php');
}

//click on Back to Login go to Login Form 
if(isset($_POST['register-login'])) {
    header('Location: index.php');
}

//Process Register
session_start();
if(isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $_SESSION['name']=$username;
    $_SESSION['pwd']=$password;
    $_SESSION['em']=$email;
    $_SESSION['sms']=$message;

    if (empty($username) || empty($password) || empty($email)) {
            header('Location: field_register.php');
            
    }else {
        header('Location: success_register.php');
    }
}

//click on Back to register go to Register Form
if(isset($_POST['field_register'])) {
    header('Location:  register.php');
}

//click log out (success register) go to login form
if(isset($_POST['register'])) {
    header('Location: index.php');
}
?>