<?php
$Firstname = $_REQUEST['F_name'];
$Lastname = $_REQUEST['L_name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];



if (isset($_POST['submit']))
{
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="blog";

    $conn = mysqli_connect($host,$user,$password,$db );


    $insert ="insert into users signup values('$Firstname','$Lastname','$email', '$password')" ;

    mysqli_query($conn ,$insert);

    if($conn){
        echo("<h1>  Your Signup is done </h1>");
    }

    else{
        echo("<h1>  ERROR </h1>");
    }
}




?>