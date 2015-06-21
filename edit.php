<?php
    //include_once("assets/connection.php");

        $con = mysqli_connect("localhost","root","785019","restoration");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
        $name='ololol';
        $descript='blalba';
        $email='EMAIL';
        if(isset($_POST['pass']) && isset($_POST['E-mail'])){
            $sql="SELECT * FROM restoration.resturant WHERE `e-mail`='".$_POST['E-mail']."' and pass='".md5($_POST['pass'])."'";
            $result=$con->query($sql);
            while($row = $result->fetch_assoc()) {
                $data=$row;
                $email=$row['e-mail'];
            }
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
    echo $twig->render('edit.html', array('email' => $email,'data' => $data));
