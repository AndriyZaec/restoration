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

    $sql="SELECT * FROM restoration.resturant";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
        $resturants[]=$row;
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
echo $twig->render('list.html', array('resturants'=>$resturants));