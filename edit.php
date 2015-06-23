<?php
    //include_once("assets/connection.php");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
        $con = mysqli_connect("localhost","root","785019","restoration");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
        if(isset($_POST['pass']) && isset($_POST['E-mail'])){
            $sql="SELECT * FROM restoration.resturant WHERE `e-mail`='".$_POST['E-mail']."' and pass='".md5($_POST['pass'])."'";
            $result=$con->query($sql);
            while($row = $result->fetch_assoc()) {
                $data=$row;
                $email=$row['e-mail'];
            }
            $sql="SELECT id_r FROM restoration.resturant WHERE `e-mail`='".$_POST['E-mail']."' LIMIT 1";
            $result=$con->query($sql);
            while($row = $result->fetch_assoc()) {
                $id=$row['id_r'];
            }
            $orders=array();
            $todayDate = new DateTime();
            $todayTime = new DateTime();
            $todayDate->format("m/d/Y");
            $todayTime->format("H:i");
            $sql="SELECT * FROM restoration.orders WHERE resturant='".$id."'";
            $result=$con->query($sql);
            while($row = $result->fetch_assoc()) {
                $orders[]=$row;
//                $orderDate=$orders['date']->format("m/d/Y");
//                if($orders['date']>$orderDate)
            }

            try{
                require_once 'lib/Twig/Autoloader.php';
                Twig_Autoloader::register();
                $loader = new Twig_Loader_Filesystem('templates');
                $twig = new Twig_Environment($loader, array(
                    'cache'       => 'compilation_cache',
                    'auto_reload' => true
                ));
            }
            catch(Exception $e){
                print($e);
            }
            echo $twig->render('edit.html', array('email' => $email,'data' => $data,'orders'=>$orders));
        }
        else{
           header('Location: index.php');
        }

