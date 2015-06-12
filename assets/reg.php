<?php

        $con = mysqli_connect("localhost","root","785019","restoration");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
        
        $e_mail=$_POST['regE-mail'];
        $pass=md5($_POST['regPass']);
        $name=$_POST['name'];
        $name=str_replace('"'," ",$name);
        $descript=$_POST['descript'];
        $descript=str_replace("'","\'",$descript);
        mkdir("images/".$e_mail."/", 0700);
        $uploadfile0 = "images/".$e_mail.'/'.$_FILES['photo0']['name'];
        move_uploaded_file($_FILES['photo0']['tmp_name'], $uploadfile0);
        $uploadfile1 = "images/".$e_mail.'/'.$_FILES['photo1']['name'];
        move_uploaded_file($_FILES['photo1']['tmp_name'], $uploadfile1);
        $uploadfile2 = "images/".$e_mail.'/'.$_FILES['photo2']['name'];
        move_uploaded_file($_FILES['photo2']['tmp_name'], $uploadfile2);


       $sql=("INSERT INTO resturant (name,`e-mail`,pass,descript,photo1,photo2,photo3)   VALUES('".$name."','".$e_mail."','".$pass."','".$descript."','".$uploadfile0."','".$uploadfile1."','".$uploadfile2."')");

        
        mysqli_query($con,$sql);

        mysqli_close($con);
?>