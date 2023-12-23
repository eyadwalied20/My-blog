<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


if (isset($_POST['ok']))
{
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="blog";

    $conn = mysqli_connect($host,$user,$password,$db );


    $insert ="insert into users values('$email', '$password')" ;

    mysqli_query($conn ,$insert);

    if($conn){
        echo("<h1>  Your Login is done </h1>");
    }

    else{
        echo("<h1>  Your Login is failed </h1>");
    }
}
?>