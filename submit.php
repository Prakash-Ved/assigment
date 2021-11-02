<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$about = $_POST['about'];
$captcha = $_POST['captcha'];
$dob = $_POST['dob'];
$sessioncaptcha =  $_SESSION['captcha'];

if ($sessioncaptcha==$captcha){
    $conn =  mysqli_connect('localhost', 'root','','test');
    $sql = "insert into user (name,email,about,dob,captcha) values ('$name','$email','$about','$dob','$captcha')";

    if (mysqli_query($conn,$sql)){
        echo'<p>Success fully inserted</p>';
    }else{
        echo'not';
    }
 
}else{
    $_SESSION['captchaerror'] = 'error';
    header('Location:index.php');

}

?>