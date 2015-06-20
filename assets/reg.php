<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

        echo '<meta charset="utf-8"';

        $con = mysqli_connect("localhost","root","785019","restoration");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }

        $tel=$_POST['tel'];
        $address=$_POST['address'];
        $e_mail=$_POST['regE-mail'];
        $pass=md5($_POST['regPass']);
        $name=$_POST['name'];
        $name=str_replace('"'," ",$name);
        $descript=$_POST['descript'];
        $count=$_POST['count'];
        $descript=str_replace("'","\'",$descript);
        mkdir("images/".$e_mail."/", 0700);
        if(isset($_FILES['photo0'])){
            $uploadfile0 = "images/".$e_mail.'/'.$_FILES['photo0']['name'];
            move_uploaded_file($_FILES['photo0']['tmp_name'], $uploadfile0);
        }
        if(isset($_FILES['photo1'])){
            $uploadfile1 = "images/".$e_mail.'/'.$_FILES['photo1']['name'];
            move_uploaded_file($_FILES['photo1']['tmp_name'], $uploadfile1);
        }
        if(isset($_FILES['photo2'])){
            $uploadfile2 = "images/".$e_mail.'/'.$_FILES['photo2']['name'];
            move_uploaded_file($_FILES['photo2']['tmp_name'], $uploadfile2);
        }


       $sql=("INSERT INTO resturant (name,tel,address,`e-mail`,pass,descript,photo1,photo2,photo3,tablesCount)   VALUES('".$name."','".$tel."','".$address."','".$e_mail."','".$pass."','".$descript."','".$uploadfile0."','".$uploadfile1."','".$uploadfile2."','".$count."')");


        if(mysqli_query($con,$sql)){
            $answer=true;
        }else{
            $answer=false;
        }
        mysqli_close($con);

        try{
            require_once '../lib/Twig/Autoloader.php';
            Twig_Autoloader::register();
            $loader = new Twig_Loader_Filesystem('../templates');
            $twig = new Twig_Environment($loader, array(
                'cache'       => 'compilation_cache',
                'auto_reload' => true
            ));
            }
        catch(Exception $e){
            print($e);
        }
        echo $twig->render('registration.html', array('answer'=>$answer,'name'=>$name));
