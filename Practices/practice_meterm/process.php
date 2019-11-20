<?php
//empty information go to faild login
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "" && $password == "") {
       header('Location:faild_login.php'); 
    }
    if($username === "admin" && $password === "password") {
        header('location: success_login.php');
    }else {
        header('Location: account.php');
    }
}
//click back to login go to login form
if (isset($_POST['btn-register'])) {
    header('location: index.php');
}

//click register go to register form
if(isset($_POST['btn-submit'])) {
    header('Location: register.php');
}
//define register
session_start();
if(isset($_POST['register'])) {
    $username = ['$username'];
    $password = ['$password'];
    $email = ['$email'];
    $message = [' $message'];

    if ($username == "" || $password == "" || $email == "") {
        header('location: faild_register.php');
    }else {
        header('location: success_register.php');
    }

    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    $_SESSION['em'] =$email;
    $_SESSION['sms'] = $message;

}
//click log out go to login form
if(isset($_POST['success_register'])) {
    header('location: index.php');
}
?>