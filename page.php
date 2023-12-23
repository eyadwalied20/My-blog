<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message =$ $_REQUEST['message']

if (isset($_POST['feedback']))
{
    $host ="localhost";
    $user ="root";
    $password ="";
    $db ="blog";

    $conn = mysqli_connect($host,$user,$password,$db );


    $insert ="insert into users feedback values('$name', '$email','$message')" ;

    mysqli_query($conn ,$insert);

    if($conn){
        echo("<h1> Thanks for sending Your feedback  </h1>");
    }

   
}
?>