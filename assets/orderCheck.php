<?php
$con = mysqli_connect("localhost","root","785019","restoration");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die;
}

if(isset($_POST)){
    $result = $con->query("SELECT `e-mail` FROM restoration.resturant where `e-mail`='".$_POST['e_mail']."' LIMIT 1");
    if ($result->num_rows == 0) {
        echo("confirm");
        die();
    }else{
        echo("dec");
        die();
    }
}