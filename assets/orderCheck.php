<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    $con = mysqli_connect("localhost","root","785019","restoration");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die;
    }

    if(isset($_POST)){
        $todayDate = new DateTime();
        $todayTime = new DateTime();
        $todayDate->format("m/d/Y");
        $todayTime->format("H:i");
        $duration=new DateInterval("PT1H");
        $todayTime->add($duration);
        if($_POST['date']>=$todayDate->format("m/d/Y") and $_POST['time']>$todayTime->format("H:i")){
            $sql=("INSERT INTO orders (date,time,client,guests,resturant) VALUES('".$_POST['date']."','".$_POST['time']."','".$_POST['client']."','".$_POST['guests']."','".$_POST['id']."')");
            if($con->query($sql)){
                echo 'true';
            }else{
                echo 'bad';
            }
        }else{
            echo 'bad';
        }
    }